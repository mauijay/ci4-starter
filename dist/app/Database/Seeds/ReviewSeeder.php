<?php

namespace App\Database\Seeds;

use App\Models\ReviewModel;
use App\Models\UserModel;
use App\Models\ProductModel;
use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ReviewSeeder extends Seeder
{
  public function run()
  {
    // Users model
    $users = new UserModel();
    $users->select('id');
    $userid = $users->get();

    // Products model
    $products = new ProductModel();
    $products->select('products_id');
    $productid = $products->get();

    
    // faker initialize
    $model = new ReviewModel();
    $faker = Factory::create('en_US');

    for ($i = 1; $i < 25; $i++)
    {
      $uid = $faker->randomElement($userid->getResult('array'));      
      $pid = $faker->randomElement($productid->getResultArray());
      

      $model->save([
          'reviewer_id'         => $uid,
          'location'            => $faker->city().', '.$faker->state(),
          'product_id'          => $pid,      
          'review_rating'       => '5 stars',
          'review_body'         => $faker->realText(200),          
      ]);
    }
  }
}
