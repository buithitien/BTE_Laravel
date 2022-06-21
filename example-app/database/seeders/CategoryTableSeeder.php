<?php

namespace Database\Seeders;
// use App\Models\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demo2')->insert(
            [
                [
                    'name'=>"Tiến",
                    'price'=>5465485,
                ]  ,
                [

                    'name'=>"Tiến",
                    'price'=>122,
                ]
            ]);

    }
}
