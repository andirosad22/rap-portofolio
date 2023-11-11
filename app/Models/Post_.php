<?php

namespace App\Models;



class Post
{
    static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Rosad Andi Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, officiis perferendis eum animi nobis sed aspernatur facilis sunt. Enim excepturi dicta numquam distinctio cupiditate blanditiis incidunt doloremque autem molestiae voluptatibus velit, minus eius? Vitae quae blanditiis rem itaque distinctio ratione, optio esse voluptates delectus natus fugit nesciunt pariatur? Expedita voluptates molestias quia tempore enim. Quaerat sint dolore, repellendus officia, adipisci deleniti temporibus odit praesentium suscipit nisi nostrum commodi, rerum iusto ipsam totam eius rem doloremque quae sapiente a recusandae maxime cupiditate porro amet. Tenetur totam asperiores ab hic numquam blanditiis magni amet aperiam beatae. Illo consequuntur totam commodi minus. Optio."
        ],
        [
            "title" => "Judul Ke Dua",
            "slug" => "judul-ke-dua",
            "author" => "Aaf Abdul Barri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, officiis perferendis eum animi nobis sed aspernatur facilis sunt. Enim excepturi dicta numquam distinctio cupiditate blanditiis incidunt doloremque autem molestiae voluptatibus velit, minus eius? Vitae quae blanditiis rem itaque distinctio ratione, optio esse voluptates delectus natus fugit nesciunt pariatur? Expedita voluptates molestias quia tempore enim. Quaerat sint dolore, repellendus officia, adipisci deleniti temporibus odit praesentium suscipit nisi nostrum commodi, rerum iusto ipsam totam eius rem doloremque quae sapiente a recusandae maxime cupiditate porro amet. Tenetur totam asperiores ab hic numquam blanditiis magni amet aperiam beatae. Illo consequuntur totam commodi minus. Optio."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts); // kalau properti static harus pake self. kalau yang bisa pake this->
    }

    public static function find($slug)
    {
        $posts = static::all();
        $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
