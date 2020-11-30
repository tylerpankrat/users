<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Mail;

class DailyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily email to admin users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::all();

        foreach ($user as $a)
        {
            Mail::raw("This is automatically generated Daily Update\n
            Name: $a->name\n
            Email: $a->email\n
            Type: $a->is_admin\n
            IP: $a->last_login_ip\n
            Last login time: $a->last_login_at\n", function($message) use ($a)
            {
                $message->from('noreply@mailtrap.com');
                $message->to($a->email)->subject('Daily Update');
            });
        }
        $this->info("Daily Update has been sent successfully");
    }
}
