<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('skills')->delete();
        
        \DB::table('skills')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'PHP',
                'category_id' => 1,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Java',
                'category_id' => 1,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Python',
                'category_id' => 1,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'MySQL',
                'category_id' => 1,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Nodejs',
                'category_id' => 1,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Perl',
                'category_id' => 1,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '.Net',
                'category_id' => 1,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'C++',
                'category_id' => 1,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Docker',
                'category_id' => 2,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Linux',
                'category_id' => 2,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Shell',
                'category_id' => 2,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Kubernets',
                'category_id' => 2,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'MySQL',
                'category_id' => 3,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Oracle',
                'category_id' => 3,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'MSSQL',
                'category_id' => 3,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'SQL',
                'category_id' => 3,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'React',
                'category_id' => 4,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Node',
                'category_id' => 4,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'HTML',
                'category_id' => 4,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'CSS',
                'category_id' => 4,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'JavaScript',
                'category_id' => 4,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Neoral network',
                'category_id' => 5,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'NLP',
                'category_id' => 5,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Nurse',
                'category_id' => 6,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Doctor',
                'category_id' => 6,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Abode Photoshop',
                'category_id' => 7,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Adobe Illusturator',
                'category_id' => 7,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Coreldraw',
                'category_id' => 7,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Axure',
                'category_id' => 7,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Adobe After Effect',
                'category_id' => 8,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Adobe Premier',
                'category_id' => 8,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Lawyer',
                'category_id' => 9,
                'created_at' => '2020-03-29 06:05:16',
                'updated_at' => '2020-03-29 06:05:16',
            ),
        ));
        
        
    }
}