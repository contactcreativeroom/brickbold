<?php

namespace App\Console\Commands;

use App\Helper\Helper;
use App\Models\UserSubscription;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ExpiredPackageNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'expired:package-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email notifications for expired packages';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        UserSubscription::where('status', 1)->whereDate('end_date', '<', Carbon::today()) 
            ->where('email_sent', '!=', 1) 
            ->chunk(50, function ($subscriptions) {
                foreach ($subscriptions as $subscription) {
                    $user = $subscription->user;
                    if ($user) {
                        $name = $user->name;
                        $mobile = $user->phone;
                        $email = $user->email;
                        $packageName = $subscription->package->name ?? '';
                        $endDate = Helper::formatStringDate($subscription->end_date);
                        if ($user->email) {
                            $details = [
                                'logo' => Helper::getLogo(),
                                'name' => $name,
                                'email' => $email,
                                'package_name' => $packageName,
                                'end_date' => $endDate,
                            ];
                            dispatch(new \App\Jobs\ExpiredPackageQueue($details));
                        }
                        $subscription->update(['email_sent' => 1]);

                        if ($user->phone) {
                            $templateId = config('constants.MOBILE_SMS.TEMPLATED_ID_PACKAGE_EXPIRED');
                            $message = "Hi ".$name." Your property listing package has expired on ".$endDate.". Pls Upgrade or renew your package ".$packageName." Brickbold.";
                            Helper::sentSMS($mobile, $message, $templateId);
                        }  
                    }

                }
            });

        $this->info('Expired package notifications processed successfully.');
    }
}
