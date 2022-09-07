<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [[
        "title"  => "Title first Posts",
        "slug" => "title-post-first",
        "author" => "Adi Alam",
        "body"   => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Ipsa ea maxime et excepturi commodi dolorum, eveniet, consequatur aperiam repellat 
        facilis architecto! Vel commodi sint, ab repellat praesentium earum adipisci 
        voluptatem, recusandae illo eaque ad a fuga dolorem temporibus quam ipsa, 
        qui eius! Nam dolore molestiae saepe corrupti, nihil quis assumenda vero, 
        ex repudiandae atque dolorem iure sequi? Ullam corporis similique praesentium 
        quia unde laborum possimus ipsum! Quisquam cupiditate maxime quam pariatur 
        sapiente facere delectus, natus, minus asperiores, magnam voluptatibus reiciendis."
    ],
    [
        "title"  => "Title second Posts",
        "slug" => "title-post-second",
        "author" => "Abdul Rozzaq",
        "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Culpa non quos, ullam, itaque numquam dolorum atque aperiam impedit at 
        recusandae, neque perspiciatis illum facilis qui dolor. Soluta quo laborum illo, 
        culpa iusto suscipit assumenda sint vero rerum accusantium sequi quia ad 
        eaque esse laudantium provident totam autem pariatur! Recusandae, quia ipsum 
        sit molestias, a earum suscipit architecto, nam nesciunt neque reiciendis veniam 
        tenetur aliquid. A atque nobis obcaecati iste, ut perferendis molestias ratione? 
        Vel hic, libero fuga perspiciatis ipsa, repellendus praesentium nisi maxime 
        suscipit nam iste officiis aliquam velit vero non magni, consectetur sunt 
        laborum nihil cum ad quidem. Cum!"
    ]];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        //  $post = [];
        //     foreach($posts as $p) {
        //         if($p["slug"] === $slug) {
        //             $post = $p;
        //         }
        //     }
        return $posts->firstWhere('slug', $slug);
    }
}



