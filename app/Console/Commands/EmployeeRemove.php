<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\TaskEmailJobs;
use App\Models\Employee;
class EmployeeRemove extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'employee:remove';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'All employee Remove';

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
        //\Log::info("We are here remove all details of employee");
        $users=Employee::get();
        foreach($users as $key=>$user){
        
            dispatch(new TaskEmailJobs($user));
        }
        
    
    }
}
