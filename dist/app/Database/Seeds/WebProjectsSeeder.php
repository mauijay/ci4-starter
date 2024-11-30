<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ProjectModel;
use App\Models\WebsiteModel;

class WebProjectsSeeder extends Seeder
{
  public function run()
  {
    // add projects **********************************
    $pm = model('ProjectModel');  //opportunity to do business
      $projects = [
        [
          'client_id'       =>1052,
          'status'          =>1,
          'name'            =>'Continuous Updates',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'Update calendar as needed'
        ],
        [
          'client_id'       =>1056,
          'status'          =>1,
          'name'            =>'Ohana Hale Waikiki',
          'date_offer'      =>'2023-11-01',
          'date_order'      =>'2023-11-02',
          'date_finish'     =>'',
          'notes'           =>'Create a new website and claim google and yelp pages.  Also set up uber eats and doordash'
        ],
        [
          'client_id'       =>1054,
          'status'          =>1,
          'name'            =>'Makeover adn refresher',
          'date_offer'      =>'2023-11-01',
          'date_order'      =>'2023-11-02',
          'date_finish'     =>'',
          'notes'           =>'Let\'s get some new images'
        ],
        [
          'client_id'       =>1050,
          'status'          =>1,
          'name'            =>'Update Our Website',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'ci4 4.4.3'
        ],
        [
          'client_id'       =>1058,
          'status'          =>1,
          'name'            =>'Create Karaoke Bar Website',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'Karaoke rooms added'
        ],
        [
          'client_id'       =>1051,
          'status'          =>1,
          'name'            =>'Free Update',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'Update to bs5'
        ],
        [
          'client_id'       =>1053,
          'status'          =>1,
          'name'            =>'Free Update',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'Update to bs5'
        ],
        [
          'client_id'       =>1055,
          'status'          =>0,
          'name'            =>'Free Update',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'no contact'
        ],
        [
          'client_id'       =>1057,
          'status'          =>1,
          'name'            =>'SEO tools',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'Update to bs5 and ci4'
        ],
        [
          'client_id'       =>1059,
          'status'          =>1,
          'name'            =>'Free Ad Campaign',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'free ads'
        ],
        [
          'client_id'       =>1060,
          'status'          =>1,
          'name'            =>'Free Update',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'Update to bs5'
        ],
        [
          'client_id'       =>1061,
          'status'          =>1,
          'name'            =>'Free Update',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'Update to bs5'
        ],
        [
          'client_id'       =>1062,
          'status'          =>1,
          'name'            =>'Free Update',
          'date_offer'      =>'2024-08-01',
          'date_order'      =>'2024-08-01',
          'date_finish'     =>'',
          'notes'           =>'Update to bs5'
        ],        
      ];

      foreach ($projects as $project) {
          $pm->save($project);
      }

    // now add some websites **********************************************

    $wm = model('WebsiteModel');
    $websites = [
      [
        'client_id'           =>1052,
        'id_project'          =>1,
        'subscription_id'       => '',
        'domain_name'         =>'frankolivaislandart.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'update as needed'         
      ],
      [
        'client_id'           =>1056,
        'id_project'          =>2,
        'subscription_id'       => '',
        'domain_name'         =>'hionesushi.808.biz',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'add website and yelp'         
      ],
      [
        'client_id'           =>1054,
        'id_project'          =>3,
        'subscription_id'       => '',
        'domain_name'         =>'chefkarennapavalley.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'update website and yelp'         
      ],
      [
        'client_id'           =>1051,
        'id_project'          =>6,
        'subscription_id'       => '',
        'domain_name'         =>'yourlastminutevacationrentals.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'update website'         
      ],
      [
        'client_id'           =>1053,
        'id_project'          =>7,
        'subscription_id'       => '',
        'domain_name'         =>'hurtadoslandscaping.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'unpaid'         
      ],
      [
        'client_id'           =>1055,
        'id_project'          =>8,
        'subscription_id'       => '',
        'domain_name'         =>'wood.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'update website and yelp'         
      ],
      [
        'client_id'           =>1057,
        'id_project'          =>9,
        'subscription_id'       => '',
        'domain_name'         =>'cadla.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'update website and yelp'         
      ],
      [
        'client_id'           =>1058,
        'id_project'          =>5,
        'subscription_id'       => '',
        'domain_name'         =>'pandoracafehonolulu.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'update website and yelp'         
      ],
      [
        'client_id'           =>1060,
        'id_project'          =>11,
        'subscription_id'       => '',
        'domain_name'         =>'808biz.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'update website and yelp'         
      ],
      [
        'client_id'           =>1061,
        'id_project'          =>12,
        'subscription_id'       => '',
        'domain_name'         =>'808pic.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'update website and yelp'         
      ],
      [
        'client_id'           =>1062,
        'id_project'          =>13,
        'subscription_id'       => '',
        'domain_name'         =>'808coupons.com',
        'website_url'       => 'xxx.com',
        'website_image'       =>'noimage2.webp',
        'website_installed'   =>'2023-9-18',
        'website_live'        =>'2023-9-18',
        'notes'               =>'update website and yelp'         
      ]
    ];

    foreach ($websites as $website) {
      $wm->save($website);
    }
    
    // now add some website Tags **********************************************

    // Tag model
    $tag = $this->db->table('tags');
    $tag->select('id');
    $tagid = $tag->get();

    // Websites model
    $website = $this->db->table('websites');
    $website->select('id');
    $webid = $website->get();


    // faker initialize
    // $lm = model('LeadModel');
    $wtm = model('WebsiteTagModel');
    $faker    = \Faker\Factory::create('en_US');

    
        
    for ($i = 1; $i < 5 ; $i++) {
        $tid = $faker->randomElement($tagid->getResultArray());
        $wid = $faker->randomElement($webid->getResultArray());

        $wtm->save([
            'tag_id'     => $tid,
            'id_website' => $wid 
        ]);
    }
  }
}


      
      
      
      
      
      
      
      
