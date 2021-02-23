<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for ($i = 0; $i < 10; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->word(3);
            $newPost->body = $faker->text(300);
            $newPost->save();
        }

    }
}
