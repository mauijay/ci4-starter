<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Shield\Entities\User;
use Faker\Factory;

class UserSeeder extends Seeder
{
  public function run()
  {
    //$userModel = model('UserModel');
    $userModel = auth()->getProvider();
    
    // 1st
    $superadmin = new User([
      'username'                  => 'JayLamping',
      'email'                     => 'jay@808.biz',
      'password'                  => 'Sales99bonfire?',
      'first_name'                => 'John',
      'last_name'                 => 'Lamping',
      'dob'                       => '1963-03-07',
      'client_id'                 => '1050',
      'description'               => 'no desc yet',
      'avatar'                    => '01.png' ,
      'image'                     => 'bg-profile-default.jpg',
      'phone'                     => '8087251900',
      'mobile_number'             => '8585551212',
      'message_checked_at'        => '',
      'notification_checked_at'   => '',
      'job_title'                 => 'President',
      'user_type'                 => 'staff',
      'note'                      => 'add a better note here',
      'sticky_note'               => 'add a better sticky note here',
      'enable_web_notification'   => '1',
      'enable_email_notification' => '1',
      'requested_account_removal' => '',      
      'whatsapp'                  => '@808biz',
      'instagram'                 => '@808biz',
      'facebook'                  => '@808biz',
      'twitter'                   => '@808biz',
      'linked_in'                 => '@808biz',
      'skype'                     => '@808biz',
      'tiktok'                    => '@808biz'
    ]);
    $userModel->save($superadmin);
    $superadmin = $userModel->findById($userModel->getInsertID());
    $superadmin->addGroup('superadmin');
    
    
    // 2nd
    $admin = new User([
      'username'                  => 'islandArt',
      'email'                     => 'jaycadla@gmail.com',
      'password'                  => 'Sales99bonfire?',
      'first_name'                => 'Frank',
      'last_name'                 => 'Oliva',
      'dob'                       => '1970/07/04',
      'client_id'                 => '1052',
      'description'               => 'one local kine artist',
      'avatar'                    => 'avatar.png' ,
      'image'                     => '',
      'phone'                     => '8085551212',
      'mobile_number'             => '8585551212',
      'message_checked_at'        => '',
      'notification_checked_at'   => '',
      'job_title'                 => 'Vice-President',
      'user_type'                 => 'client',
      'note'                      => 'add a better note here',
      'sticky_note'               => 'add a better sticky note here',
      'enable_web_notification'   => '',
      'enable_email_notification' => '',
      'requested_account_removal' => '',      
      'whatsapp'                  => '@artdude808hi',
      'instagram'                 => '@artdude808hi',
      'facebook'                  => '@artdude808hi',
      'twitter'                   => '@artdude808hi',
      'linked_in'                 => '@artdude808hi',
      'skype'                     => '@artdude808hi',
      'tiktok'                    => '@artdude808hi'
    ]);
    $userModel->save($admin);
    $admin = $userModel->findById($userModel->getInsertID());
    $admin->addGroup('admin');
    

    //3rd is a loop
    /*
    for ($i = 0; $i < 4; $i++) {
      $user = new User($this->generateUser());
      $userModel->save($user);
      $user = $userModel->findById($userModel->getInsertID());
      //$user->addGroup('user');
      $userModel->addToDefaultGroup($user);
    }
    */

    $contacts = [
      [
        'username'  => 'vacations1',
        'password'  => 'Altima51cars?',
        'client_id' => '1051',
        'first_name' => 'James',
        'last_name' => 'Parker',
        'user_type' => 'main', // main, billing, user, staff
        'email' => 'james@aol.com',
        'mobile_number' => '707-227-4609',
        'phone' => '707-227-4609'
      ],
      [
        'username'  => 'gardner1',
        'password'  => 'Altima53cars?',
        'client_id' => '1053',
        'first_name' => 'Juan',
        'last_name' => 'Garcia',
        'user_type' => 'main', // main, billing, user, staff
        'email' => 'juan@aol.com',
        'mobile_number' => '707-227-4609',
        'phone' => '707-227-4609'
      ],
      [
        'username'  => 'chef1',
        'password'  => 'Altima54cars?',
        'client_id' => '1054',
        'first_name' => 'Karen',
        'last_name' => 'Hadley',
        'user_type' => 'main', // main, billing, user, staff
        'email' => 'xxxzzz@aol.com',
        'mobile_number' => '707-227-4609',
        'phone' => '707-227-4609'
      ],
      [
        'username'  => 'don1',
        'password'  => 'Altima61cars?',
        'client_id' => '1061',
        'first_name' => 'Donald',
        'last_name' => 'Trump',
        'user_type' => 'billing', // main, billing, user, staff
        'email' => 'xzxz@aol.com',
        'mobile_number' => '707-227-4609',
        'phone' => '707-227-4609'
      ],
      [
        'username'  => 'sushi1',
        'password'  => 'Altima56cars?',
        'client_id' => '1056',
        'first_name' => 'Cha "cc"',
        'last_name' => 'Crane',
        'user_type' => 'main', // main, billing, user, staff
        'email' => 'xxx1056@aol.com',
        'mobile_number' => '707-227-4609',
        'phone' => '707-227-4609'
      ],
      [
        
        'username'  => 'karaoke1',
        'password'  => 'Altima58cars?',
        'client_id' => '1058',
        'first_name' => 'Rylo',
        'last_name' => 'Aaaaaaaa',
        'user_type' => 'main', // main, billing, user, staff
        'email' => 'xxx1058@aol.com',
        'mobile_number' => '707-227-4609',
        'phone' => '707-227-4609'
      ]
    ];

    

    foreach ($contacts as $contact) {
      
      $user = new User($contact);
      $userModel->save($user);
      $user = $userModel->findById($userModel->getInsertID());
      $userModel->addToDefaultGroup($user);
    }
  }

  private function generateUser(): array
  {
    $faker = Factory::create();
    return [
      'email'                     => $faker->email(),
      'password'                  => 'Altima99cars?',
      'username'                  => $faker->userName(),
      'first_name'                => $faker->firstName(),
      'last_name'                 => $faker->lastName(),
      'dob'                       => $faker->date('Y-m-d'),
      'address'                   => $faker->streetAddress(),
      'alternative_address'       => $faker->secondaryAddress(),
      'city'                      => $faker->city(),
      'state'                     => $faker->stateAbbr(),
      'zip'                       => $faker->postcode(),
      'client_id'                 => '1058',//$faker->company(),
      'description'               => $faker->realText(100),
      'avatar'                    => 'avatar.png' ,
      'image'                     => '',
      'phone'                     => $faker->phoneNumber(),
      'mobile_number'             => '8585551212',
      'message_checked_at'        => '',
      'notification_checked_at'   => '',
      'job_title'                 => '',
      'user_type'                 => 'lead',
      'note'                      => '',
      'sticky_note'               => '',
      'enable_web_notification'   => '',
      'enable_email_notification' => '',
      'requested_account_removal' => '',      
      'whatsapp'                  => '8585551212',
      'instagram'                 => '@'.$faker->userName(),
      'facebook'                  => '@'.$faker->userName(),
      'twitter'                   => '@'.$faker->userName(),
      'linked_in'                 => '@'.$faker->userName(),
      'skype'                     => '@'.$faker->userName(),
      'tiktok'                    => '@'.$faker->userName()
    ];
  }
}