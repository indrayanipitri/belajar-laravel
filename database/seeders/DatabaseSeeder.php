<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
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
        User::factory(4)->create();


        Category::create([
            'name' => 'Curhatan',
            'slug' => 'curhatan'
        ]);

        Category::create([
            'name' => 'Motivation',
            'slug' => 'motivation'
        ]);

        Article::factory(10) -> create();

        
        // User::create([
        //     'name' => 'Airin',
        //     'email' => 'airin@gmail.com',
        //     'password' => bcrypt('zainmalik')
        // ]);

        // User::create([
        //     'name' => 'Dina',
        //     'email' => 'dina@gmail.com',
        //     'password' => bcrypt('zainmalik')
        // ]);

        // User::create([
        //     'name' => 'Pitri',
        //     'email' => 'pitri@gmail.com',
        //     'password' => bcrypt('zainmalik')
        // ]);

        // Article::create([
        //     'title' => 'Hai Masa Depan',
        //     'slug' => 'hai-masa-depan',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure esse ipsum reiciendis praesentium in fugiat nobis similique vitae ea temporibus ducimus odio veniam, assumenda molestias consequuntur distinctio quas non expedita.',
        //     'body' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, qui inventore laudantium architecto ad, modi ea fuga, quasi dicta assumenda odio consequuntur enim eius perferendis! Rem iure quod alias nemo, nihil ipsam reprehenderit sunt, corrupti, recusandae voluptates veniam. Enim excepturi, hic, magnam voluptatum, sint laborum unde doloribus laudantium maxime necessitatibus exercitationem. Et ab iusto sunt? Totam autem perferendis dicta possimus quae? Veritatis repudiandae quos deserunt minus error quidem accusamus, possimus ducimus eaque tempora numquam ea vitae beatae magni? Illo et error omnis, voluptatum reprehenderit tempore, possimus unde, rerum porro saepe tempora debitis libero velit blanditiis perferendis. Voluptate at suscipit debitis!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Article::create([
        //     'title' => 'Yuk Bisa Yuk',
        //     'slug' => 'yuk-bisa-yuk',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure esse ipsum reiciendis praesentium in fugiat nobis similique vitae ea temporibus ducimus odio veniam, assumenda molestias consequuntur distinctio quas non expedita.',
        //     'body' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, qui inventore laudantium architecto ad, modi ea fuga, quasi dicta assumenda odio consequuntur enim eius perferendis! Rem iure quod alias nemo, nihil ipsam reprehenderit sunt, corrupti, recusandae voluptates veniam. Enim excepturi, hic, magnam voluptatum, sint laborum unde doloribus laudantium maxime necessitatibus exercitationem. Et ab iusto sunt? Totam autem perferendis dicta possimus quae? Veritatis repudiandae quos deserunt minus error quidem accusamus, possimus ducimus eaque tempora numquam ea vitae beatae magni? Illo et error omnis, voluptatum reprehenderit tempore, possimus unde, rerum porro saepe tempora debitis libero velit blanditiis perferendis. Voluptate at suscipit debitis!',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);

        // Article::create([
        //     'title' => 'You Can Do It!',
        //     'slug' => 'you-can-do-it',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure esse ipsum reiciendis praesentium in fugiat nobis similique vitae ea temporibus ducimus odio veniam, assumenda molestias consequuntur distinctio quas non expedita.',
        //     'body' =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, qui inventore laudantium architecto ad, modi ea fuga, quasi dicta assumenda odio consequuntur enim eius perferendis! Rem iure quod alias nemo, nihil ipsam reprehenderit sunt, corrupti, recusandae voluptates veniam. Enim excepturi, hic, magnam voluptatum, sint laborum unde doloribus laudantium maxime necessitatibus exercitationem. Et ab iusto sunt? Totam autem perferendis dicta possimus quae? Veritatis repudiandae quos deserunt minus error quidem accusamus, possimus ducimus eaque tempora numquam ea vitae beatae magni? Illo et error omnis, voluptatum reprehenderit tempore, possimus unde, rerum porro saepe tempora debitis libero velit blanditiis perferendis. Voluptate at suscipit debitis!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
