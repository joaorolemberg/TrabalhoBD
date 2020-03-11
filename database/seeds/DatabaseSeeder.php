<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('planeta')->insert([

            'name'=>'Jupiter',
            'peso'=>'1321'
        
        ]);

        DB::table('planeta')->insert([

            'name'=>'Saturno',
            'peso'=>'6546'
        
        ]);

        DB::table('planeta')->insert([

            'name'=>'Urano',
            'peso'=>'564564'
        
        ]);

        DB::table('planeta')->insert([

            'name'=>'netuno',
            'peso'=>'5213'
        
        ]);
    }
}
