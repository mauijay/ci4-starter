<?php namespace App\Database\Seeds; // book loan data

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;
use Exception;

class BooksSeeder extends Seeder
{
  public function run()
	{
		$bm = model('BookModel');
    
		for ($i = 0; $i < 100; $i++) {
			$bm->insert($this->generateBooks());
		}
	} 

	private function generateBooks(): array
	{
    $faker = Factory::create();
		return [
      'book_code'         => uniqid(),
      'book_stock'        => rand(1, 100),
      'book_title'        => $faker->words(4, true),
      'synopsis'          => $faker->realText(100),
      'category'          => rand(1, 8),
      'writer'            => $faker->Name(),
      'publisher'         => $faker->Company(),
      "publication_year"  => $faker->year($max = 'now'),
      'book_cover'        => 'no_image.png',
      'book_cover_img_alt'=> $faker->realText(45), 
      'created_at'        => '2021-12-18 02:27:16',
      'updated_at'        => '2022-06-28 02:28:16',
      'deleted_at'        => NULL,
    ];
	}
 
}