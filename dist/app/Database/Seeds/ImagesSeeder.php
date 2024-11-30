<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ImagesSeeder extends Seeder
{
    public function run()
    {
      $im = model('ImageModel');
      $im->insertBatch([
        [
          'url' => 'https://frankolivaislandart.com/uploads/artwork/postImgSm/Bay-Series-Kailua-Bay-II.jpg',
          'alt_text' => 'frank Oliva Kailua Bay II art work',
          'caption_text' => 'Kailua Bay'
        ],
        [
          'url' => 'https://frankolivaislandart.com/uploads/artwork/postImgSm/Floral-Series-Dancing-Flowers.jpg',
          'alt_text' => 'franks red looking tulips on a dark green background',
          'caption_text' => 'Dancing Flowers'
        ]
      ]);
    }
}
