<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            // Electronics (department_id = 1)
            [
                'name' => 'Computers',
                'department_id' => 1,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 1
            [
                'name' => 'Mobiles',
                'department_id' => 1,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 2
            [
                'name' => 'Laptops',
                'department_id' => 1,
                'parent_id' => 1, // Computers
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desktops',
                'department_id' => 1,
                'parent_id' => 1,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphones',
                'department_id' => 1,
                'parent_id' => 2, // Mobiles
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mobile Accessories',
                'department_id' => 1,
                'parent_id' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Fashion (department_id = 2)
            [
                'name' => 'Men',
                'department_id' => 2,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 7
            [
                'name' => 'Women',
                'department_id' => 2,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 8
            [
                'name' => 'Shirts',
                'department_id' => 2,
                'parent_id' => 7, // Men
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jeans',
                'department_id' => 2,
                'parent_id' => 7,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dresses',
                'department_id' => 2,
                'parent_id' => 8, // Women
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hijabs',
                'department_id' => 2,
                'parent_id' => 8,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Home & Living (department_id = 3)
            [
                'name' => 'Furniture',
                'department_id' => 3,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 13
            [
                'name' => 'Kitchenware',
                'department_id' => 3,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 14
            [
                'name' => 'Sofas',
                'department_id' => 3,
                'parent_id' => 13, // Furniture
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beds',
                'department_id' => 3,
                'parent_id' => 13,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cookware',
                'department_id' => 3,
                'parent_id' => 14, // Kitchenware
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Utensils',
                'department_id' => 3,
                'parent_id' => 14,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Health & Beauty (department_id = 4)
            [
                'name' => 'Skincare',
                'department_id' => 4,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 19
            [
                'name' => 'Makeup',
                'department_id' => 4,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 20
            [
                'name' => 'Moisturizers',
                'department_id' => 4,
                'parent_id' => 19, // Skincare
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cleansers',
                'department_id' => 4,
                'parent_id' => 19,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lipstick',
                'department_id' => 4,
                'parent_id' => 20, // Makeup
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Foundation',
                'department_id' => 4,
                'parent_id' => 20,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Sports & Outdoors (department_id = 5)
            [
                'name' => 'Fitness Gear',
                'department_id' => 5,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 25
            [
                'name' => 'Camping Equipment',
                'department_id' => 5,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 26
            [
                'name' => 'Dumbbells',
                'department_id' => 5,
                'parent_id' => 25,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yoga Mats',
                'department_id' => 5,
                'parent_id' => 25,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tents',
                'department_id' => 5,
                'parent_id' => 26,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sleeping Bags',
                'department_id' => 5,
                'parent_id' => 26,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Toys & Games (department_id = 6)
            [
                'name' => 'Action Figures',
                'department_id' => 6,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 31
            [
                'name' => 'Board Games',
                'department_id' => 6,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 32
            [
                'name' => 'Superheroes',
                'department_id' => 6,
                'parent_id' => 31,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Military Figures',
                'department_id' => 6,
                'parent_id' => 31,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Card Games',
                'department_id' => 6,
                'parent_id' => 32,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Strategy Games',
                'department_id' => 6,
                'parent_id' => 32,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Automotive (department_id = 7)
            [
                'name' => 'Car Electronics',
                'department_id' => 7,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 37
            [
                'name' => 'Vehicle Tools',
                'department_id' => 7,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ], // id: 38
            [
                'name' => 'Dash Cameras',
                'department_id' => 7,
                'parent_id' => 37,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GPS Devices',
                'department_id' => 7,
                'parent_id' => 37,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wrenches',
                'department_id' => 7,
                'parent_id' => 38,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jacks',
                'department_id' => 7,
                'parent_id' => 38,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];


        DB::table('categories')->insert($categories);
    }
}
