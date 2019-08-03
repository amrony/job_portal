<?php

use Illuminate\Database\Seeder;

class EmloyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Employer::insert([
            'first_name' => 'MD',
            'last_name' => 'Aminul',
            'business_name' => 'Software Sell',
            'company_name' => 'Namespace It',
            'email' => 'aminul@gmail.com',
            'password' => bcrypt('11223344'),
        ]);
    }
}
