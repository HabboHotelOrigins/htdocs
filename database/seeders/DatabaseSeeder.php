<?php

namespace Database\Seeders;

use App\Models\Article as ArticleModel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        ArticleModel::create([
            'name' => 'WELCOME TO HABBO',
            'desc' => 'The hotel from 2007 returns to the community!',
            'img' => 'https://images.habbo.com/web_images/defaults/lpromo_gen15_42_thumb.png',
            'content' => '<h1 class="font-semibold text-white text-xl uppercase" style="text-shadow:0px 1px 1px #000000;">Here we are again!</h1><p>Memories return after 17 years! Do you remember the time when we went to Habbo after school and met our friends? Where we built rooms, chatted and chilled together in the pool? We are now bringing these times back!</p><br><p>The project to bring this hotel back into our lives began on <span class="underline">June 07, 2024</span>! In the coming weeks we will concentrate on optimizing many things and providing new content! So check the news regularly to make sure you don\'t miss anything!</p>',
            'created_at' => '2024-06-07 10:32:24',
            'updated_at' => '2024-06-07 10:32:24',
        ]);
    }
}
