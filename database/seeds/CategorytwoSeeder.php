<?php

use Illuminate\Database\Seeder;
use App\Categorytwo;
use Faker\Generator as Faker;

class CategorytwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        /*
        $categories_list = config('cats');
        
        foreach ($categories_list as $cat) {
            $newCat = new Categorytwo();
            $newCat->name = $cat['name'];
            $newCat->description = $cat['description'];
            $newCat->save();
        }
        */

        for ($i=0; $i < 10; $i++) { 
            $newCat = new Categorytwo();
            $newCat->name = $faker->word();
            $newCat->description = $faker->sentence(6);
            $newCat->save();
        }


    }
}
