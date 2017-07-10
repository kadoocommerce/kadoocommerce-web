<?php

namespace App\Console\Commands;

use App\Role;
use App\User;
use Illuminate\Console\Command;

class AdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kadoo:admin {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convierte un usuario en administrador';

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
        $user = User::where('email', $email)->first();
        if (empty($user)) {
            $this->error('No existe el usuario proporcionado');
        } else {
            $admin = Role::where('name', 'admin')->first();
            $user->attachRole($admin);
            $this->info('El usuario ahora es administrador');
        }
    }
}
