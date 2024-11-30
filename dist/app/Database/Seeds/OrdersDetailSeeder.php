<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;
use CodeIgniter\I18n\Time;

class OrdersDetailSeeder extends Seeder
{
    public function run() {
      // Product model
      $product = $this->db->table('products');
      $product->select('products_id');
      $productid = $product->get();

      // Orders model
      $orders = $this->db->table('orders');
      $orders->select('orders_id');
      $orderid = $orders->get();

      // Time
      $now = new Time('now', 'Pacific/Honolulu');

      // faker initialize
      $odm = model('OrderDetailModel');
      $faker    = \Faker\Factory::create('en_US');
      $quantity = rand(1, 8);

          
          for ($j = 0; $j < 15; $j++) {
              $pid = $faker->randomElement($productid->getResult('array'));
              $oid = $faker->randomElement($orderid->getResultArray());
  
              $odm->save([
                  'order_id'    => $oid,
                  'product_id'  => $pid,
                  'product_price'       => 4.99,
                  'order_qty'    => $quantity,
                  'orderdetails_total'       => 25.88,
                //  'created_at'  => $borrow_date->toDateString(),
                //  'updated_at'  => $return_date->toDateString()
              ]);
          }
      
        
    }
    
}
