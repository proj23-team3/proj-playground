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
        // $categories = [
        //     [
        //         'name' => 'indiano'
        //     ],
        //     [
        //         'name' => 'italiano'
        //     ],
        //     [
        //         'name' => 'kebabbaro'
        //     ],
        //     [
        //         'name' => 'pizzeria'
        //     ],
        //     [
        //         'name' => 'thai'
        //     ],
        //     [
        //         'name' => 'giapponese'
        //     ],
        //     [
        //         'name' => 'fusion'
        //     ],
        //     [
        //         'name' => 'ebraico'
        //     ]
        // ];
        $categories = config('categories_name');
        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category['name'];
            $newCategory->save();

        } 
    } 
}
