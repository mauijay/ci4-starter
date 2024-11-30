<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class PollSeeder extends Seeder
{
    public function run()
    {
      $pollings = [
        ['question' => 'Have you ever smoked pot?', 'yes' => '3477', 'no' => '908', 'no_comment' => '155', 'status' => '0'],
        ['question' => 'Have you ever ran a red light?', 'yes' => '554', 'no' => '1733', 'no_comment' => '213', 'status' => '1'],
        ['question' => 'Do you think Hawaii should get rid of Safety Stickers?', 'yes' => '99', 'no' => '17', 'no_comment' => '27', 'status' => '0'],
        ['question' => 'Do you care that Donald Trump was impeached?', 'yes' => '688', 'no' => '852', 'no_comment' => '46', 'status' => '0'],
        ['question' => 'Have you tested positive for covid19?', 'yes' => '1044', 'no' => '1868', 'no_comment' => '2215', 'status' => '0'],
        ['question' => 'Did you take a vacation last year?', 'yes' => '505', 'no' => '808', 'no_comment' => '76', 'status' => '0'],
        ['question' => 'Do you always wear a mask?', 'yes' => '1000', 'no' => '1500', 'no_comment' => '455', 'status' => '0'],
      ];
      $pm = model('PollingModel');
      foreach($pollings as $poll) {
          $pm->insert($poll);
      }
    }
}        
        