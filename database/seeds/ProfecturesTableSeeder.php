<?php

use Illuminate\Database\Seeder;

class ProfecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profectures')->delete();
 
        $profectures = array(
            [
            'id'        => 1, 
            'region_id' => 1,
            'name'      => '北海道'
            ],
            [
            'id'        => 2, 
            'region_id' => 2,
            'name'      => '青森県'
            ],
            [
            'id'        => 3, 
            'region_id' => 2,
            'name'      => '岩手県'
            ],
            [
            'id'        => 4, 
            'region_id' => 2,
            'name'      => '秋田県'
            ],
            [
            'id'        => 5, 
            'region_id' => 3,
            'name'      => '宮城県'
            ],
            [
            'id'        => 6, 
            'region_id' => 3,
            'name'      => '山形県'
            ],
            [
            'id'        => 7, 
            'region_id' => 3,
            'name'      => '福島県'
            ],
            [
            'id'        => 8, 
            'region_id' => 4,
            'name'      => '茨城県'
            ],
            [
            'id'        => 9, 
            'region_id' => 4,
            'name'      => '栃木県'
            ],
            [
            'id'        => 10, 
            'region_id' => 4,
            'name'      => '群馬県'
            ],
            [
            'id'        => 11, 
            'region_id' => 5,
            'name'      => '埼玉県'
            ],
            [
            'id'        => 12, 
            'region_id' => 5,
            'name'      => '千葉県'
            ],
            [
            'id'        => 13, 
            'region_id' => 5,
            'name'      => '東京都'
            ],
            [
            'id'        => 14, 
            'region_id' => 5,
            'name'      => '神奈川県'
            ],
            [
            'id'        => 15, 
            'region_id' => 6,
            'name'      => '新潟県'
            ],
            [
            'id'        => 16, 
            'region_id' => 6,
            'name'      => '山梨県'
            ],
            [
            'id'        => 17, 
            'region_id' => 6,
            'name'      => '長野県'
            ],
            [
            'id'        => 18, 
            'region_id' => 7,
            'name'      => '富山県'
            ],
            [
            'id'        => 19, 
            'region_id' => 7,
            'name'      => '石川県'
            ],
            [
            'id'        => 20, 
            'region_id' => 7,
            'name'      => '福井県'
            ],
            [
            'id'        => 21, 
            'region_id' => 7,
            'name'      => '静岡県'
            ],
            [
            'id'        => 22, 
            'region_id' => 8,
            'name'      => '岐阜県'
            ],
            [
            'id'        => 23, 
            'region_id' => 8,
            'name'      => '愛知県'
            ],
            [
            'id'        => 24, 
            'region_id' => 8,
            'name'      => '三重県'
            ],
            [
            'id'        => 25, 
            'region_id' => 9,
            'name'      => '滋賀県'
            ],
            [
            'id'        => 26, 
            'region_id' => 9,
            'name'      => '京都府'
            ],
            [
            'id'        => 27, 
            'region_id' => 9,
            'name'      => '兵庫県'
            ],
            [
            'id'        => 28, 
            'region_id' => 9,
            'name'      => '大阪府'
            ],
            [
            'id'        => 29, 
            'region_id' => 9,
            'name'      => '和歌山県'
            ],
            [
            'id'        => 30, 
            'region_id' => 9,
            'name'      => '奈良県'
            ],
            [
            'id'        => 31, 
            'region_id' => 10,
            'name'      => '島根県'
            ],
            [
            'id'        => 32, 
            'region_id' => 10,
            'name'      => '鳥取県'
            ],
            [
            'id'        => 33, 
            'region_id' => 10,
            'name'      => '岡山県'
            ],
            [
            'id'        => 34, 
            'region_id' => 10,
            'name'      => '広島県'
            ],
            [
            'id'        => 35, 
            'region_id' => 10,
            'name'      => '山口県'
            ],
            [
            'id'        => 36, 
            'region_id' => 11,
            'name'      => '徳島県'
            ],
            [
            'id'        => 37, 
            'region_id' => 11,
            'name'      => '香川県'
            ],
            [
            'id'        => 38, 
            'region_id' => 11,
            'name'      => '愛媛県'
            ],          
            [
            'id'        => 39, 
            'region_id' => 11,
            'name'      => '高知県'
            ],          
            [
            'id'        => 40, 
            'region_id' => 12,
            'name'      => '福岡県'
            ],          
            [
            'id'        => 41, 
            'region_id' => 12,
            'name'      => '佐賀県'
            ],          
            [
            'id'        => 42, 
            'region_id' => 12,
            'name'      => '長崎県'
            ],          
            [
            'id'        => 43, 
            'region_id' => 12,
            'name'      => '熊本県'
            ],          
            [
            'id'        => 44, 
            'region_id' => 12,
            'name'      => '大分県'
            ],          
            [
            'id'        => 45, 
            'region_id' => 12,
            'name'      => '宮崎県'
            ],          
            [
            'id'        => 46, 
            'region_id' => 12,
            'name'      => '鹿児島県'
            ],          
            [
            'id'        => 47, 
            'region_id' => 12,
            'name'      => '沖縄県'
            ] 
        );
        DB::table('profectures')->insert($profectures);
    }
}
