<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KbsSeeder extends Seeder
{
  public function run()
  {
    $kbs = [
      [
        'kb_title' => 'Test 1',
        'kb_body' => 'test one',
        'kb_cat' => 'sales' 
      ],
      [
        'kb_title' => 'Test 2',
        'kb_body' => 'test two',
        'kb_cat' => 'net30'
      ],
      [
        'kb_title' => 'Test 3',
        'kb_body' => 'test three',
        'kb_cat' => 'hosting'
      ],
      [
        'kb_title' => 'Test 4',
        'kb_body' => 'test four',
        'kb_cat' => 'net30'
      ],
      [
        'kb_title' => 'Test 5',
        'kb_body' => 'test five',
        'kb_cat' => 'hosting'
      ],
      [
        'kb_title' => 'Test 6',
        'kb_body' => 'test six',
        'kb_cat' => 'hosting'
      ],
      [
        'kb_title' => 'Test 7',
        'kb_body' => 'test seven',
        'kb_cat' => 'sales'
      ],
    ];
    $kbm = model('KbModel');
    foreach($kbs as $kb) {
        $kbm->insert($kb);
    }
  }
}
