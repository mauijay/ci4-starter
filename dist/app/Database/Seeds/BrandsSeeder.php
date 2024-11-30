<?php namespace App\Database\Seeds; // book loan data

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;
//use Exception;

class BrandsSeeder extends Seeder
{
  public function run()
	{
		$bm = model('BrandModel');
    
		for ($i = 0; $i < 21; $i++) {
			$bm->insert($this->generateBrands());
		}
	} 

	private function generateBrands(): array
	{
    $faker = Factory::create();
		return [
      'brand_logo'        => 'noimage.webp',
      'brand_logo_alt'    => 'company logo info',
      'brand_name'        => $faker->Company(),
      'brand_slug'        => $faker->slug(3),
      'brand_desc'        => 'write a brand description here'     
    ];
	}
 
}