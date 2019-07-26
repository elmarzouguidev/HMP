<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->fullname ="Elmarzougui Abdelghafour";
        $admin->email ="elmarzouguiabdelghafour@gmail.com";
        $admin->password = Hash::make('wx66.ofg1993');
        $admin->address = "casablanca SIDI MAAROUF";
        $admin->phone ="0677512753";
        $admin->active = true;
        $admin->save();
    }
}
