<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;
use Exception;

class ProductsSeeder extends Seeder
{
  public function run()
  {
    // Brands model
    $brands = $this->db->table('brands');
    $brands->select('id');
    $brandid = $brands->get();

    // Categories model
    $cats = $this->db->table('categories');
    $cats->select('id')->where('cat_type', 'store')->where('parent_id >', '0');
    $catsid = $cats->get();

    // Supplier model
    $supplier = $this->db->table('suppliers');
    $supplier->select('id');
    $supid = $supplier->get();
    $dss =[0,0,0,0,.21,1.56,3.16];
    $bs = [null,null,null,null, 1];

    $pm = model('ProductModel'); 
    // faker initialize
    $faker = Factory::create('en_US');

    for ($i = 1; $i < 100; $i++)
    {
      $sid = $faker->randomElement($supid->getResult('array'));      
      $bid = $faker->randomElement($brandid->getResultArray());
      $cid = $faker->randomElement($catsid->getResultArray());

      $pm->save([

        'product_name'        => 'Test Product-'.$i,
        'slug'                => $faker->slug(2),
        'category_id'         => $cid,
        'brand_id'            => $bid,
        'description'         => $faker->realText(100),
        'short_description'   => $faker->realText(40),
        'details'             => $faker->realText(50),
        'note'                => 'add a note here',
        'product_image'       => 'noimage.webp',
        'product_img_alt'     => $faker->realText(20),
        'height'              => rand(1, 100),
        'width'               => rand(1, 100),
        'length'              => rand(1, 100),
        'weight'              => rand(1, 100),
        'msrp'                => 4.98,
        'discount'            => $dss[rand(0, 6)],
        'cost'                => .99,
        'supplier_id'         => $sid,
        'supplier_item_code'  => rand(101, 199),
        'sku'                 => $faker->isbn10(),
        'stock'               => rand(17, 1200),
        'sold_count'          => rand(11, 1500),
        'status'              => 1,
        'featured'            => 0,
        'onSale'              => $bs[rand(0, 4)],
        'last_modified_by'    => 1
      ]);
    }
  }
}


          
			
      
			

     		
			
			
      
           
			
      
      
      
		