<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment() === 'production') {
            exit('I just stopped you getting fired. Love, Amo.');
        }
        DB::table('category')->truncate();
        Category::create([
            'id'            => 1,
            'label'          => 'php',
            'description'          => 'Le langage php pour les nuls',
        ]);
        Category::create([
            'id'            => 2,
            'label'          => 'js',
            'description'          => 'Le langage js pour les nuls',
        ]);
        Category::create([
            'id'            => 3,
            'label'          => 'html',
            'description'    => 'Le langage html pour les nuls',
        ]);
        Category::create([
            'id'            => 4,
            'label'          => 'css',
            'description'    => 'Le langage css pour les nuls'
        ]);
        Category::create([
            'id'            => 5,
            'label'          => 'CMS',
            'description'    => 'Le CMS pour les nuls'
        ]);
    }
}
