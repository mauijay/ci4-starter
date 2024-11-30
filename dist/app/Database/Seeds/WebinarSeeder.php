<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class WebinarSeeder extends Seeder
{
	public function run()
	{
    // User model
    $user = $this->db->table('users');
    $user->select('username');
    $usid = $user->get();

    // Time
    $now = new Time('now', 'Pacific/Honolulu');

    // faker initialize
    $wm = model('WebinarModel');
    $faker    = \Faker\Factory::create('en_US');

    for ($i = 1; $i < 25; $i++) {
        $webinar_date  = new Time("2022-03-$i", 'Pacific/Honolulu');
        
        
        for ($j = 0; $j < rand(1, 9); $j++) {
            $uname = $faker->randomElement($usid->getResult('array'));
            
            $mediaType = ['Google Meet', 'Zoom', 'WebEx'];

            $wm->save([
                'name'          => $faker->words(6, true),
                'webinar_slug'	=> $faker->slug(),
                'desc'   	      => 'Webinar description -' .$faker->realText(50),
                'source_person' => $uname,
                'date' 	        => $webinar_date->toDateString(),
                'time' 		      => $faker->time($format = 'H:i', $max = 'now'), //'13:00',
                'cost' 		      => $faker->randomNumber(2), //'USD : 47',
                'webinar_media' => $mediaType[rand(0, 2)],
                'poster' 	      => "poster_$i.png",
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ]);
        }
    }

    
		
	}
}