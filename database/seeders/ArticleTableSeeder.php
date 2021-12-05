<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\articli;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 200; $i++) {
            $article = new articli();
            $article->title = "Day la tieu de $i";
            $article->content = "Day la noi dung $i";
            $article->save(); 
        }
    }
}
