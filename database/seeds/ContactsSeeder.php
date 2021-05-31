<?php

use Illuminate\Database\Seeder;
use App\Contacts;
use Faker\Factory as Faker;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
        Contacts::create(
            [
                'name'=>$faker->name,
                'email'=>$faker->email,
                'phonenumber'=>$faker->phonenumber,
                'phonenumber2'=>$faker->tollFreePhoneNumber,
                'company'=>$faker->company,
                'position'=>$faker->jobTitle,
                'file'=>$faker->image($dir = public_path().'/Contactimage/', $width = '265px', $height = '220px'),
                'totalproject'=>'0',
            ]
        );
    }
    }
}
