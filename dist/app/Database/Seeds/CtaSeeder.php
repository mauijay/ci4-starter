<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CtaSeeder extends Seeder
{
    public function run()
    {
      $ctas = [
        [
          'offer_name' => 'Just follow this free checklist and create a perfectly optimized page that Google loves.',
          'offer_btn_text' => 'Download Free Now',
          'offer_image' => 'marketer.webp',
          'offer_img_alt' => 'a nice picture of books',
          'offer_filename' => 'nissan.pdf',
          'offer_desc' => 'write a better description of this here'
        ],
        [
          'offer_name' => 'go fly a kite',
          'offer_btn_text' => 'Get it now',
          'offer_image' => 'creditbuilder1.webp',
          'offer_img_alt' => 'alt text',
          'offer_filename' => 'nissan.pdf',
          'offer_desc' => '3 copies of our Business Credit Builder book. '
        ],
        [
          'offer_name' => 'get your simulated pizza today',
          'offer_btn_text' => 'free download',
          'offer_image' => 'creditbuilder1.webp',
          'offer_img_alt' => 'image alt text',
          'offer_filename' => 'nissan.pdf',
          'offer_desc' => '3 copies of our Business Credit Builder book. '
        ],
        [
          'offer_name' => 'Half off on all Maki Rolls, now until the years end 2023',
          'offer_btn_text' => 'get your coupon',
          'offer_image' => 'creditbuilder1.webp',
          'offer_img_alt' => 'image alt text',
          'offer_filename' => 'nissan.pdf',
          'offer_desc' => '3 copies of our Business Credit Builder book. '
        ]        
      ];
      $cT = model('CtaOfferModel');
      foreach($ctas as $c) {
          $cT->insert($c);
      }
    }
}
