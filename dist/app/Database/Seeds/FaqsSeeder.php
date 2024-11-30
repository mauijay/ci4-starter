<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FaqsSeeder extends Seeder
{
    public function run()
    {
      $faqs = [
        [
          'question' => 'why is the sky blue?',
          'answer' => 'because it matches the water',
          'faq_cat' => 'sales' 
        ],
        [
          'question' => 'Why did the chicken cross the road?',
          'answer' => '554',
          'faq_cat' => 'net30'
        ],
        [
          'question' => 'Do you provide secure ssl servers?',
          'answer' => '99',
          'faq_cat' => 'hosting'
        ],
        [
          'question' => 'Do you need to run my personal credit?',
          'answer' => '688',
          'faq_cat' => 'net30'
        ],
        [
          'question' => 'Can you transfer my current website to 808 Business Solutions Secure servers?',
          'answer' => '808 Business Solutions makes it easy to transfer an existing domain to our hosting account. If you ever need assistance, just contact our support team and we will be happy to do the transfer for you.',
          'faq_cat' => 'hosting'
        ],
        [
          'question' => 'Why choose 808 Business Solutions to host your website?',
          'answer' => '808 BIZ is dedicated to helping you get your business online.   Your dedicated support team will design and maintain your professional business website for you.  You’ll find everything you need to be successful.',
          'faq_cat' => 'hosting'
        ],
        [
          'question' => 'Do you always wear a mask?',
          'answer' => 'only when it rains',
          'faq_cat' => 'sales'
        ],
      ];
      $fq = model('FaqModel');
      foreach($faqs as $faq) {
          $fq->insert($faq);
      }
    }
}
