<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class A3Ecommerce extends Seeder
{
    public function run()
    {
      $this->call('BrandsSeeder');
      $this->call('SupplierSeeder');
      $this->call('ProductsSeeder');
      $this->call('OrderSeeder');
      $this->call('OrdersDetailSeeder');
      //$this->call('OrdersListSeeder');
      //$this->call('OrdersRequestSeeder');
      //$this->call('TransactionsSeeder');
      //$this->call('ShoppingCartSeeder');
      //$this->call('WalletsSeeder');
      //$this->call('PaypalCallbacksSeeder');
      $this->call('BannerSeeder');
      //$this->call('ProductsRatingsSeeder');
      //$this->call('ProductsCategoriesSeeder');
      $this->call('ProductsFavoriteSeeder');
    }
}
