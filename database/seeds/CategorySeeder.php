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
        $cate->name ="digital";
        $cate->save();

        $cate = new Category();
        $cate->name ="marketing";
        $cate->save();
    }
}
