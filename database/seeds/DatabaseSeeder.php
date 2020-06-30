<?php

use App\User;
Use App\Item;
Use App\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('UsersTableSeeder');
        $this->call('RegionsTableSeeder');
        $this->call('ProfecturesTableSeeder');
        Model::reguard();
    }

    // public function run()
    // {
    //     User::create([
    //         'name' => 'Admin',
    //         'email' => 'admin@test.com',
    //         'password' => Hash::make('admin'),
    //         'role' => 2
    //     ]);

    //     User::create([   
    //         'name' => 'User',
    //         'email' => 'user@test.com',
    //         'password' => Hash::make('secret'),
    //         'role' => 1
    //     ]);
    //     Item::create([
    //         'name' => 'User',
    //         'price' => 1
    //     ]);

    //     Item::create([
    //         'name' => '123',
    //         'price' => 1
    //     ]);
    //     Item::create([
    //         'name' => '北海道',
    //         'price' => 1
    //     ]);
    //     Item::create([
    //         'name' => '北海道',
    //         'price' => 1
    //     ]);
    //     Item::create([
    //         'name' => '北海道',
    //         'price' => 1
    //     ]);
    //     Item::create([
    //         'name' => '北海道',
    //         'price' => 1
    //     ]);
    //     Item::create([
    //         'name' => '北海道',
    //         'price' => 1
    //     ]);
    //}
}
//         Region::create([
//             'name' => '北海道'
//         ]);
//         Region::create([
//             'name' => '北東北'
//         ]);
//         Region::create([
//             'name' => '南東北'
//         ]);
//         Region::create([
//             'name' => '北関東'
//         ]);
//         Region::create([
//             'name' => '南関東'
//         ]);
//         Region::create([
//             'name' => '甲信越'
//         ]);
//         Region::create([
//             'name' => '北陸'
//         ]);
//         Region::create([
//             'name' => '中京'
//         ]);
//         Region::create([
//             'name' => '関西'
//         ]);
//         Region::create([
//             'name' => '中国'
//         ]);
//         Region::create([
//             'name' => '四国'
//         ]);
//         Region::create([
//             'name' => '九州・沖縄'
//         ]);
//         Profecture::create([
//             'region_id' => 1,
//             'name' => '北海道'
//         ]);
//         Profecture::create([
//             'region_id' => 2,
//             'name' => '青森県'
//         ]);
//         Profecture::create([
//             'region_id' => 2,
//             'name' => '岩手県'
//         ]);
//         Profecture::create([
//             'region_id' => 2,
//             'name' => '秋田県'
//         ]);
//         Profecture::create([
//             'region_id' => 3,
//             'name' => '宮城県'
//         ]);
//         Profecture::create([
//             'region_id' => 3,
//             'name' => '山形県'
//         ]);
//         Profecture::create([
//             'region_id' => 3,
//             'name' => '福島県'
//         ]);
//         Profecture::create([
//             'region_id' => 4,
//             'name' => '茨城県'
//         ]);
//         Profecture::create([
//             'region_id' => 4,
//             'name' => '栃木県'
//         ]);
//         Profecture::create([
//             'region_id' => 4,
//             'name' => '群馬県'
//         ]);
//         Profecture::create([
//             'region_id' => 5,
//             'name' => '埼玉県'
//         ]);
//         Profecture::create([
//             'region_id' => 5,
//             'name' => '千葉県'
//         ]);
//         Profecture::create([
//             'region_id' => 5,
//             'name' => '東京都'
//         ]);
//         Profecture::create([
//             'region_id' => 5,
//             'name' => '神奈川県'
//         ]);
//         Profecture::create([
//             'region_id' => 6,
//             'name' => '新潟県'
//         ]);
//         Profecture::create([
//             'region_id' => 6,
//             'name' => '山梨県'
//         ]);
//         Profecture::create([
//             'region_id' => 6,
//             'name' => '長野県'
//         ]);
//         Profecture::create([
//             'region_id' => 7,
//             'name' => '富山県'
//         ]);
//         Profecture::create([
//             'region_id' => 7,
//             'name' => '石川県'
//         ]);
//         Profecture::create([
//             'region_id' => 7,
//             'name' => '福井県'
//         ]);
//         Profecture::create([
//             'region_id' => 7,
//             'name' => '静岡県'
//         ]);
//         Profecture::create([
//             'region_id' => 8,
//             'name' => '岐阜県'
//         ]);
//         Profecture::create([
//             'region_id' => 8,
//             'name' => '愛知県'
//         ]);
//         Profecture::create([
//             'region_id' => 8,
//             'name' => '三重県'
//         ]);
//         Profecture::create([
//             'region_id' => 9,
//             'name' => '滋賀県'
//         ]);
//         Profecture::create([
//             'region_id' => 9,
//             'name' => '京都府'
//         ]);
//         Profecture::create([
//             'region_id' => 9,
//             'name' => '兵庫県'
//         ]);
//         Profecture::create([
//             'region_id' => 9,
//             'name' => '大阪府'
//         ]);
//         Profecture::create([
//             'region_id' => 9,
//             'name' => '和歌山県'
//         ]);
//         Profecture::create([
//             'region_id' => 9,
//             'name' => '奈良県'
//         ]);
//         Profecture::create([
//             'region_id' => 10,
//             'name' => '島根県'
//         ]);
//         Profecture::create([
//             'region_id' => 10,
//             'name' => '鳥取県'
//         ]);
//         Profecture::create([
//             'region_id' => 10,
//             'name' => '岡山県'
//         ]);
//         Profecture::create([
//             'region_id' => 10,
//             'name' => '広島県'
//         ]);
//         Profecture::create([
//             'region_id' => 10,
//             'name' => '山口県'
//         ]);
//         Profecture::create([
//             'region_id' => 11,
//             'name' => '徳島県'
//         ]);
//         Profecture::create([
//             'region_id' => 11,
//             'name' => '香川県'
//         ]);
//         Profecture::create([
//             'region_id' => 11,
//             'name' => '愛媛県'
//         ]);
//         Profecture::create([
//             'region_id' => 11,
//             'name' => '高知県'
//         ]);
//         Profecture::create([
//             'region_id' => 12,
//             'name' => '福岡県'
//         ]);
//         Profecture::create([
//             'region_id' => 12,
//             'name' => '佐賀県'
//         ]);
//         Profecture::create([
//             'region_id' => 12,
//             'name' => '長崎県'
//         ]);
//         Profecture::create([
//             'region_id' => 12,
//             'name' => '熊本県'
//         ]);
//         Profecture::create([
//             'region_id' => 12,
//             'name' => '大分県'
//         ]);
//         Profecture::create([
//             'region_id' => 12,
//             'name' => '宮崎県'
//         ]);
//         Profecture::create([
//             'region_id' => 12,
//             'name' => '鹿児島県'
//         ]);
//         Profecture::create([
//             'region_id' => 12,
//             'name' => '沖縄県'
//         ]);
//     }
// }