<?php

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
        // $this->call(UsersTableSeeder::class);

        for ($i=0; $i < 10; $i++) { 
            # code...
            $this->call(UsersTableSeeder::class);
        }

        for ($i=0; $i < 10; $i++) { 
            # code...
            $this->call(WritersTableSeeder::class);
           
        }

        for ($j=0; $j < 30; $j++) { 
            # code...
            $this->call(ArticlesTableSeeder::class);
        }

        for ($j=0; $j < 5; $j++) { 
            # code...
            $this->call(TagsTableSeeder::class);
        }

        
        for ($j=0; $j < 10; $j++) { 
            # code...
            $this->call (ArticlesTagsTableSeeder::class);
        }

      
    }
}
