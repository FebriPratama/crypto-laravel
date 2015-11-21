<?php

class User extends Seeder {

	public function run()
	{

		$isevents = array(
			[
				'user_fullname'     => 'Admin',
				'user_img_profile' => 'avatar5.png',
				'user_description' => 'Lorem',
				'email'    => 'admin@gmail.com',
				'user_role'=>'admin',
				'password' => Hash::make('admin123'),
				'user_register_date' => new Datetime,
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'user_fullname'     => 'Admin',
				'user_img_profile' => 'avatar5.png',
				'user_description' => 'Lorem',
				'email'    => 'argap13@gmail.com',
				'user_role'=>'member',
				'password' => Hash::make('admin123'),
				'user_register_date' => new Datetime,
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			],
			[
				'user_fullname'     => 'Admin',
				'user_img_profile' => 'avatar5.png',
				'user_description' => 'Lorem',
				'email'    => 'argap14@gmail.com',
				'user_role'=>'member',
				'password' => Hash::make('admin123'),
				'user_register_date' => new Datetime,
				'created_at' => new DateTime, 
				'updated_at' => new DateTime
			]			
		);

		// Uncomment the below to run the seeder
		DB::table('tbl_users')->insert($isevents);
	}

}