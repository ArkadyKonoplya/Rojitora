<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();
        $regions = array(
            [
            'id'     => 1, 
            'name'   => '北海道',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime            
        	],
            [
            'id'     => 2, 
            'name'   => '北東北',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
        	],
            [
            'id'     => 3, 
            'name'   => '南東北',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime            
        	],
            [
            'id'     => 4, 
            'name'   => '北関東',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
        	],
            [
            'id'     => 5, 
            'name'   => '南関東',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
        	],
            [
            'id'     => 6, 
            'name'   => '甲信越',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
        	],
            [
            'id'     => 7, 
            'name'   => '北陸',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
	        ],
            [
            'id'     => 8, 
            'name'   => '中京',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
            [
            'id'     => 9, 
            'name'   => '関西',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
            [
            'id'     => 10, 
            'name'   => '中国',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
            [
            'id'     => 11, 
            'name'   => '四国',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
            [
            'id'     => 12, 
            'name'   => '九州・沖縄',
            'created_at'    => new DateTime, 
            'updated_at'    => new DateTime
            ],
        ); 

 
        DB::table('regions')->insert($regions);
    }
}
