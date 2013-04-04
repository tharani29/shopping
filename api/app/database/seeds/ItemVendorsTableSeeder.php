<?php

class ItemVendorsTableSeeder extends Seeder {

	public function run()
	{
        DB::table('item_vendors')->delete();

		$item_vendors = array(
            array(
                'item_id'   =>  1,
                'vendor_id' =>  5,
                'confirmed' =>  1,
                'last_known_price' =>  2.5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   =>  2,
                'vendor_id' =>  3,
                'confirmed' =>  1,
                'last_known_price' =>  4.5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   =>  7,
                'vendor_id' => 16,
                'confirmed' =>  1,
                'last_known_price' =>  60,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   => 12,
                'vendor_id' => 12,
                'confirmed' =>  0,
                'last_known_price' => Null   ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ), 
            array(
                'item_id'   =>  3,
                'vendor_id' => 13,
                'confirmed' =>  0,
                'last_known_price' =>  Null  ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ), 
            array(
                'item_id'   =>  1,
                'vendor_id' =>  2,
                'confirmed' =>  1,
                'last_known_price' =>  4.5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   => 14,
                'vendor_id' => 16,
                'confirmed' =>  1,
                'last_known_price' =>  800,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   => 10,
                'vendor_id' => 12,
                'confirmed' =>  0,
                'last_known_price' =>   Null ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ), 
            array(
                'item_id'   =>  8,
                'vendor_id' => 16,
                'confirmed' =>  1,
                'last_known_price' =>  120,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   =>  9,
                'vendor_id' =>  7,
                'confirmed' =>  0,
                'last_known_price' =>  Null  ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ), 
            array(
                'item_id'   =>  6,
                'vendor_id' => 12,
                'confirmed' =>  0,
                'last_known_price' => Null   ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ), 
            array(
                'item_id'   =>  2,
                'vendor_id' =>  2,
                'confirmed' =>  1,
                'last_known_price' =>  5 ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ), 
            array(
                'item_id'   =>  3,
                'vendor_id' =>  6,
                'confirmed' =>  0,
                'last_known_price' =>  Null  ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ), 
            array(
                'item_id'   => 10,
                'vendor_id' => 18,
                'confirmed' =>  0,
                'last_known_price' =>  Null  ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   =>  2,
                'vendor_id' =>  5,
                'confirmed' =>  1,
                'last_known_price' =>  3 ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   =>  2,
                'vendor_id' => 16,
                'confirmed' =>  1,
                'last_known_price' =>  6 ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   =>  1,
                'vendor_id' =>  1,
                'confirmed' =>  1,
                'last_known_price' =>  5 ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   =>  6,
                'vendor_id' =>  8,
                'confirmed' =>  0,
                'last_known_price' =>  Null  ,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   =>  11,
                'vendor_id' =>  16,
                'confirmed' =>   1,
                'last_known_price' =>  10,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   =>  4,
                'vendor_id' =>  1,
                'confirmed' =>  1,
                'last_known_price' =>  10,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'item_id'   => 13,
                'vendor_id' =>  1,
                'confirmed' =>  1,
                'last_known_price' =>  5,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
		);

		DB::table('item_vendors')->insert($item_vendors);
	}

}
