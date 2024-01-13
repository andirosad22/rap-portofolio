<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Projects;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Rosad Andi Pratama',
            'username' => 'rosadandipratama',
            'email' => 'andirosad22@gmail.com',
            'password' => bcrypt('password'),
            'about_me' => 'Saya Lulusan S1 program studi teknik informatika fakultas muhammadiyah paguyangan brebes, saya senang belajar hal baru apalagi terkait dengan teknologi pengembangan website, saya memahami programing web dengan baik mampu membuat website yang responsif, dengan menguasai bahasa pemrograman PHP dan javascript dan menguasai framework laravel dan express js',
            'instagram' => 'rosadandi_pratama',
            'linked_in' => 'https://linkedin.com/in/rosad-andi-pratama',
            'github' => 'https://github.com/andirosad22',
            'no_hp' => '093937269266',
            'image_herro' => 'image-herro.png',
            'image_profile' => 'image-profile.png',
            'is_admin' => true
        ]);
        // User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programing'
        ]);

        Skill::create([
            'title' => 'Back end',
            'slug' => 'back-end',
            'description' => 'saya menguasai pemrograman back end',
            'image_icon' => 'icon.png',
        ]);
        Skill::create([
            'title' => 'Pround end',
            'slug' => 'pround-end',
            'description' => 'saya menguasai pemrograman pround end',
            'image_icon' => 'icon.png',
        ]);
        Skill::create([
            'title' => 'Full Stack',
            'slug' => 'full-stack',
            'description' => 'saya menguasai pemrograman full stack',
            'image_icon' => 'icon.png',
        ]);
        Projects::create([
            'title' => 'Sistem Informasi Pajak Bumi dan Bangunan',
            'slug' => 'sistem-informasi-pengelolaan-pajak-bumi-bangunan',
            'your_task' => 'fround End',
            'description' => 'saya mengerjakan proje ini pada bagian pround end dimana saya membuat tampilan menarik dari website ini dan responsive',
            'image' => 'image.png'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt ut, commodi autem neque perspiciatis explicabo sit enim quae odit laboriosam molestiae dolore illum itaque iusto? Nisi voluptates explicabo ad? Sunt quos reiciendis fugiat quo repellat? Est, ut aut sunt aspernatur hic ipsum cupiditate animi quasi quidem. Nostrum et similique praesentium.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ullam saepe vero sit fuga non eum nulla, eligendi at. Modi animi doloribus nisi rem sapiente alias quia officiis voluptatibus suscipit cum quod voluptas voluptates qui consectetur, magnam numquam. Eum corporis quos quasi, enim magni fugiat cum non perferendis consequuntur dolorum?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quis nam debitis ullam animi quos nihil excepturi, esse voluptate odio! Provident dolores a at facere, corporis, vel ratione maxime, debitis accusantium corrupti aperiam autem dolorem culpa aliquam facilis earum. Dolorem consequuntur non aliquam. Incidunt distinctio aperiam ipsam illo id, autem alias sint eos dolores error, non voluptatibus porro. Tenetur modi aperiam, animi enim ad cupiditate veritatis neque, deserunt dicta non error soluta odio inventore corporis nesciunt illo accusantium assumenda. Modi et quo neque consequatur quas! Fuga dicta, aliquid odio laborum minima ad! Aspernatur illo ab est explicabo ut, impedit nisi!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt ut, commodi autem neque perspiciatis explicabo sit enim quae odit laboriosam molestiae dolore illum itaque iusto? Nisi voluptates explicabo ad? Sunt quos reiciendis fugiat quo repellat? Est, ut aut sunt aspernatur hic ipsum cupiditate animi quasi quidem. Nostrum et similique praesentium.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ullam saepe vero sit fuga non eum nulla, eligendi at. Modi animi doloribus nisi rem sapiente alias quia officiis voluptatibus suscipit cum quod voluptas voluptates qui consectetur, magnam numquam. Eum corporis quos quasi, enim magni fugiat cum non perferendis consequuntur dolorum?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quis nam debitis ullam animi quos nihil excepturi, esse voluptate odio! Provident dolores a at facere, corporis, vel ratione maxime, debitis accusantium corrupti aperiam autem dolorem culpa aliquam facilis earum. Dolorem consequuntur non aliquam. Incidunt distinctio aperiam ipsam illo id, autem alias sint eos dolores error, non voluptatibus porro. Tenetur modi aperiam, animi enim ad cupiditate veritatis neque, deserunt dicta non error soluta odio inventore corporis nesciunt illo accusantium assumenda. Modi et quo neque consequatur quas! Fuga dicta, aliquid odio laborum minima ad! Aspernatur illo ab est explicabo ut, impedit nisi!</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
