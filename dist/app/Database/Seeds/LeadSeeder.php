<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\LeadModel;
use App\Models\LeadSourceModel;
use App\Models\LeadStatusModel;

class LeadSeeder extends Seeder
{
  public function run()
  {
    

    // add lead source  **********************************

    $lsm = model('LeadSourceModel');

      $sources = [
        [
          'title'     => 'Google',
          'sort'      => 1,
        ],
        [
          'title'     => 'Facebook',
          'sort'      => 2,
        ],
        [
          'title'     => 'Twitter',
          'sort'      => 3,
        ],
        [
          'title'     => 'YouTube',
          'sort'      => 4,
        ],
        [
          'title'     => 'Radio',
          'sort'      => 5,
        ],
        [
          'title'     => 'Newspaper',
          'sort'      => 6,
        ],
        [
          'title'     => 'Email Blast',
          'sort'      => 7,
        ],
        [
          'title'     => 'Other',
          'sort'      => 8,
        ],
      ];

      foreach ($sources as $source) {
          $lsm->save($source);
      }

    // ************************* add lead status also **********************************

      $sm = model('LeadStatusModel');

      $items = [
        [
          'title'     => 'New',
          'color'     => '#f1c40f',
          'sort'      => 1,
        ],
        [
          'title'     => 'Qualified',
          'color'     => '#2d9cdb',
          'sort'      => 2,
        ],
        [
          'title'     => 'Discussion',
          'color'     => '#29c2c2',
          'sort'      => 3,
        ],
        [
          'title'     => 'Negotiation',
          'color'     => '#2d9cdb',
          'sort'      => 4,
        ],
        [
          'title'     => 'Won',
          'color'     => '#83c340',
          'sort'      => 5,
        ],
        [
          'title'     => 'Lost',
          'color'     => '#e74c3c',
          'sort'      => 6,
        ],
      ];

      foreach ($items as $item) {
          $sm->save($item);
      }

    // ********************  add some leads  ******************************************
    // Lead Source Model
    $leadsource = $this->db->table('lead_sources');
    $leadsource->select('id');
    $lsid = $leadsource->get();

    // Lead Status Model
    $leadstatus = $this->db->table('lead_statuses');
    $leadstatus->select('id');
    $statusid = $leadstatus->get();

    // faker initialize
    $lm = model('LeadModel');
    $faker    = \Faker\Factory::create('en_US');

    
        
    for ($i = 1; $i < 20 ; $i++) {
        $lid = $faker->randomElement($lsid->getResultArray());
        $sid = $faker->randomElement($statusid->getResultArray());

        $lm->save([
            'company_name'          => $faker->Company(),
            'first_name'            => $faker->firstName(),
            'last_name'             => $faker->lastName(),
            'type'                  => 'organization',
            'address'               => $faker->streetAddress(),
            'city'                  => $faker->city(),
            'state'                 => $faker->state(),
            'zip'                   => $faker->postcode(),
            'website'               => 'example.com',  //website
            'work_phone'            => $faker->phoneNumber(),
            'cell_phone'            => $faker->phoneNumber(),
            'e_mail'                => $faker->email(),
            'is_lead'               => 1,
            'lead_status_id'        => $sid,
            'lead_source_id'        => $lid,
            'last_lead_status'      => $faker->realText(50), 
            'notes'                 => $faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2)
        ]);
    }     
  }
}
