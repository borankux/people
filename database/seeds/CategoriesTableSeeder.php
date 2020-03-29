<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Backend',
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Devops',
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'DBA',
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Frontend',
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Data processing',
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Medical',
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'UI/UX',
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Media',
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Legal',
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
        ));
        
        
    }
}