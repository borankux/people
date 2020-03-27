<?php

use Illuminate\Database\Seeder;

class TestSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name' =>  'Mirzat',
            'email' => 'mirzatsoft@163.com',
            'password' => bcrypt('123456'),
        ]);

        $profile = \App\Models\Profile::create([
            'user_id' => $user->id,
            'github' => 'https://github.com/borankux',
            'bio' => 'Live and let live',
            'site' => 'https://mirzat.cn'
        ]);

        $category = \App\Models\Category::create([
            'name' => 'Backend'
        ]);


        $uc = \App\Models\UserCategory::create([
            'user_id' =>  $user->id,
            'category_id' => $category->id
        ]);

        $skill = \App\Models\Skill::create([
            'name' => 'PHP',
            'category_id' => $category->id
        ]);

        $skillSet = \App\Models\SkillSet::create([
            'user_id' => $user->id,
            'skill_id' => $skill->id
        ]);
    }
}
