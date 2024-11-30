<?php namespace App\Database\Seeds; 

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;
use Exception;

class SupplierSeeder extends Seeder
{
  public function run()
	{
		$sm = model('SupplierModel');
		for ($i = 0; $i < 16; $i++) {
			$sm->insert($this->generateSuppliers());
		}
	} 

	private function generateSuppliers(): array
	{
    $faker = Factory::create('en_US');
		return [
      'name'        => $faker->Company(),
      'contact'     => $faker->firstNameMale(),
      'email'       => $faker->email(),
      'address'     => $faker->streetAddress(),
      'phone'       => $faker->phoneNumber(),
      'description' => $faker->realText(50),      
    ];
	}
 
}