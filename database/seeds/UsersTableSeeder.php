<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Admin',
            'slug'=>'admin',
            'special'=>'all-access',
        ]);

        $user = User::create([
            // 'name'=>'Cristian',
            // 'email'=>'Cristian@gmail.com',
            // 'password'=>'$2y$10$o.CnHSqHSCQ7qSj4zlJU7u0N1QiKqrIjJ2bLP8j/wdw3W8NCA3DkK',
            'name'=>'Jesus',
            'email'=>'jtcastro98@gmail.com',
            'password'=>'$2y$10$qpDdKyP35kvJzsw0OakmuOg51B8y.jM8pR81KaoTz0lUULmF5lIje',
        ]);

        $user->roles()->sync(1);
    }
}
