<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class A2cms extends Seeder
{
    public function run()
    {
      $this->call('PaymentTypeSeeder');
      $this->call('LeadSeeder');
      $this->call('ClientsSeeder');
      $this->call('AdsSeeder');
      // $this->call('BillingSeeder');
      // $this->call('InvoiceSeeder');
      $this->call('WebProjectsSeeder');
      // $this->call('NotificationSeeder');
      // $this->call('SubscribersSeeder');
      // $this->call('SubscriptionsSeeder');
      // $this->call('TeamsSeeder');
    }
}
