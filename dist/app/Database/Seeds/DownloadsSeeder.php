<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DownloadsSeeder extends Seeder
{
    public function run()
    {
        $bookType = ['ebook', 'pdf', 'guide'];
        $books = [
          [ 'category_id'=> 1,
            'user_id'=> '1',
            'name' => 'None',
            'type'=> 'ebook',
            'description' => 'Select none...', 
            'image' => 'noimage.webp',
            'image_alt'=> 'image alt text',
            'website'=> '808.biz',
            'hits'=> '0'            
          ],
          [ 'category_id'=> rand(1, 8),
            'user_id'=> '1',
            'name' => 'How to write a business plan',
            'type'=> $bookType[rand(0, 2)],
            'description' => 'Write a book desc here - 3477', 
            'image' => '23.jpg',
            'image_alt'=> 'image alt text',
            'website'=> '808.biz',
            'hits'=> '20'            
          ],
          [ 'category_id'=> rand(1, 8),
            'user_id'=> '1',
            'name' => 'LLC or S Corp?',
            'type'=> $bookType[rand(0, 2)], 
            'description' => 'Write a book desc here - 554', 
            'image' => '23.jpg',
            'image_alt'=> 'image alt text',
            'website'=> '808pic.com',
            'hits'=> '25'            
          ],
          [ 'category_id'=> rand(1, 8),
            'user_id'=> '1',
            'name' => 'When should you file your corp taxes',
            'type'=> $bookType[rand(0, 2)], 
            'description' => 'Write a book desc here - 99', 
            'image' => '23.jpg',
            'image_alt'=> 'image alt text',
            'website'=> 'cadla.com',
            'hits'=> '30'            
          ],
          [ 'category_id'=> rand(1, 8),
            'user_id'=> '1',
            'name' => 'How to find the best business credit card',
            'type'=> $bookType[rand(0, 2)], 
            'description' => 'Write a book desc here - 688', 
            'image' => '23.jpg',
            'image_alt'=> 'image alt text',
            'website'=> '808.biz',
            'hits'=> '50'            
          ],
          [ 'category_id'=> rand(1, 8),
            'user_id'=> '1',
            'name' => 'The best budiness checking accounts in Hawaii',
            'type'=> $bookType[rand(0, 2)], 
            'description' => 'Write a book desc here - 1044', 
            'image' => '23.jpg',
            'image_alt'=> 'image alt text',
            'website'=> 'google.com',
            'hits'=> '10'            
          ],
          [ 'category_id'=> rand(1, 8),
            'user_id'=> '1',
            'name' => 'Marketing ideas in Hawaii',
            'type'=> $bookType[rand(0, 2)], 
            'description' => 'Write a book desc here - 505', 
            'image' => '23.jpg',
            'image_alt'=> 'image alt text',
            'website'=> '808.biz',
            'hits'=> '99'            
          ],
          [ 'category_id'=> rand(1, 8),
            'user_id'=> '1',
            'name' => 'Your guide to doing business with the US Military',
            'type'=> $bookType[rand(0, 2)], 
            'description' => 'Write a book desc here - 1000', 
            'image' => '23.jpg',
            'image_alt'=> 'image alt text',
            'website'=> 'pandora.com',
            'hits'=> '125'            
          ],
      ];
      $dm = model('DownloadModel');
      foreach($books as $book) {
          //$this->db->table('downloads')->insert($book); ************ this actually works *********
          $dm->insert($book);
      }
    }
}





//      'name'            => ['type' => 'varchar', 'constraint' => 50],
//      'description'     => ['type' => 'tinytext'],
//      'ebook_image'     => ['type' => 'varchar', 'constraint' => 255, 'default' => '23.jpg'],
//      'ebook_status'    => ['type' => 'ENUM', 'constraint' => ['shown', 'featured', 'archived']],
