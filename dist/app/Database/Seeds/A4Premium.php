<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class A4Premium extends Seeder
{
    public function run()
    {
      // $this->call('FilesSeeder');
      $this->call('PollSeeder');
      $this->call('WebinarSeeder');
      $this->call('FaqsSeeder');
      $this->call('KbsSeeder');
      $this->call('PotoSeeder');
      $this->call('ReviewSeeder');
      // $this->call('ChatsSeeder');
      // $this->call('EmployeesSeeder');
      // $this->call('MembersSeeder');
      $this->call('TestimonialSeeder');
    }
}
