<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
			'username' => 'tioprasetyo',
			'useremail' => 'prasetyotio775@gmail.com',
			'userpassword' => password_hash('tioprasetyo', PASSWORD_DEFAULT),
		]); 
	}
}
