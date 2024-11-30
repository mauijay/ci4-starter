<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Exception;
use Faker\Factory;
// use CodeIgniter\I18n\Time;

class OrderSeeder extends Seeder
{
    public function run() {
      // User model
      $user = $this->db->table('users');
      $user->select('id');
      $usid = $user->get();

      // Payment Type model
      $pt = $this->db->table('payment_types');
      $pt->select('types_id');
      $ptsid = $pt->get();    

      // Time
      // $now = new Time('now', 'Pacific/Honolulu');

      // faker initialize
      $om = model('OrderModel');
      $faker    = \Faker\Factory::create('en_US');
                
      for ($j = 0; $j < rand(5, 25); $j++) {
          $uid = $faker->randomElement($usid->getResult('array'));
          $ptid = $faker->randomElement($ptsid->getResultArray());

          $om->save([
            'user_id'          => $uid, //$faker->numberBetween(10, 15),
            'payment_type_id' => $ptid,
            'amount'          => $faker->randomFloat(2, 0, 1000),
            'is_paid'         => 0,
            'status'          => 'paid',
          //  'created_at'      => $faker->dateTimeThisMonth(),
          //  'updated_at'      => $now                  
          ]);
      }
    }
}