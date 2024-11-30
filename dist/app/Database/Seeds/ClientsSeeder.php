<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ClientModel;
use App\Models\ClientContactModel;
use App\Models\ClientGroupModel;

class ClientsSeeder extends Seeder
{
  public function run()
  {

    // add client groups  **********************************

    $cgm = model('ClientGroupModel');

    $groups = [
      [
        'cg_title' => 'Trial'
      ],
      [
        'cg_title' => 'Basic'
      ],
      [
        'cg_title' => 'Premier'
      ],
      [
        'cg_title' => 'Platinum'
      ],
      [
        'cg_title' => 'Ultimate'
      ],
    ];

    foreach ($groups as $group) {
        $cgm->save($group);
    }


    // add clients Contact **********************************

    $cc = model('ClientContactModel');

      $contacts = [
        [
          'firstname'         => 'Jay',
          'lastname'          => 'Lamping',
          'type'              => 'main', // main, manager, other or billing
          'mail'              => 'jay@808.biz',
          'cellphone'         => '808-725-1900',
          'workphone'         => '808-600-7400'
        ],
        [
          'firstname'         => 'James',
          'lastname'          => 'Parker',
          'type'              => 'main', // main, manager, other or billing
          'mail'              => 'james@aol.com',
          'cellphone'         => '707-227-4609',
          'workphone'         => '707-227-4609'
        ],
        [
          'firstname'         => 'Frank',
          'lastname'          => 'Oliva',
          'type'              => 'main', // main, manager, other or billing
          'mail'              => 'xoxo@aol.com',
          'cellphone'         => '707-227-4609',
          'workphone'         => '707-227-4609'
        ],
        [
          'firstname'         => 'Juan',
          'lastname'          => 'Garcia',
          'type'              => 'main', // main, manager, other or billing
          'mail'              => 'juan@aol.com',
          'cellphone'         => '707-227-4609',
          'workphone'         => '707-227-4609'
        ],
        [
          'firstname'         => 'Karen',
          'lastname'          => 'Hadley',
          'type'              => 'main', // main, manager, other or billing
          'mail'              => 'xxxzzz@aol.com',
          'cellphone'         => '707-227-4609',
          'workphone'         => '707-227-4609'
        ],
        [
          'firstname'         => 'Donald',
          'lastname'          => 'Trump',
          'type'              => 'main', // main, manager, other or billing
          'mail'              => 'xzxz@aol.com',
          'cellphone'         => '707-227-4609',
          'workphone'         => '707-227-4609'
        ],
        [
          'firstname'         => 'Cha "cc"',
          'lastname'          => 'Crane',
          'type'              => 'main', // main, manager, other or billing
          'mail'              => 'xxx99@aol.com',
          'cellphone'         => '707-227-4609',
          'workphone'         => '707-227-4609'
        ],
        [
          'firstname'         => 'Rylo',
          'lastname'          => 'Aaaaaaaa',
          'type'              => 'main', // main, manager, other or billing
          'mail'              => 'xxx@aol.com',
          'cellphone'         => '707-227-4609',
          'workphone'         => '707-227-4609'
        ]
      ];

      foreach ($contacts as $contact) {
          $cc->save($contact);
      }




    // add clients **********************************************
    $cm = model('ClientModel');

    $clients = [
      [
        'id'                    => 1050,
        'client_name'           => '808 Business Solutions',
        'type'                  => 'organization', //or a person
        'address'               => '909 Kapiolani Blvd Suite 1901',
        'city'                  => 'Honolulu',
        'state'                 => 'HI',
        'zip'                   => '96814',
        'website'               => '808businesssolutions.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'SquareLogo.png',
        'main_contact'          =>  1,
        'billing_contact'       =>  1,
        'main_email'            => 'solutions@808businesssolutions.com',
        'main_phone'            => '8086007400',
        'starred_by'            ,
        'group_id'             => 2,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 =>  'my business ads'          
      ],
      [
        'id'                    => 1051,
        'client_name'           => 'Last Minute Vacation Rentals of Napa',
        'type'                  => 'organization',
        'address'               => '311 Fairview Dr',
        'city'                  => 'Napa',
        'state'                 => 'CA',
        'zip'                   => '94558',
        'website'               => 'yourlastminutevacationrentals.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'LMVR.jpg',
        'main_contact'          =>  2,
        'billing_contact'       =>  2,
        'main_email'            => 'jamesfrankparker@gmail.com',
        'main_phone'            => '7072274609',
        'starred_by'            ,
        'group_id'             => 2,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 =>  'book your vacation today!'          
      ],
      [
        'id'                    => 1052,
        'client_name'           => 'Frank Oliva Island Art',
        'type'                  => 'organization',
        'address'               => '1170 Kamahele St Unit D',
        'city'                  => 'Kailua',
        'state'                 => 'HI',
        'zip'                   => '96734',
        'website'               => 'frankolivaislandart.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'foia.png',
        'main_contact'          =>  3,
        'billing_contact'       =>  3,
        'main_email'            => 'frank@aol.com',
        'main_phone'            => '808-753-6191',
        'starred_by'            ,
        'group_id'             => 2,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => 'Nice Art studio in Kailua'          
      ],
      [
        'id'                    => 1053,
        'client_name'           => 'Hurtados Landscaping',
        'type'                  => 'organization',
        'address'               => '3028 Hagen Rd',
        'city'                  => 'Napa',
        'state'                 => 'CA',
        'zip'                   => '94558',
        'website'               => 'hurtadoslandscaping.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'Hurtados_Landscaping_Logo.jpg',
        'main_contact'          =>  4,
        'billing_contact'       =>  4,
        'main_email'            => 'hurtadoslandscaping@hotmail.com',
        'main_phone'            => '7072261779',
        'starred_by'            ,
        'group_id'             => 2,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => 'mow & blow'          
      ],
      [
        'id'                    => 1054,
        'client_name'           => 'Chef Karen M Hadley',
        'type'                  => 'organization',
        'address'               => '3616 Shelter Creek Drive',
        'city'                  => 'Napa',
        'state'                 => 'CA',
        'zip'                   => '94558',
        'website'               => 'chefkarennapavalley.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'chef-karen-linkedin-banner.jpg',
        'main_contact'          =>  5,
        'billing_contact'       =>  5,
        'main_email'            => 'chefkmhkitchen@comcast.net',
        'main_phone'            => '7072578384',
        'starred_by'            ,
        'group_id'             => 2,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => 'can you smell what the chef is cooking?'          
      ],
      [
        'id'                    => 1055,
        'client_name'           => 'Hearst Hardwood Floors',
        'type'                  => 'organization',
        'address'               => '1758 Industrial Way Ste 212',
        'city'                  => 'Napa',
        'state'                 => 'CA',
        'zip'                   => '94558',
        'website'               => 'hearsthardwoodfloors.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'hearst-hardwood-floors-header.jpg',
        'main_contact'          =>  6,
        'billing_contact'       =>  6,
        'main_email'            => 'trump@aol.com',
        'main_phone'            => '5555551212',
        'starred_by'            ,
        'group_id'             => 1,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => 'Hardwood flooring supplier and contractor'          
      ],
      [
        'id'                    => 1056,
        'client_name'           => 'HI One Sushi',
        'type'                  => 'organization',
        'address'               => '909 Kapiolani Blvd Suite B',
        'city'                  => 'Honolulu',
        'state'                 => 'HI',
        'zip'                   => '96814',
        'website'               => 'hionesushi.808.biz',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'sushiLogo.jpg',
        'main_contact'          =>  7,
        'billing_contact'       =>  7,
        'main_email'            => 'cha@aol.com',
        'main_phone'            => '5555551212',
        'starred_by'            ,
        'group_id'             => 2,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => "Hawaii's Best Sushi in Honolulu"          
      ],
      [
        'id'                    => 1057,
        'client_name'           => 'cadLA',
        'type'                  => 'organization',
        'address'               => '909 Kapiolani Blvd Suite 1901',
        'city'                  => 'Honolulu',
        'state'                 => 'HI',
        'zip'                   => '96814',
        'website'               => 'cadla.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'cadla_logo.png',
        'main_contact'          =>  1,
        'billing_contact'       =>  1,
        'main_email'            => 'info@cadla.com',
        'main_phone'            => '5555551212',
        'starred_by'            ,
        'group_id'             => 5,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => "Hawaii's Best SEO"          
      ],
      [
        'id'                    => 1058,
        'client_name'           => 'Pandora Cafe Honolulu',
        'type'                  => 'organization',
        'address'               => '1526 A Makaloa St',
        'city'                  => 'Honolulu',
        'state'                 => 'HI',
        'zip'                   => '96814',
        'website'               => 'pandoracafehonolulu.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'pch-logo-dark.png',
        'main_contact'          =>  8,
        'billing_contact'       =>  8,
        'main_email'            => 'info@pandoracafehonolulu.com',
        'main_phone'            => '5555551212',
        'starred_by'            ,
        'group_id'             => 3,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => "Hawaii's Best Karaoke"          
      ],
      [
        'id'                    => 1059,
        'client_name'           => 'King Windward Nissan',
        'type'                  => 'organization',
        'address'               => '45-0568 Kamehameha Hwy',
        'city'                  => 'Kaneohe',
        'state'                 => 'HI',
        'zip'                   => '96744',
        'website'               => 'kingwindwardnissan.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => 'KWN_logo.png',
        'main_contact'          =>  1,
        'billing_contact'       =>  1,
        'main_email'            => 'info@pandoracafehonolulu.com',
        'main_phone'            => '5555551212',
        'starred_by'            ,
        'group_id'             => 3,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => "Were lifetime friends"          
      ],
      [
        'id'                    => 1060,
        'client_name'           => '808 BIZ, Inc',
        'type'                  => 'organization',
        'address'               => '45-0568 Kamehameha Hwy',
        'city'                  => 'Kaneohe',
        'state'                 => 'HI',
        'zip'                   => '96744',
        'website'               => '808.biz',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => '808biz_logo.png',
        'main_contact'          =>  1,
        'billing_contact'       =>  1,
        'main_email'            => 'info@pandoracafehonolulu.com',
        'main_phone'            => '5555551212',
        'starred_by'            ,
        'group_id'             => 3,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => "Were lifetime friends"          
      ],
      [
        'id'                    => 1061,
        'client_name'           => '808 Pic',
        'type'                  => 'organization',
        'address'               => '45-0568 Kamehameha Hwy',
        'city'                  => 'Kaneohe',
        'state'                 => 'HI',
        'zip'                   => '96744',
        'website'               => '808pic.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => '808pic_logo.jpg',
        'main_contact'          =>  1,
        'billing_contact'       =>  1,
        'main_email'            => 'info@808pic.com',
        'main_phone'            => '5555551212',
        'starred_by'            ,
        'group_id'             => 3,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => "Were lifetime friends"          
      ],
      [
        'id'                    => 1062,
        'client_name'           => '808 Coupons',
        'type'                  => 'organization',
        'address'               => '45-0568 Kamehameha Hwy',
        'city'                  => 'Kaneohe',
        'state'                 => 'HI',
        'zip'                   => '96744',
        'website'               => '808coupons.com',
        'website_image'         => 'noimage2.webp',
        'client_logo'           => '808coupons_logo.png',
        'main_contact'          =>  1,
        'billing_contact'       =>  1,
        'main_email'            => 'info@808coupons.com',
        'main_phone'            => '5555551212',
        'starred_by'            ,
        'group_id'             => 3,
        'owner_id'              => 1,
        'created_by'            => 1,
        'client_status'         => 1,
        'client_migration_date' => '2023-9-18',
        'tax_id_number'         => null,
        'disable_online_payment'=> 0,
        'notes'                 => "Discounts and deals in HAwaii"          
      ]
    ];

    foreach ($clients as $client) {
      $cm->save($client);
    }       

  }
}
