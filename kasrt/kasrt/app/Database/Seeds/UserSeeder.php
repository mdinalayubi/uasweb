<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
		'username' => 'ayubi',
		'useremail' => 'ayubi@gmail.com',
		'userpassword' => password_hash('ayubi123', PASSWORD_DEFAULT),
		]);
    }
}
