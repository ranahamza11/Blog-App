<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();


        Post::factory(30)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'my-personal-post'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'my-work-post'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'my-family-post'
        // ]);

        // Post::create([
        //     'title' => 'My First Post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
        //     'slug' => 'my-first-post',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae, deserunt. Quos repellat, earum laboriosam sapiente exercitationem quis suscipit error sint, ratione necessitatibus, consequuntur culpa. Architecto consequatur quasi vitae nihil minima.
        //                 Officiis consectetur odit animi molestias obcaecati fugiat officia, natus reiciendis! Laborum hic, ut possimus fugiat magnam doloribus quaerat aperiam alias amet perspiciatis nisi deserunt excepturi, architecto neque! Culpa, pariatur beatae.
        //                 Aperiam ipsam dolores provident, fuga iste doloribus magnam minima quis, reprehenderit aspernatur voluptatum ipsum praesentium nostrum in saepe. Id quidem, iure harum quod perspiciatis doloremque aperiam aliquid nesciunt molestiae modi.
        //                 Tenetur, voluptate sequi temporibus nostrum veniam tempore nam aspernatur, est rerum iusto recusandae dicta voluptatibus, placeat cum iure eligendi? Id harum nam, voluptate cumque excepturi dolor sapiente. Quas, corrupti porro?</p>',
        //     'category_id' => $personal->id,
        //     'user_id' => $user->id

        // ]);

        // Post::create([
        //     'title' => 'My Second Post',
        //     'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
        //     'slug' => 'my-second-post',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae, deserunt. Quos repellat, earum laboriosam sapiente exercitationem quis suscipit error sint, ratione necessitatibus, consequuntur culpa. Architecto consequatur quasi vitae nihil minima.
        //                 Officiis consectetur odit animi molestias obcaecati fugiat officia, natus reiciendis! Laborum hic, ut possimus fugiat magnam doloribus quaerat aperiam alias amet perspiciatis nisi deserunt excepturi, architecto neque! Culpa, pariatur beatae.
        //                 Aperiam ipsam dolores provident, fuga iste doloribus magnam minima quis, reprehenderit aspernatur voluptatum ipsum praesentium nostrum in saepe. Id quidem, iure harum quod perspiciatis doloremque aperiam aliquid nesciunt molestiae modi.
        //                 Tenetur, voluptate sequi temporibus nostrum veniam tempore nam aspernatur, est rerum iusto recusandae dicta voluptatibus, placeat cum iure eligendi? Id harum nam, voluptate cumque excepturi dolor sapiente. Quas, corrupti porro?</p>',
        //     'category_id' => $work->id,
        //     'user_id' => $user->id

        // ]);


    }
}
