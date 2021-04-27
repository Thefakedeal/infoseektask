<?php

namespace Tests\Feature;

use App\Helpers\CSV;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CSVTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insertion()
    {   
        $faker = Factory::create();
        $client = [
            "name"=> $faker->name,
            "gender"=> "male",
            "phone"=> $faker->phoneNumber,
            "email"=> $faker->email,
            "address"=> $faker->address,
            "nationality"=> "Nepal",
            "dob"=> $faker->date(),
            "education"=> "Bachelors",
            "mode_of_contact"=> "email"
        ];

        $this->assertTrue(CSV::insert(base_path('resources/files/csv/clients.csv'), $client));
    }
}
