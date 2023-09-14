<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\ProductAddress;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'slug' => 'ban-nha-phuong-1-da-lat-1',
                'title' => 'Bán nhà, phường 1, Đà Lạt',
                'area' => 225.00,
                'prices' => 15000000000,
                'commissions' => 2.00,
                'description' => 'Tôi chính chủ ( đứng tên trên giấy tờ ) cần bán biệt thự mặt Võ Chí Công.Biệt thự 180m² lô góc, nở hậu Xây thô hoàn thiện 3 tầng + 1 tum +1 tầng hầm
                - Tầng hầm : Phòng karaok và phòng rượu, gara để xe.
                - Tầng 1 phòng khách + bêp
                - Tầng 2,3: Chức năng
                - Nhà đang hoàn thiện, đã lắp thang máy, có bể cá koi
                - Lô góc view ra vườn hoa
                - Đi bộ 300m ra đến Hồ Tây / Cách 1 làm ra đường Võ Chí Công.
                - Sân trước nhà khoảng không riêng có thể để 5-6 xe otô',
                'legals_id' => 1,
                'latitude' => 10.123456,
                'longitude' => 20.654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'ban-villa-phuong-1-da-lat-2',
                'title' => 'Bán villa, phường 1, Đà Lạt',
                'area' => 400,
                'prices' => 52000000000,
                'commissions' => 2.00,
                'description' => 'Tôi chính chủ ( đứng tên trên giấy tờ ) cần bán biệt thự mặt Võ Chí Công.Biệt thự 180m² lô góc, nở hậu Xây thô hoàn thiện 3 tầng + 1 tum +1 tầng hầm
                - Tầng hầm : Phòng karaok và phòng rượu, gara để xe.
                - Tầng 1 phòng khách + bêp
                - Tầng 2,3: Chức năng
                - Nhà đang hoàn thiện, đã lắp thang máy, có bể cá koi
                - Lô góc view ra vườn hoa
                - Đi bộ 300m ra đến Hồ Tây / Cách 1 làm ra đường Võ Chí Công.
                - Sân trước nhà khoảng không riêng có thể để 5-6 xe otô',
                'legals_id' => 1,
                'latitude' => 10.123456,
                'longitude' => 20.654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'slug' => 'ban-dat-phuong-9-da-lat-3',
                'title' => 'Bán đất , phường 9, Đà Lạt',
                'area' => 125.00,
                'prices' => 5900000000,
                'commissions' => 2.00,
                'description' => 'Tôi chính chủ ( đứng tên trên giấy tờ ) cần bán biệt thự mặt Võ Chí Công.Biệt thự 180m² lô góc, nở hậu Xây thô hoàn thiện 3 tầng + 1 tum +1 tầng hầm
                - Tầng hầm : Phòng karaok và phòng rượu, gara để xe.
                - Tầng 1 phòng khách + bêp
                - Tầng 2,3: Chức năng
                - Nhà đang hoàn thiện, đã lắp thang máy, có bể cá koi
                - Lô góc view ra vườn hoa
                - Đi bộ 300m ra đến Hồ Tây / Cách 1 làm ra đường Võ Chí Công.
                - Sân trước nhà khoảng không riêng có thể để 5-6 xe otô',
                'legals_id' => 1,
                'latitude' => 10.123456,
                'longitude' => 20.654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'slug' => 'ban-dat-xa-xuan-tho-1-da-lat-4',
                'title' => 'Bán đất, xã Xuân Thọ , Đà Lạt',
                'area' => 100.00,
                'prices' => 95000000000,
                'commissions' => 2.00,
                'description' => 'Tôi chính chủ ( đứng tên trên giấy tờ ) cần bán biệt thự mặt Võ Chí Công.Biệt thự 180m² lô góc, nở hậu Xây thô hoàn thiện 3 tầng + 1 tum +1 tầng hầm
                - Tầng hầm : Phòng karaok và phòng rượu, gara để xe.
                - Tầng 1 phòng khách + bêp
                - Tầng 2,3: Chức năng
                - Nhà đang hoàn thiện, đã lắp thang máy, có bể cá koi
                - Lô góc view ra vườn hoa
                - Đi bộ 300m ra đến Hồ Tây / Cách 1 làm ra đường Võ Chí Công.
                - Sân trước nhà khoảng không riêng có thể để 5-6 xe otô',
                'legals_id' => 1,
                'latitude' => 10.123456,
                'longitude' => 20.654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'slug' => 'ban-nha-phuong-7-da-lat-5',
                'title' => 'Bán nhà, phường 7, Đà Lạt',
                'area' => 100.00,
                'prices' => 15300000000,
                'commissions' => 2.00,
                'description' => 'Tôi chính chủ ( đứng tên trên giấy tờ ) cần bán biệt thự mặt Võ Chí Công.Biệt thự 180m² lô góc, nở hậu Xây thô hoàn thiện 3 tầng + 1 tum +1 tầng hầm
                - Tầng hầm : Phòng karaok và phòng rượu, gara để xe.
                - Tầng 1 phòng khách + bêp
                - Tầng 2,3: Chức năng
                - Nhà đang hoàn thiện, đã lắp thang máy, có bể cá koi
                - Lô góc view ra vườn hoa
                - Đi bộ 300m ra đến Hồ Tây / Cách 1 làm ra đường Võ Chí Công.
                - Sân trước nhà khoảng không riêng có thể để 5-6 xe otô',
                'legals_id' => 1,
                'latitude' => 10.123456,
                'longitude' => 20.654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'slug' => 'ban-nha-phuong-8-da-lat-6',
                'title' => 'Bán nhà, phường 8, Đà Lạt',
                'area' => 100.00,
                'prices' => 25700000000,
                'commissions' => 2.00,
                'description' => 'Tôi chính chủ ( đứng tên trên giấy tờ ) cần bán biệt thự mặt Võ Chí Công.Biệt thự 180m² lô góc, nở hậu Xây thô hoàn thiện 3 tầng + 1 tum +1 tầng hầm
                - Tầng hầm : Phòng karaok và phòng rượu, gara để xe.
                - Tầng 1 phòng khách + bêp
                - Tầng 2,3: Chức năng
                - Nhà đang hoàn thiện, đã lắp thang máy, có bể cá koi
                - Lô góc view ra vườn hoa
                - Đi bộ 300m ra đến Hồ Tây / Cách 1 làm ra đường Võ Chí Công.
                - Sân trước nhà khoảng không riêng có thể để 5-6 xe otô',
                'legals_id' => 1,
                'latitude' => 10.123456,
                'longitude' => 20.654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'ban-nha-phuong-1-da-lat-7',
                'title' => 'Bán nhà, phường 1, Đà Lạt',
                'area' => 100.00,
                'prices' => 15000000000,
                'commissions' => 2.00,
                'description' => 'Tôi chính chủ ( đứng tên trên giấy tờ ) cần bán biệt thự mặt Võ Chí Công.Biệt thự 180m² lô góc, nở hậu Xây thô hoàn thiện 3 tầng + 1 tum +1 tầng hầm
                - Tầng hầm : Phòng karaok và phòng rượu, gara để xe.
                - Tầng 1 phòng khách + bêp
                - Tầng 2,3: Chức năng
                - Nhà đang hoàn thiện, đã lắp thang máy, có bể cá koi
                - Lô góc view ra vườn hoa
                - Đi bộ 300m ra đến Hồ Tây / Cách 1 làm ra đường Võ Chí Công.
                - Sân trước nhà khoảng không riêng có thể để 5-6 xe otô',
                'legals_id' => 1,
                'latitude' => 10.123456,
                'longitude' => 20.654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'ban-nha-phuong-1-da-lat-8',
                'title' => 'Bán nhà, phường 8, Đà Lạt',
                'area' => 100.00,
                'prices' => 35000000000,
                'commissions' => 2.00,
                'description' => 'Tôi chính chủ ( đứng tên trên giấy tờ ) cần bán biệt thự mặt Võ Chí Công.Biệt thự 180m² lô góc, nở hậu Xây thô hoàn thiện 3 tầng + 1 tum +1 tầng hầm
                - Tầng hầm : Phòng karaok và phòng rượu, gara để xe.
                - Tầng 1 phòng khách + bêp
                - Tầng 2,3: Chức năng
                - Nhà đang hoàn thiện, đã lắp thang máy, có bể cá koi
                - Lô góc view ra vườn hoa
                - Đi bộ 300m ra đến Hồ Tây / Cách 1 làm ra đường Võ Chí Công.
                - Sân trước nhà khoảng không riêng có thể để 5-6 xe otô',
                'legals_id' => 1,
                'latitude' => 10.123456,
                'longitude' => 20.654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Thêm các sản phẩm khác vào đây
        ];

        $product_addresses = [
            [
                'product_id'=> '1',
                'street_number' => '27/6',
                'street_code' => 'ST100',
                'ward_code' => '00001',
            ],
            [
                'product_id'=> '2',
                'street_number' => '27/6',
                'street_code' => 'ST10',
                'ward_code' => '00004',
            ],
            [
                'product_id'=> '3',
                'street_number' => '27/6',
                'street_code' => 'ST117',
                'ward_code' => '00016',
            ],
            [
                'product_id'=> '1',
                'street_number' => '27/6',
                'street_code' => 'ST113',
                'ward_code' => '00037',
            ],
            [
                'product_id'=> '1',
                'street_number' => '27/6',
                'street_code' => 'ST110',
                'ward_code' => '00061',
            ],
            [
                'product_id'=> '1',
                'street_number' => '27/6',
                'street_code' => 'ST12',
                'ward_code' => '00064',
            ],
        ];
        Product::insert($products);
        ProductAddress::insert($product_addresses);

    }
}
