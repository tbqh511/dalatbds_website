<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_types')->insert([
            ['id' => 2, 'name' => 'Nhà bán', 'parent_id' => 0, 'description' => '', 'order' => 2, 'image' => ''],
            ['id' => 3, 'name' => 'Nhà riêng', 'parent_id' => 2, 'description' => '', 'order' => 3, 'image' => ''],
            ['id' => 4, 'name' => 'Nhà biệt thự liền kề', 'parent_id' => 2, 'description' => '', 'order' => 4, 'image' => ''],
            ['id' => 5, 'name' => 'Nhà mặt phố', 'parent_id' => 2, 'description' => '', 'order' => 5, 'image' => ''],
            ['id' => 6, 'name' => 'Shop house, nhà phố thương mại', 'parent_id' => 2, 'description' => '', 'order' => 6, 'image' => ''],
            ['id' => 7, 'name' => 'Nhà phân quyền', 'parent_id' => 2, 'description' => '', 'order' => 7, 'image' => ''],
            ['id' => 8, 'name' => 'Nhà giấy tay', 'parent_id' => 2, 'description' => '', 'order' => 8, 'image' => ''],
            ['id' => 9, 'name' => 'Căn hộ chung cư', 'parent_id' => 0, 'description' => '', 'order' => 9, 'image' => ''],
            ['id' => 10, 'name' => 'Đất bán', 'parent_id' => 0, 'description' => '', 'order' => 10, 'image' => ''],
            ['id' => 11, 'name' => 'Đất nông nghiệp', 'parent_id' => 10, 'description' => '', 'order' => 11, 'image' => ''],
            ['id' => 12, 'name' => 'Đất xây dựng', 'parent_id' => 10, 'description' => '', 'order' => 12, 'image' => ''],
            ['id' => 13, 'name' => 'Đất xây dựng phân quyền', 'parent_id' => 10, 'description' => '', 'order' => 13, 'image' => ''],
            ['id' => 14, 'name' => 'Đất giấy tay', 'parent_id' => 10, 'description' => '', 'order' => 14, 'image' => ''],
        ]);
    }
}
