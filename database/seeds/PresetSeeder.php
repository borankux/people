<?php

use Illuminate\Database\Seeder;

class PresetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileName = base_path('database/seeds/categories.yml');
        $content = \Symfony\Component\Yaml\Yaml::parseFile($fileName);

        $categories = $content['categories'];
        foreach ($categories as $category) {
            $cat = \App\Models\Category::create([
                'name' => $category['name']
            ]);

            foreach ($category['skills'] as $skill) {
                $skill = \App\Models\Skill::create([
                    'name' => $skill,
                    'category_id' => $cat->id
                ]);
            }
        }
    }
}
