<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestimonialSeeder extends Seeder {
  public function run()
  {
    $ket = [
      'interesting place',
      'friendly employees',
      'all is ok',
      'nice photo',
      'very well taken care of',
      'all feels good',
      'for me, i prefer corn',
      'I have seen better',
      'bisa dilihat hasil',
      'with or without teeth',
      'I really love this place',
      'Number one in Hawaii customer service',
    ];
    // clients
    $clients = $this->db->table('clients');
    $clients->select('id');
    $clid = $clients->get();
    // User model
    $user = $this->db->table('users');
    $user->select('id');
    $usid = $user->get();

    $faker = \Faker\Factory::create('en_US');
    $tM    = model('TestimonialModel');
    for ($i = 0; $i < 12; $i++) {
      $uid = $faker->randomElement($usid->getResult('array'));
      $cid = $faker->randomElement($clid->getResultArray());
      $tM->save([
        'picture' => "$i.jpg",
        'info' => $ket[$i],
        'users_id' => $uid,
        'clients_id' => $cid
      ]);
    }
  }
}
