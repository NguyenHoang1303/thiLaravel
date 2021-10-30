<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('books')->truncate();
        DB::table('books')->insert([
            [

                'authorid' => 1,
                'title' => 'Thiết Kế Cuộc Đời Thịnh Vượng',
                'ISBN' => 'BK001',
                'pub_year'=>2021,
                'available'=>30,
            ], [

                'authorid' => 2,
                'title' => 'Kỷ Luật Tự Giác',
                'ISBN' => 'BK002',
                'pub_year'=>2021,
                'available'=>20,
            ], [

                'authorid' => 5,
                'title' => 'Tâm Lý Học Hành Vi',
                'ISBN' => 'BK003',
                'pub_year'=>2017,
                'available'=>10,
            ], [

                'authorid' => 1,
                'title' => 'Sách Đen - Bộ Công Cụ Của Phụ Nữ Thành Đạt',
                'ISBN' => 'BK004',
                'pub_year'=>2019,
                'available'=>100,
            ], [

                'authorid' => 6,
                'title' => 'Hiểu Hết Về Tâm Lý Học',
                'ISBN' => 'BK005',
                'pub_year'=>2021,
                'available'=>10,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
