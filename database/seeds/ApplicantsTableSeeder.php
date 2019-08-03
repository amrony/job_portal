<?php

use Illuminate\Database\Seeder;

class ApplicantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Applicant::insert([
            'first_name' => 'Aminul',
            'last_name' => 'Islam',
            'email' => 'aminul409@gmail.com',
            'password' => bcrypt('11223344'),
        ]);
    }
}
