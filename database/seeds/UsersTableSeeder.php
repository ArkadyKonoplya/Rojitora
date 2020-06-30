<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
 
        $users = array(
            [
                'id'              => 1,
                'member_id'       => '1732',
                'corp_name'   => 'テラテクニカル株式会社',
                'second_input'   => 'てらてくにかるかぶしきかいしゃ',
                'post_address'     => '379-2213',
                'hello'     => '群馬県',
                'third_input'     => '高崎市綿貫町',
                'tel'   => '080-3547-3048',
                'fax'      => '03-63693550',
                'email_address'           => 'kageyama@tera-technical.com',
                'password'        => bcrypt('55555'),
                'contact_address'         => '㈱ロジテル',
                'meeting_part'     => 'その他'
            ],
            [
                'id'              => 2,
                'member_id'       => '4094',
                'corp_name'   => 'テラテクニカル株式会社',
                'second_input'   => 'てらてくにかるかぶしきかいしゃ',
                'post_address'     => '379-1334',
                'hello'     => '群馬県',
                'third_input'     => '高崎市綿貫町',
                'tel'   => '080-3547-6049',
                'fax'      => '03-63693549',
                'email_address'           => 'admin@test.com',
                'password'        => bcrypt('123'),
                'contact_address'         => '㈱ロジテル',
                'meeting_part'     => 'その他'
            ]
        );
 
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
}
