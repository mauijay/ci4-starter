<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BannerSeeder extends Seeder
{
  public function run()
  {
      $bm = model('BannerModel');

      $banners = [
          [
              'product_id' => 1,
              'cover' => 'images/banners/product/naruto/banner.jpg',
          ],
          [
              'product_id' => 3,
              'cover' => 'images/banners/product/blue-lock/banner.jpg',
          ],
          [
              'product_id' => 5,
              'cover' => 'images/banners/product/solo-leveling/banner.jpg',
          ],
      ];

      foreach ($banners as $banner) {
          $bm->save($banner);
      }
  }
}
