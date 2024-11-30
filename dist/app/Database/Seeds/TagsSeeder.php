<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class TagsSeeder extends Seeder
{
  public function run()
  {
    $tm = model('TagModel');
    $tags = [
      ['tag_name'=>'Office Supplies',     'class'=>'bg-primary rounded-pill'],
      ['tag_name'=>'Workplace Signs',     'class'=>'bg-primary rounded-pill'],
      ['tag_name'=>'Documents',           'class'=>'bg-success rounded-pill'],
      ['tag_name'=>'Electronics',         'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Technology',          'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Mobile Accessories',  'class'=>'bg-primary rounded-pill'],
      ['tag_name'=>'Health and Fitness',  'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Business Templates',  'class'=>'bg-success rounded-pill'],
      ['tag_name'=>'Marketing',           'class'=>'bg-secondary rounded-pill'],
      ['tag_name'=>'Video',               'class'=>'bg-info rounded-pill'],
      ['tag_name'=>'Google Ads',          'class'=>'bg-secondary rounded-pill'],
      ['tag_name'=>'Social Media',        'class'=>'bg-secondary rounded-pill'],
      ['tag_name'=>'Business',            'class'=>'bg-success rounded-pill'],
      ['tag_name'=>'Taxes',               'class'=>'bg-success rounded-pill'],
      ['tag_name'=>'Financial',           'class'=>'bg-success rounded-pill'],
      ['tag_name'=>'Credit',              'class'=>'bg-success rounded-pill'],
      ['tag_name'=>'Graphic Design',      'class'=>'bg-secondary rounded-pill'],
      ['tag_name'=>'Printing Service',    'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Toys',                'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Mele-Kalikimaka',     'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Wall Art',            'class'=>'bg-success rounded-pill'],
      ['tag_name'=>'Web Design',          'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Web Business',        'class'=>'bg-secondary rounded-pill'],
      ['tag_name'=>'Clearance',           'class'=>'bg-danger rounded-pill'],
      ['tag_name'=>'Private Sale',        'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Sports',              'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Politics',            'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Health',              'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Photography',         'class'=>'bg-info rounded-pill'],
      ['tag_name'=>'Karaoke',             'class'=>'bg-info rounded-pill'],
      ['tag_name'=>'Cars',                'class'=>'bg-info rounded-pill'],
      ['tag_name'=>'Military',            'class'=>'bg-info rounded-pill'],
      ['tag_name'=>'Restaraunt',          'class'=>'bg-info rounded-pill'],
      ['tag_name'=>'Sushi',               'class'=>'bg-info rounded-pill'],
      ['tag_name'=>'Hiking',              'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Biking',              'class'=>'bg-dark rounded-pill'],
      ['tag_name'=>'Beach',               'class'=>'bg-dark rounded-pill']    
    ];
  
    foreach($tags as $tag) {
      $tm->insert($tag);
    }              
  }
}
