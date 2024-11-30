<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class A1Starter extends Seeder
{
	public function run()
	{
		$this->call('UserSeeder');    
    $this->call('CategorySeeder');
    $this->call('TagsSeeder');
    $this->call('ImagesSeeder');
    $this->call('CtaSeeder');    
    $this->call('LandingpageSeeder');
    $this->call('DownloadsSeeder');        
	}
}
