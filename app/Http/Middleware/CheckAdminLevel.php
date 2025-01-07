<?php

namespace App\Http\Middleware;

use App\Helper\Helper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $admin = Auth::guard('admin')->user();
        if ($admin && $admin->level == 2) {
            // Define restricted routes or pages
            $restrictedRoutes = [
                'admin.subadmins',   
                'admin.subadmin',    
                'admin.subadmin.edit', 
                'admin.subadmin.post',  
                'admin.subadmin.delete',  
                'admin.subadmin.status.change',  
            ];

            if (in_array($request->route()->getName(), $restrictedRoutes)) {
                Helper::toastMsg(false, 'You do not have access to this page.');
                return redirect()->route('admin.dashboard');
            }
        }
        return $next($request);
    }
}
