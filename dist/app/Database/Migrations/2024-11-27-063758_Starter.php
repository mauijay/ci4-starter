<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Starter extends Migration {
  public function up()
  {
    $this->db->disableForeignKeyChecks();

    /* 1. Categories Table ------------------------------------------------------------------------*/
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'parent_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
      'cat_name' => ['type' => 'VARCHAR', 'constraint' => 100],
      'cat_slug' => ['type' => 'VARCHAR', 'constraint' => 100],
      'color' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
      'iclass' => ['type' => 'TINYTEXT', 'null' => true],
      'cat_img' => ['type' => 'VARCHAR', 'constraint' => 255, 'default' => '23.jpg'],
      'cat_type' => ['type' => 'ENUM', 'constraint' => ['blog', 'store'], 'default' => 'store'],
      'cat_status' => ['type' => 'TINYINT', 'unsigned' => true,],
      'cat_md' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true], //  set to false before going live
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addUniqueKey('cat_name');
    $this->forge->createTable('categories');

    /* 2. Tags Table ------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'tag_name' => ['type' => 'VARCHAR', 'constraint' => 40],
      'class' => ['type' => 'VARCHAR', 'constraint' => 40, 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('tags');

    /* 3. Images Table ------------------------------------------------------------------------------ */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'url' => ['type' => 'VARCHAR', 'constraint' => 255,],
      'alt_text' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      'caption_text' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addKey('created_at');
    $this->forge->createTable('images');

    /* 4. cta offers ---------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'offer_name' => ['type' => 'VARCHAR', 'constraint' => 255],
      'offer_btn_text' => ['type' => 'VARCHAR', 'constraint' => 40],
      'offer_image' => ['type' => 'VARCHAR', 'constraint' => 100],
      'offer_img_alt' => ['type' => 'TINYTEXT'],
      'offer_filename' => ['type' => 'VARCHAR', 'constraint' => 255],
      'offer_desc' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('cta_offers');

    /* 5. Landing Page Templates ----------------------------------------------  */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      't_name' => ['type' => 'VARCHAR', 'constraint' => 100],
      't_body' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('landing_page_templates');

    /* 6. Landing Pages Table ----------------------------------------------  */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true,],
      'lp_name' => ['type' => 'VARCHAR', 'constraint' => 100],
      'lp_title' => ['type' => 'VARCHAR', 'constraint' => 255],
      'lp_slug' => ['type' => 'VARCHAR', 'constraint' => 100],
      'lp_cta' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true,],
      'lp_image' => ['type' => 'VARCHAR', 'constraint' => 100],
      'lp_img_alt' => ['type' => 'TINYTEXT', 'null' => true],
      'lp_favicon' => ['type' => 'VARCHAR', 'constraint' => 100],
      'lp_status' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 1],
      'lp_template' => ['type' => 'VARCHAR', 'constraint' => 100],
      'lp_views' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true, 'default' => 1],
      'lp_clicks' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true, 'default' => 1],
      'id_category' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
      'facebook' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'youtube' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'twitter' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'pinterest' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'phone' => ['type' => 'VARCHAR', 'constraint' => 20],
      'email' => ['type' => 'VARCHAR', 'constraint' => 100],
      'map' => ['type' => 'TINYTEXT', 'null' => true],
      'f_app' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'g_app' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'lp_md' => ['type' => 'TINYTEXT', 'null => true'],
      'lp_key' => ['type' => 'VARCHAR', 'constraint' => 200],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('lp_cta', 'cta_offers', 'id');
    $this->forge->createTable('landing_pages');

    /*  7. Landing Page Tags Table -------------------------------------------------------------- */
    $fields = [
      'tag_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'lp_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
    ];
    $this->forge->addField($fields);
    // $this->forge->addKey('tag_id', 'lp_id');
    $this->forge->addForeignKey('lp_id', 'landing_pages', 'id', '', 'CASCADE');
    $this->forge->addForeignKey('tag_id', 'tags', 'id', '', 'CASCADE');
    $this->forge->createTable('landing_page_tags', true);

    /* 8. Downloads Table ------------------------------------------------------------------------ */
    /*    idea is from javawebmedia */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'category_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'name' => ['type' => 'VARCHAR', 'constraint' => 150],
      'type' => ['type' => 'ENUM', 'constraint' => ['ebook', 'pdf', 'guide']],
      'description' => ['type' => 'TINYTEXT', 'null' => true],
      'image' => ['type' => 'VARCHAR', 'constraint' => 255, 'default' => 'no_image.jpg'],
      'image_alt' => ['type' => 'VARCHAR', 'constraint' => 255],
      'website' => ['type' => 'VARCHAR', 'constraint' => 150],
      'hits' => ['type' => 'INT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addUniqueKey('name');
    $this->forge->createTable('downloads');

    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }

  public function down()
  {
    $this->db->disableForeignKeyChecks();
    $this->forge->dropTable('categories', true);              // 1
    $this->forge->dropTable('tags', true);                    // 2      
    $this->forge->dropTable('images', true);                  // 3
    $this->forge->dropTable('cta_offers', true);              // 4
    $this->forge->dropTable('landing_page_templates', true);  // 5
    $this->forge->dropTable('landing_pages', true);           // 6
    $this->forge->dropTable('landing_page_tags', true);       // 7     
    $this->forge->dropTable('downloads', true);               // 8
    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }
}
