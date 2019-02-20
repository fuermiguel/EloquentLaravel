<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  public function run()

        DB::table('article_tags')->insert([
            'article_id' => rand(1,30),
            'tag_id' => rand(1,5),
        ]);
    
    }
}
