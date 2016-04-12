<?php
class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email'      => 'test@test.test',
            'password'   => 'test',
            'username'   => 'admin',
            'first_name' => 'admin',
            'last_name'  => 'admin',
            'role'       => 'admin'
        ));

    }

}
?>
