<?php
 
class UsersSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('user')->truncate();
 
        $user = array(
            'username' => 'ezeezegg',
            'full_name' => 'Ezequiel Gonzalez',
            'email' => 'ezeezegg@gmail.com',
            'password' => Hash::make('admin'),
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'), 
            );
 
        // Uncomment the below to run the seeder
         DB::table('users')->insert($user);
    }
 
}