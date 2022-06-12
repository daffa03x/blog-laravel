<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Daffa Putra Permana',
            'username' => 'daffa',
            'email' => 'dafaputra876@gmail.com',
            'password' => bcrypt('daffa')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos quis, sapiente, aliquam quisquam ea minus ut excepturi ipsum provident aut dicta delectus natus ad totam! Possimus assumenda fugit quibusdam sequi veritatis maxime doloremque natus</p><p>accusantium necessitatibus unde facilis velit voluptatum adipisci voluptate sint ipsum impedit illum ut, repellendus, ipsa numquam ab ullam at. Tenetur quod itaque corrupti, debitis velit sint ipsam! Quidem, porro dicta ut dolores nulla natus autem laborum odio excepturi similique non tenetur ipsam deleniti labore iusto, placeat cumque architecto ullam eligendi rerum omnis aperiam, quis est numquam?</p><p>Deleniti mollitia accusantium assumenda a velit voluptates sunt ipsam ut voluptatem optio unde placeat minima impedit aliquid consequuntur doloribus perferendis tempore, quo ratione, cum quae totam neque. Amet ad ducimus quidem placeat natus et, possimus adipisci sit consequatur dolorum delectus debitis accusamus? Quidem, debitis eos totam blanditiis iure expedita non? Distinctio amet debitis aut inventore assumenda? Omnis alias provident sequi.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos quis, sapiente, aliquam quisquam ea minus ut excepturi ipsum provident aut dicta delectus natus ad totam! Possimus assumenda fugit quibusdam sequi veritatis maxime doloremque natus</p><p>accusantium necessitatibus unde facilis velit voluptatum adipisci voluptate sint ipsum impedit illum ut, repellendus, ipsa numquam ab ullam at. Tenetur quod itaque corrupti, debitis velit sint ipsam! Quidem, porro dicta ut dolores nulla natus autem laborum odio excepturi similique non tenetur ipsam deleniti labore iusto, placeat cumque architecto ullam eligendi rerum omnis aperiam, quis est numquam?</p><p>Deleniti mollitia accusantium assumenda a velit voluptates sunt ipsam ut voluptatem optio unde placeat minima impedit aliquid consequuntur doloribus perferendis tempore, quo ratione, cum quae totam neque. Amet ad ducimus quidem placeat natus et, possimus adipisci sit consequatur dolorum delectus debitis accusamus? Quidem, debitis eos totam blanditiis iure expedita non? Distinctio amet debitis aut inventore assumenda? Omnis alias provident sequi.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos quis, sapiente, aliquam quisquam ea minus ut excepturi ipsum provident aut dicta delectus natus ad totam! Possimus assumenda fugit quibusdam sequi veritatis maxime doloremque natus</p><p>accusantium necessitatibus unde facilis velit voluptatum adipisci voluptate sint ipsum impedit illum ut, repellendus, ipsa numquam ab ullam at. Tenetur quod itaque corrupti, debitis velit sint ipsam! Quidem, porro dicta ut dolores nulla natus autem laborum odio excepturi similique non tenetur ipsam deleniti labore iusto, placeat cumque architecto ullam eligendi rerum omnis aperiam, quis est numquam?</p><p>Deleniti mollitia accusantium assumenda a velit voluptates sunt ipsam ut voluptatem optio unde placeat minima impedit aliquid consequuntur doloribus perferendis tempore, quo ratione, cum quae totam neque. Amet ad ducimus quidem placeat natus et, possimus adipisci sit consequatur dolorum delectus debitis accusamus? Quidem, debitis eos totam blanditiis iure expedita non? Distinctio amet debitis aut inventore assumenda? Omnis alias provident sequi.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
