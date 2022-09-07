<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
         


        //  User::create ([
        //     'name'        => 'Adi Alam',
        //     'email'       => 'adialamalam@gmail.com',
        //     'password'    => bcrypt('12345')
        //  ]);

        //  User::create ([
        //     'name'        => 'Doddy Dimas',
        //     'email'       => 'doddydimas@gmail.com',
        //     'password'    => bcrypt('12345')
        //  ]);

        User::factory(3)->create();


         Category::create([
            'name'  =>  'Web Programming',
            'slug'  =>  'Web-programming'
         ]);

         Category::create([
            'name'  =>  'Web Design',
            'slug'  =>  'Web-design'
         ]);

         Category::create([
            'name'  =>  'Personal',
            'slug'  =>  'Personal'
         ]);

         Post::factory(20)->create();


        //  Post::create([
        //     'title'     =>  'Judul Pertama',
        //     'slug'      =>  'judul-pertama',
        //     'excerpt'   =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error natus beatae fugit provident corrupti',
        //     'body'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error natus beatae fugit provident corrupti sit nobis facilis corporis ex? Repudiandae quidem, natus reiciendis enim nisi minima dicta deserunt nulla, nemo, aperiam rerum qui saepe ut atque eum ex vitae. Doloribus, fugiat aliquam iure officiis eum magni rerum voluptatibus est explicabo voluptas alias aut neque quisquam inventore a? Perspiciatis quam ab voluptate, accusantium in eligendi neque laboriosam, rem consequatur laborum enim eos veritatis tempore fugiat qui quod dolorem tenetur placeat. Ex ut consequatur delectus velit repellat odit doloremque, debitis quaerat exercitationem expedita aspernatur, quo cum sapiente quae distinctio sit dignissimos impedit?',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);

        // Post::create([
        //     'title'     =>  'Judul Kedua',
        //     'slug'      =>  'judul-Kedua',
        //     'excerpt'   =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error natus beatae fugit provident corrupti',
        //     'body'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error natus beatae fugit provident corrupti sit nobis facilis corporis ex? Repudiandae quidem, natus reiciendis enim nisi minima dicta deserunt nulla, nemo, aperiam rerum qui saepe ut atque eum ex vitae. Doloribus, fugiat aliquam iure officiis eum magni rerum voluptatibus est explicabo voluptas alias aut neque quisquam inventore a? Perspiciatis quam ab voluptate, accusantium in eligendi neque laboriosam, rem consequatur laborum enim eos veritatis tempore fugiat qui quod dolorem tenetur placeat. Ex ut consequatur delectus velit repellat odit doloremque, debitis quaerat exercitationem expedita aspernatur, quo cum sapiente quae distinctio sit dignissimos impedit?',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);

        // Post::create([
        //     'title'     =>  'Judul Ketiga',
        //     'slug'      =>  'judul-Ketiga',
        //     'excerpt'   =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error natus beatae fugit provident corrupti',
        //     'body'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error natus beatae fugit provident corrupti sit nobis facilis corporis ex? Repudiandae quidem, natus reiciendis enim nisi minima dicta deserunt nulla, nemo, aperiam rerum qui saepe ut atque eum ex vitae. Doloribus, fugiat aliquam iure officiis eum magni rerum voluptatibus est explicabo voluptas alias aut neque quisquam inventore a? Perspiciatis quam ab voluptate, accusantium in eligendi neque laboriosam, rem consequatur laborum enim eos veritatis tempore fugiat qui quod dolorem tenetur placeat. Ex ut consequatur delectus velit repellat odit doloremque, debitis quaerat exercitationem expedita aspernatur, quo cum sapiente quae distinctio sit dignissimos impedit?',
        //     'category_id'   => 2,
        //     'user_id'       => 1
        // ]);

        // Post::create([
        //     'title'     =>  'Judul Ke empat',
        //     'slug'      =>  'judul-Ke empat',
        //     'excerpt'   =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error natus beatae fugit provident corrupti',
        //     'body'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error natus beatae fugit provident corrupti sit nobis facilis corporis ex? Repudiandae quidem, natus reiciendis enim nisi minima dicta deserunt nulla, nemo, aperiam rerum qui saepe ut atque eum ex vitae. Doloribus, fugiat aliquam iure officiis eum magni rerum voluptatibus est explicabo voluptas alias aut neque quisquam inventore a? Perspiciatis quam ab voluptate, accusantium in eligendi neque laboriosam, rem consequatur laborum enim eos veritatis tempore fugiat qui quod dolorem tenetur placeat. Ex ut consequatur delectus velit repellat odit doloremque, debitis quaerat exercitationem expedita aspernatur, quo cum sapiente quae distinctio sit dignissimos impedit?',
        //     'category_id'   => 2,
        //     'user_id'       => 2
        // ]);



    }

 

}
