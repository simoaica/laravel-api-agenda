<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_emails = config('admins.admin_emails');

        if (strlen($admin_emails[0])>0) {
            foreach ($admin_emails as $email) {
                $admin = [
                    'name' => 'Big Chief in Charge',
                    'email' => $email,
                    'email_verified_at' => now(),
                    'password' => Hash::make('password'), // password
                    'remember_token' => str_random(10),
                    'is_admin' => true
                ];
                User::create($admin);
            }
        }else {
            echo  ("\n ----- No admins to be seeded -----\n ----- Create ADMIN_EMAILS='admin1@admin.com,admin2@admin.com' in .env file -----\n\n");
        }
    }
}
