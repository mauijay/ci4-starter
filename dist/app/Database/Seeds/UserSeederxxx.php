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
      'address'                   => '909 Kapiolani Blvd Suite 1901',
      'alternative_address'       => '',
      'city'                      => 'Honolulu',
      'state'                     => 'HI',
      'zip'                       => 96814,
      'company'                   => '808 BIZ, Inc.',
      'description'               => 'no desc yet',
      'avatar'                    => '01.png' ,
      'image'                     => 'bg-profile-default.jpg',
      'phone'                     => 8087251900,
      'mobile_number'             => 8585551212,
      'message_checked_at'        => '',
      'notification_checked_at'   => '',
      'job_title'                 =>'President',
      'user_type'                 =>'staff',
      'note'                      =>'add a better note here',
      'sticky_note'               =>'add a better sticky note here',
      'enable_web_notification'   =>  1,
      'enable_email_notification' =>  1,
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
      'username'              => 'islandArt',
      'email'                 => 'jaycadla@gmail.com',
      'password'              => 'Sales99bonfire?',
      'first_name'            => 'Frank',
      'last_name'             => 'Oliva',
      'dob'                   => '1970/07/04',
      'address'               => '123 Main St',
      'alternative_address'   => 'Apt B',
      'city'                  => 'Orange',
      'state'                 => 'CA',
      'zip'                   => 93626,
      'company'               => 'Frank Oliva Island Art',
      'description'           => 'one local kine artist',
      'avatar'                =>'avatar.png' ,
      'image'                 => '',
      'phone'                 => 8085551212,
      'mobile_number'         => 8585551212,
      'message_checked_at'    => '',
      'notification_checked_at' => '',
      'job_title'             =>'President',
      'user_type'             => 'client',
      'note'                  =>'add a better note here',
      'sticky_note'           =>'add a better sticky note here',
      'enable_web_notification' => '',
      'enable_email_notification' => '',
      'requested_account_removal' => '',      
      'whatsapp'              => '@artdude808hi',
      'instagram'             => '@artdude808hi',
      'facebook'              => '@artdude808hi',
      'twitter'               => '@artdude808hi',
      'linked_in'             => '@artdude808hi',
      'skype'                 => '@artdude808hi',
      'tiktok'                => '@artdude808hi'
    ]);
    $userModel->save($admin);
    $admin = $userModel->findById($userModel->getInsertID());
    $admin->addGroup('admin');
    

    //3rd is a loop
    for ($i = 0; $i < 4; $i++) {
      $user = new User($this->generateUser());
      $userModel->save($user);
      $user = $userModel->findById($userModel->getInsertID());
      //$user->addGroup('user');
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
      'company'                   => $faker->company(),
      'description'               => $faker->realText(100),
      'avatar'                    =>'avatar.png' ,
      'image'                     => '',
      'phone'                     => $faker->phoneNumber(),
      'mobile_number'             => 8585551212,
      'message_checked_at'        => '',
      'notification_checked_at'   => '',
      'job_title'                 => '',
      'user_type'                 => 'lead',
      'note'                      => '',
      'sticky_note'               => '',
      'enable_web_notification'   => '',
      'enable_email_notification' => '',
      'requested_account_removal' => '',      
      'whatsapp'                  => $faker->userName(),
      'instagram'                 => $faker->userName(),
      'facebook'                  => $faker->userName(),
      'twitter'                   => $faker->userName(),
      'linked_in'                 => $faker->userName(),
      'skype'                     => $faker->userName(),
      'tiktok'                    => $faker->userName()
    ];
  }
}
