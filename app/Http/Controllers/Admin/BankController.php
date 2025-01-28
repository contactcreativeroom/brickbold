<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule; 

class BankController extends Controller
{
    public $successStatus=200;
    private $prefix = 'admin';
    private $pagerecords;

    public function __construct(){
    	$this->middleware('admin');
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
    }

    public function list(Request $request){
        $banks = Bank::orderBy('priority', 'asc')->paginate($this->pagerecords);
        $data=array('rows'=>$banks);
        return view($this->prefix.'.banks.list')->with($data);
    }

    public function add(Request $request){
        return view($this->prefix.'.banks.form');
    }

    public function edit(Request $request, $id) {
        $bank = Bank::find($id);
        $data = array('row' => $bank);
        return view($this->prefix.'.banks.form')->with($data);
    }

    public function postData(Request $request){
         $id = trim($request->input('id'));
        $validationArray=array(
            'name' => 'required',            
            'interest' => 'required',            
            'tenure' => 'required',            
            'name' => 'required',            
        );
        if(empty($id)){
            $validationArray['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }
        $validator = Validator::make($request->all(), $validationArray);
        if($validator->fails()){
            $errorMessage=null;
            foreach($validator->errors()->getMessages() as $error){
                $errorMessage=$error[0];
                break;
            }
            Helper::toastMsg(false, $errorMessage);
            return redirect()->back(); 
        }       

        DB::beginTransaction();        
        if(empty($id)){
            $priority = Bank::max('priority'); 
            $bank = Bank::create([
                'name' => $request->name,
                'interest' => $request->interest ?? NULL,
                'tenure' => $request->tenure ?? NULL,
                // 'priority' => $priority + 1,
                'status' => $request->status,
            ]);
        }else{
            $bank = Bank::find($id); 
            $bank->update([
                'name' => $request->name,
                'interest' => $request->interest ?? NULL,
                'tenure' => $request->tenure ?? NULL,
                'status' => $request->status,
            ]);
        }

        $image = $request->file('image');
        if(isset($image)){
            Helper::uploadImage($image, $bank, 'bank', false, 'update', 'image', true, false, true, false);                 
        } 
        if ($bank) {
            DB::commit();
            Helper::toastMsg(true, 'Bank Added/Updated successfully!');
            return redirect()->route('admin.banks');
        } else {
            DB::rollBack();
            Helper::toastMsg(false, 'Failed to Added/Updated bank!');
            return redirect()->back();
        }
        
    }   

    public function changeStatus(Request $request)
    {
        $bank = Bank::find($request->entity_id);
        if($bank){
            $bank->status = $request->status;
            $bank->save();
            return response()->json(['status' => 'success', 'message' => 'Status updated successfully']);
        }
        return response()->json(['status' => false, 'message' => 'Bank not found']);
    }

    public function delete(Request $request)
    { 
        $bank = Bank::find($request->entity_id);
        if($bank){
            $bank->delete();
            return response()->json(['status' => 'success',]);
        }
        return response()->json(['status' => false, 'message' => 'Bank not found']);
    }

    public function changePriority(Request $request)
    {
        $id_sequence = $request->entityIdArr;
        foreach ($id_sequence as $key => $value) {
            Bank::where('id', $value)->update(['priority' => ($key + 1)]);
        }
        return response()->json(['status' => 'success']);
    }
}
