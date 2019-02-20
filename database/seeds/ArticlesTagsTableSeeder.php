<?php

use Illuminate\Database\Seeder;

class ArticlesTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  public function run()

        DB::table('articles_tags')->insert([
            'article_id' => rand(1,30),
            'tag_id' => rand(1,5),
        ]);
    
    }
}
