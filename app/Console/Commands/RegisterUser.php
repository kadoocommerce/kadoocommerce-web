<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class RegisterUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kadoo:register {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea un usuario nuevo';

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
     * @return mixed
     */
    public function handle()
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = new User();
        $user->email = $email;
        $user->name = $email;
        $user->password = Hash::make($password);
        $user->save();
        $this->info($user);
    }
}
