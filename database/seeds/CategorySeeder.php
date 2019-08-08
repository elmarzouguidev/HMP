<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cate = new Category();
        $cate->name ="seo";
        $cate->slug='seo';
        $cate->save();

        $cate = new Category();
        $cate->name ="web design";
        $cate->slug='web-design';
        $cate->save();

        $cate = new Category();
        $cate->name ="vedio";
        $cate->save();

        $cate = new Category();
        $cate->name ="photo";
        $cate->slug='photo';
        $cate->save();
    }
}
