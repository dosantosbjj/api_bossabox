<?php

use App\Tools;
use Illuminate\Database\Seeder;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i<=15; $i++){
            Tools::create([
                'title' => $faker->sentence(),
                'link'  => $faker->url(),
                'description' => $faker->sentence(),
                'tags' => $faker->words(4)
            ]);
        }
    }
}
