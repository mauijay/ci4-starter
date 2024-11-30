<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;


class CategorySeeder extends Seeder
{
    public function run()
    {
      $cm = model('CategoryModel');
      
      $cm->insertBatch([
        [
          'cat_name'  => 'CEO Office Supplies', // 1
          'cat_slug' => 'ceo-office-supplies',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality CEO Office Supplies for the Executive Office.'
        ],
        [
          'cat_name'  => 'Office and Desk Accessories', // 2
          'cat_slug' => 'office-and-desk-accessories',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Office and Desk Accessories for the Executive Office.'
        ],
        [          
          'cat_name'  => 'Coffee & Breakroom Supplies', // 3
          'cat_slug' => 'coffee-and-breakroom-supplies',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Coffee & Breakroom Supplies for the Executive Office.'
        ],
        [
          'cat_name'  => 'Mail Room',  // 4
          'cat_slug' => 'mail-room',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Mail Room for the Executive Office.'
        ],
        [
          'cat_name'  => 'Copy & Print', // 5
          'cat_slug' => 'copy-and-print',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Copy & Print Products for the Executive Office.'
        ],
        [
          'cat_name'  => 'Workplace Signs',  // 6
          'cat_slug' => 'workplace-signs',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Workplace Signs for the Executive Office.'
        ],
        [
          'cat_name'  => 'Documents & Templates',  // 07
          'cat_slug' => 'documents-and-templates',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Documents & Templates for the Executive Office.'
        ],
        [
          'cat_name'  => 'Electronics',  // 08
          'cat_slug' => 'electronics',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Electronics for the Executive Office.'
        ],
        [
          'cat_name'  => 'Technology',  // 09
          'cat_slug' => 'technology',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Technology for the Executive Office.'
        ],
        [
          'cat_name'  => 'Customizable Products',  // 10
          'cat_slug' => 'customizable-products',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Customizable Products for the Executive Office.'
        ],
        [
          'cat_name'  => 'Apparel',  // 11
          'cat_slug' => 'apparel',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Apparel for the Executive Office.'
        ],
        [
          'cat_name'  => 'Mobile Accessories',  // 12
          'cat_slug' => 'mobile-accessories',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Mobile Accessories for the Executive Office.'
        ],
        [
          'cat_name'  => 'Health and Fitness',  // 13
          'cat_slug' => 'health-and-fitness',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Health and Fitness Products for the Executive Office.'
        ],
        [
          'cat_name'  => 'Toys',  // 14
          'cat_slug' => 'toys',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Toys for the Executive Office.'
        ],
        [
          'cat_name'  => 'Gift Baskets',  // 15
          'cat_slug' => 'gift-baskets',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Gift Baskets for the Executive Office.'
        ],
        [
          'cat_name'  => 'Mele Kalikimaka',  // 16
          'cat_slug' => 'mele-kalikimaka',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality ideas and products for Mele Kalikimaka in the Executive Office.'
        ],
        [
          'cat_name'  => 'Wall Art',  // 17
          'cat_slug' => 'wall-art',
          'color'   => 'black',
          'iclass'  => 'fas fa-car',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => 'Quality Wall Art for the Executive Office.'
        ],
        
        // *************************************************BLOG**************************************
        [
          'cat_name'  => 'Sales',  // 18 ****************parent blog 
          'cat_slug' => 'sales',
          'color'   => 'danger',
          'iclass'  => 'fas fa-handshake',
          'cat_img' => '23.jpg',
          'cat_type' => 'blog',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => '808 Business Solution\'s blog of expert inbound sales content for small business in Hawaii with the latest Sales news and advice for running a successful small business in Hawaii.'
        ],
        [
          'cat_name'  => 'Marketing',  // 19  ****************parent blog
          'cat_slug' => 'marketing',
          'color'   => 'orange',
          'iclass'  => 'fas fa-bullseye',
          'cat_img' => '23.jpg',
          'cat_type' => 'blog',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => '808 Business Solution\'s blog of expert marketing content for small business in Hawaii with everything you need to know to master inbound marketing for running a successful small business in Hawaii.'
        ],
        [
          'cat_name'  => 'Service',  // 20 ****************parent blog
          'cat_slug' => 'service',
          'color'   => 'warning',
          'iclass'  => 'fas fa-gift',
          'cat_img' => '23.jpg',
          'cat_type' => 'blog',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => '808 Business Solution\'s blog of expert customer sevice content for small business in Hawaii with the latest Customer Service news and advice for running a successful small business in Hawaii.'
        ],
        [
          'cat_name'  => 'Business',  //  21  ****************parent blog
          'cat_slug' => 'business',
          'color'   => 'success',
          'iclass'  => 'fas fa-shop',
          'cat_img' => '23.jpg',
          'cat_type' => 'blog',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => '808 Business Solution\'s blog of expert business content for small business in Hawaii with the latest Business news and advice for running a successful small business in Hawaii.'
        ],
        [
          'cat_name'  => 'Website',  // 22 ****************parent blog
          'cat_slug' => 'website',
          'color'   => 'info',
          'iclass'  => 'fas fa-computer',
          'cat_img' => '23.jpg',
          'cat_type' => 'blog',
          'cat_status' => 0,
          'parent_id' => null,
          'cat_md' => '808 Business Solution\'s blog of expert website content for small business in Hawaii with the latest Website news and advice for running a successful small business in Hawaii.'
        ],
        // *********************************end blog parents *************************************************

        // ***************************************  subcats  ******************************************************

        // 1 *************** CEO Office Supplies ***********
        [
          'cat_name'  => 'Pencil Case Accessories',
          'cat_slug' => 'pencil-case-accessories',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality Pencil Case Accessories for the Executive Office.'
        ],
        [
          'cat_name'  => 'School Tools & Backpacks',
          'cat_slug' => 'school-tools-and-backpacks',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality School Tools & Backpacks for the Executive Office.'
        ],        
        [
          'cat_name'  => 'Lighting',
          'cat_slug' => 'lighting',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality lights and lighting for the Executive Office.'
        ],
        [
          'cat_name'  => 'Keyboard & Mouse',
          'cat_slug' => 'keyboard-and-mouse',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality Keyboard & Mouse products for the Executive Office.'
        ],
        [
          'cat_name'  => 'Mouse Pads',
          'cat_slug' => 'mouse-pads',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality mouse pads for the Executive Office.'
        ],
        [
          'cat_name'  => 'First Aid',
          'cat_slug' => 'first-aid',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality first aid kits and first aid products for the Executive Office.'
        ],
        [
          'cat_name'  => 'Mugs & Tumblers',
          'cat_slug' => 'mugs-and-tumblers',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality Mugs & Tumblers for the Executive Office.'
        ],
        [
          'cat_name'  => 'Tools',
          'cat_slug' => 'tools',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'High Quality tools for the Executive Home Office.'
        ],
        [
          'cat_name'  => 'Tape & Dispensers',
          'cat_slug' => 'tape-and-dispensers',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality Tape and Tape Dispensers for the Executive Office.'
        ],
        [
          'cat_name'  => 'Decor',
          'cat_slug' => 'office-decor',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality office decor for the Executive Office.'
        ], 
        [
          'cat_name'  => 'Office Kitchen',
          'cat_slug' => 'office-kitchen',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality office kitchen products for the Executive Office.'
        ],
        [
          'cat_name'  => 'Home Office',
          'cat_slug' => 'home-office',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality home office products for the Executive Office.'
        ],
        [
          'cat_name'  => 'Towel Sets',
          'cat_slug' => 'towel-sets',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality Towels and Towel Sets for the Executive Office.'
        ],
        [
          'cat_name'  => 'Tablet Stand',
          'cat_slug' => 'tablet-stand-holder',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 1,
          'cat_md' => 'Quality Tablet Stand products for the Executive Office.'
        ],
        // 2 ******************** Office and Desk Accessories **************************************
        [
          'cat_name'  => 'Calculators',
          'cat_slug' => 'calculators',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality calculators for the Executive Office.'
        ],
        [
          'cat_name'  => 'Scissors',
          'cat_slug' => 'scissors',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality scissors for the Executive Office.'
        ],
        [
          'cat_name'  => 'Sharpeners',
          'cat_slug' => 'sharpeners',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality scissor sharpeners and knife sharpeners for the Executive Office.'
        ],
        [
          'cat_name'  => 'Paper Cutters',
          'cat_slug' => 'paper-cutters',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality paper cutters for the Executive Office.'
        ],
        [
          'cat_name'  => 'Clipboards',
          'cat_slug' => 'clipboards',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality clipboards for the Executive Office.'
        ],
        [
          'cat_name'  => 'Staplers',
          'cat_slug' => 'staplers',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality staplers for the Executive Office.'
        ],
        [
          'cat_name'  => 'Hole Punches',
          'cat_slug' => 'hole-punches',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality hole punches for the Executive Office.'
        ],
        [
          'cat_name'  => 'Paper & Writing supplies',
          'cat_slug' => 'paper-and-writing-supplies',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality Paper & Writing supplies for the Executive Office.'
        ],
        [
          'cat_name'  => 'Sticky Note & Index Cards',
          'cat_slug' => 'sticky-notes-and-index-cards',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality Sticky Note & Index Cards for the Executive Office.'
        ],
        [
          'cat_name'  => 'Envelopes',
          'cat_slug' => 'envelopes',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality envelopes for the Executive Office.'
        ],
        [
          'cat_name'  => 'Highlighters',
          'cat_slug' => 'highlighters',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality highliters for the Executive Office.'
        ],
        [
          'cat_name'  => 'Markers',
          'cat_slug' => 'markers',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality markers for the Executive Office.'
        ],
        [
          'cat_name'  => 'Pens & Pencils',
          'cat_slug' => 'pens-and-pencils',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality pens and pencils for the Executive Office.'
        ],
        [
          'cat_name'  => 'Binders',
          'cat_slug' => 'binders',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 2,
          'cat_md' => 'Quality binders for the Executive Office.'
        ],
         // 3 ********************* Coffee & Breakroom Supplies ***************************************
        [
          'cat_name'  => 'Hawaiian Coffee Packs',
          'cat_slug' => 'hawaiian-coffee-packs',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 3,
          'cat_md' => 'Quality Hawaiian Coffee Packs for the Executive Office.'
        ],
        [
          'cat_name'  => 'Decaf Coffee Packs',
          'cat_slug' => 'decaf-coffee-packs',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 3,
          'cat_md' => 'Quality Decaf Coffee Packs for the Executive Office.'
        ],
        [
          'cat_name'  => 'Sweet Snack Packs',
          'cat_slug' => 'sweet-snack-packs',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 3,
          'cat_md' => 'Quality Sweet Snack Packs for the Executive Office.'
        ],
        [
          'cat_name'  => 'Salty Snack Packs',
          'cat_slug' => 'salty-snack-packs',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 3,
          'cat_md' => 'Quality Salty Snack Packs for the Executive Office.'
        ],
        [
          'cat_name'  => 'Variety Snack Packs',
          'cat_slug' => 'variety-snack-packs',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 3,
          'cat_md' => 'Quality Variety Snack Packs for the Executive Office.'
        ],
        // 4 ******************** Mailroom Supplies ****************************************
        [
          'cat_name'  => 'Sample Mailroom',
          'cat_slug' => 'sample-mail-room',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 4,
          'cat_md' => 'Quality Sample mail room supplies for the Executive Office.'
        ],
        // 5 ******************** Copy & Print *********************************************
        [
          'cat_name'  => 'Business Cards',
          'cat_slug' => 'business-cards',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 5,
          'cat_md' => 'Quality Business Cards for the Executive Office.'
        ],
        [
          'cat_name'  => 'Yard Signs',
          'cat_slug' => 'yard-signs',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 5,
          'cat_md' => 'Quality Yard Signs for the Executive Office.'
        ],
        [
          'cat_name'  => 'Car Door Magnets',
          'cat_slug' => 'car-door-magnets',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 5,
          'cat_md' => 'Quality Car Door Magnets for the Executive Office.'
        ],
        [
          'cat_name'  => 'Brochures and Flyers',
          'cat_slug' => 'brochures-andf-flyers',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 5,
          'cat_md' => 'Quality Brochures and Flyers for the Executive Office.'
        ],
        [
          'cat_name'  => 'Large Format Banners',
          'cat_slug' => 'large-format-banners',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 5,
          'cat_md' => 'Quality large format banners for the Executive Office.'
        ],
        [
          'cat_name'  => 'Large Format Window Prints',
          'cat_slug' => 'large-format-window-prints',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 5,
          'cat_md' => 'Quality large format window prints for the Executive Office.'
        ],
        // 6 ******************** Workplace Signs ******************************************
        [
          'cat_name'  => 'Sample Workplace Sign',
          'cat_slug' => 'sample-sign',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 6,
          'cat_md' => 'Quality workplace signs for the Executive Office.'
        ],
        // 7 ******************** Documents & Templates ************************************
        [
          'cat_name'  => 'Sample Templates',
          'cat_slug' => 'sample-templates',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 7,
          'cat_md' => 'Quality templates Stand for the Executive Office.'
        ],
        // 8 ******************** Electronics **********************************************        
        [
          'cat_name'  => 'Smart Watches',
          'cat_slug' => 'smart-watches',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 8,
          'cat_md' => 'Quality Smart Watches for the Executive Office.'
        ],
        [
          'cat_name'  => 'Drones',
          'cat_slug' => 'drones',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 8,
          'cat_md' => 'Quality drones for the Executive Office.'
        ],
        [
          'cat_name'  => 'Cameras',
          'cat_slug' => 'cameras',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 8,
          'cat_md' => 'Quality cameras for the Executive Office.'
        ],
        [
          'cat_name'  => 'Speakers',
          'cat_slug' => 'speakers',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 8,
          'cat_md' => 'Quality speakers for the Executive Office.'
        ],
        // 9 ******************** Tech ***********************************************
        [
          'cat_name'  => 'Network Routers',
          'cat_slug' => 'network-routers',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 9,
          'cat_md' => 'Quality wifi network routers for the Executive Office.'
        ],
        [
          'cat_name'  => 'NAS Servers',
          'cat_slug' => 'nas-servers',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 9,
          'cat_md' => 'Quality NAS Storage solutions for the Executive Office.'
        ],
        [
          'cat_name'  => 'SD Cards',
          'cat_slug' => 'sd-cards',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 9,
          'cat_md' => 'Quality sd cards for the Executive Office.'
        ],
        // 10 ******************** Customizable Products ******************************
        [
          'cat_name'  => 'Custom Aprons',
          'cat_slug' => 'custom-aprons',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 10,
          'cat_md' => 'Quality Custom Aprons for the Executive Office.'
        ],
        [
          'cat_name'  => 'Custom Shirts',
          'cat_slug' => 'custom-shirts',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 10,
          'cat_md' => 'Quality Custom Shirts for the Executive Office.'
        ],
        [
          'cat_name'  => 'Custom Hoodie',
          'cat_slug' => 'custom-hoodie',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 10,
          'cat_md' => 'Quality Custom Hoodie for the Executive Office.'
        ],
        [
          'cat_name'  => 'Custom Hats & Beanies',
          'cat_slug' => 'custom-hats-and-beanies',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 10,
          'cat_md' => 'Quality Custom Hats & Beanies for the Executive Office.'
        ],
        [
          'cat_name'  => 'Custom Long Sleeves',
          'cat_slug' => 'custom-long-sleeves',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 10,
          'cat_md' => 'Quality Custom Long Sleeves for the Executive Office.'
        ],
        [
          'cat_name'  => 'Custom Embroidery',
          'cat_slug' => 'custom-embroidery',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 10,
          'cat_md' => 'Quality Custom Embroidery for the Executive Office.'
        ],
        [
          'cat_name'  => 'Custom Mugs',
          'cat_slug' => 'custom-mugs',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 10,
          'cat_md' => 'Quality Custom Mugs for the Executive Office.'
        ],
        [
          'cat_name'  => 'Custom Tumblers & Bottles',
          'cat_slug' => 'custom-tumblers-and-custom-bottles',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 10,
          'cat_md' => 'Quality Custom Tumblers and Custom Bottles for the Executive Office.'
        ],
        [
          'cat_name'  => 'Custom Accessories',
          'cat_slug' => 'custom-accessories',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 10,
          'cat_md' => 'Quality Custom Accessories for the Executive Office.'
        ],
        // 11 ******************** Apparel ****************************************
        [
          'cat_name'  => 'Men',
          'cat_slug' => 'men',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 11,
          'cat_md' => 'Quality apparel for men in the Executive Office.'
        ],
        [
          'cat_name'  => 'Women',
          'cat_slug' => 'women',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 11,
          'cat_md' => 'Quality apparel for women in the Executive Office.'
        ],
        [
          'cat_name'  => 'Hats',
          'cat_slug' => 'hats',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 11,
          'cat_md' => 'Quality apparel hats in the Executive Office.'
        ],
        [
          'cat_name'  => 'Beanies',
          'cat_slug' => 'beanies',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 11,
          'cat_md' => 'Quality apparel beaniesin the Executive Office.'
        ],
        // 12 ******************** Mobile Accessories ****************************************
        [
          'cat_name'  => 'Chargers & Cables',
          'cat_slug' => 'chargers-and-cables',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 12,
          'cat_md' => 'Quality Chargers & Cables for the Executive Office.'
        ],
        [
          'cat_name'  => 'Phone Cases',
          'cat_slug' => 'phone-cases',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 12,
          'cat_md' => 'Quality Phone Cases for the Executive Office.'
        ],
        [
          'cat_name'  => 'Screen Protector',
          'cat_slug' => 'screen-protector',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 12,
          'cat_md' => 'Quality Screen Protector for the Executive Office.'
        ],
        [
          'cat_name'  => 'Headphones & Accessories',
          'cat_slug' => 'headphones-and-accessories',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 12,
          'cat_md' => 'Quality Headphones & Accessories for the Executive Office.'
        ],      
        [
          'cat_name'  => 'Car Phone Holders',
          'cat_slug' => 'car-mounts-and-holders',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 12,
          'cat_md' => 'Quality Car Phone Holders for the Executive Office.'
        ],
        // 13 ******************** Health and Fitness ***********************************
        [
          'cat_name'  => 'Sample Health and Fitness',
          'cat_slug' => 'sample-health-and-fitness',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 13,
          'cat_md' => 'Quality health and fitness for the Executive Office.'
        ],
        // 14 ******************** Toys *************************************************
        [
          'cat_name'  => 'Adult Toys',
          'cat_slug' => 'grown-ups-toys',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 14,
          'cat_md' => 'Quality toys for the Executive Office.'
        ],
        // 15 ******************** Gift Baskets *****************************************
        [
          'cat_name'  => 'Birthday',
          'cat_slug' => 'birthday-gift-baskets',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 15,
          'cat_md' => 'Quality     for the Executive Office.'
        ],
        [
          'cat_name'  => 'Mele Kalikimaka Basket',
          'cat_slug' => 'mele-kalikimaka-gift-baskets',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 15,
          'cat_md' => 'Quality     for the Executive Office.'
        ],
        [
          'cat_name'  => 'Special Occasion',
          'cat_slug' => 'special-occasion-gift-baskets',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 15,
          'cat_md' => 'Quality     for the Executive Office.'
        ],
        [
          'cat_name'  => 'Gifts For Men',
          'cat_slug' => 'gifts-for-men',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 15,
          'cat_md' => 'Quality     for the Executive Office.'
        ],
        [
          'cat_name'  => 'Gifts For Women',
          'cat_slug' => 'gifts-for-women',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 15,
          'cat_md' => 'Quality     for the Executive Office.'
        ],
        // 16 ******************** Mele Kalikimaka **************************************
        [
          'cat_name'  => 'Sample Mele Kalikimaka',
          'cat_slug' => 'sample-mele-kalikimaka',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 16,
          'cat_md' => 'Quality sample Mele Kalikimaka for the Executive Office.'
        ],
        // 17 ******************** Wall Art *********************************************
        [
          'cat_name'  => 'Sample Wall Art',
          'cat_slug' => 'sample Wall Art',
          'cat_img' => '23.jpg',
          'cat_type' => 'store',
          'cat_status' => 0,
          'parent_id' => 17,
          'cat_md' => 'Quality sample Wall Art for the Executive Office.'
        ],

        // ******************************Blog Kids should be topics, not sub cats************************************************
        
        // 18 sales
        
        // 19 Marketing      
        
        // 20 Service
        
        // 21 Business        
        
        // 22 Website
        
      ]);
    }
}
