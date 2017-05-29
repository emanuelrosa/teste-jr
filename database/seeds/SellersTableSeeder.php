<?php

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seller = new \App\Seller();

        $seller->name = 'Test';

        $seller->email = 'test@test.com';

        $seller->save();
    }
}
