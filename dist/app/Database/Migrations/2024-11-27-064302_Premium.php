<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Premium extends Migration {
  public function up()
  {
    // We aren't actually going to use foreign keys (see below) but it is a good idea to toggle them in your seeder.
    $this->db->disableForeignKeyChecks();

    /* 1. Polling Table --------------------------------------------------------------------------------------- */
    $fields = [
      'poll_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'question' => ['type' => 'VARCHAR', 'constraint' => 255],
      'yes' => ['type' => 'INT', 'constraint' => 7, 'null' => true],
      'no' => ['type' => 'INT', 'constraint' => 7, 'null' => true],
      'no_comment' => ['type' => 'INT', 'constraint' => 7, 'null' => true],
      'status' => ['type' => 'TINYINT', 'unsigned' => true,],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('poll_id', true);
    $this->forge->addUniqueKey('question');
    $this->forge->createTable('pollings', true);

    /* 9. Files Table -------------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'filename' => ['type' => 'VARCHAR', 'constraint' => 255],
      'localname' => ['type' => 'VARCHAR', 'constraint' => 255],
      'clientname' => ['type' => 'VARCHAR', 'constraint' => 255],
      'type' => ['type' => 'VARCHAR', 'constraint' => 255],
      'size' => ['type' => 'INT', 'unsigned' => true],
      'thumbnail' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addUniqueKey('filename');
    $this->forge->addKey('created_at');
    $this->forge->createTable('files');

    /* 6. Members Table ----------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'member_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true,],
      'member_code' => ['type' => 'VARCHAR', 'constraint' => 50],
      'member_name' => ['type' => 'VARCHAR', 'constraint' => 255],
      'member_contact' => ['type' => 'BIGINT'],
      'member_description' => ['type' => 'LONGTEXT', 'null' => true],
      'member_company' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      'member_job' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      'member_discount' => ['type' => 'FLOAT', 'null' => true],
      'member_email' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      'member_status' => ['type' => 'TINYINT', 'unsigned' => true,],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('member_id', 'users', 'id');
    $this->forge->createTable('members', true);

    /** 7. Employees ----------------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'employee_number' => ['type' => 'INT', 'unsigned' => true],
      'first_name' => ['type' => 'VARCHAR', 'constraint' => 50],
      'last_name' => ['type' => 'VARCHAR', 'constraint' => 50],
      'email' => ['type' => 'VARCHAR', 'constraint' => 100],
      'phone' => ['type' => 'VARCHAR', 'constraint' => 15,],
      'address' => ['type' => 'VARCHAR', 'constraint' => 100,],
      'position' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
      'join_date' => ['type' => 'DATE',],
      'salary' => ['type' => 'INT', 'constraint' => 10,],
      'image' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true,],
      'added_by' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('added_by', 'users', 'id');
    $this->forge->createTable('employees', true);

    /* 1. Webinars Table ------------------------------------------------------------------------------------------ */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'name' => ['type' => 'VARCHAR', 'constraint' => 255],
      'webinar_slug' => ['type' => 'VARCHAR', 'constraint' => 255],
      'desc' => ['type' => 'TEXT'],
      'source_person' => ['type' => 'VARCHAR', 'constraint' => 255],
      'date' => ['type' => 'VARCHAR', 'constraint' => 50],
      'time' => ['type' => 'VARCHAR', 'constraint' => 50],
      'cost' => ['type' => 'VARCHAR', 'constraint' => 50],
      'webinar_media' => ['type' => 'VARCHAR', 'constraint' => 50],
      'poster' => ['type' => 'VARCHAR', 'constraint' => 160],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('webinars');

    /* 2. Faqs Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'question' => ['type' => 'TEXT'],
      'answer' => ['type' => 'TEXT'],
      'faq_cat' => ['type' => 'ENUM', 'constraint' => ['sales', 'net30', 'hosting', 'account'], 'default' => 'sales'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('faqs');

    /* 4. Jobs Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'position' => ['type' => 'VARCHAR', 'constraint' => 64],
      'job_desc' => ['type' => 'TEXT'],
      'hours' => ['type' => 'INT', 'unsigned' => true, 'default' => 1],
      'salary' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'default' => 0.00],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('jobs');

    /* 5. Kbs Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'kb_title' => ['type' => 'TEXT'],
      'kb_body' => ['type' => 'TEXT'],
      'kb_cat' => ['type' => 'ENUM', 'constraint' => ['sales', 'net30', 'hosting'], 'default' => 'sales'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('kbs');

    /* 20. Reviews Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'reviewer_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true,],
      'location' => ['type' => 'VARCHAR', 'constraint' => 40],
      'product_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
      'review_rating' => ['type' => 'ENUM', 'constraint' => ['1 star', '2 stars', '3 stars', '4 stars', '5 stars'], 'default' => '5 stars'],
      'review_body' => ['type' => 'TEXT',],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('reviewer_id', 'users', 'id');
    $this->forge->addForeignKey('product_id', 'products', 'products_id');
    $this->forge->createTable('reviews');

    /* 13. Timetracking Table ------------------------------------------------------------------------------------------ */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'subscription_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'invoices_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'title' => ['type' => 'VARCHAR', 'constraint' => 100],
      'description' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'price' => ['type' => 'FLOAT', 'constraint' => 11],
      'billable' => ['type' => 'INT', 'constraint' => 2],
      'export' => ['type' => 'INT', 'constraint' => 2],
      'time_start' => ['type' => 'DATETIME'],
      'time_end' => ['type' => 'DATETIME'],
      'time_duration' => ['type' => 'FLOAT', 'constraint' => 11],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->createTable('timetracking', true);

    /* xx. Newsletters --------------------------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'newsltr_name' => ['type' => 'VARCHAR', 'constraint' => 50],
      'heading' => ['type' => 'TEXT'],
      'email_subject' => ['type' => 'TEXT'],
      'default_message' => ['type' => 'MEDIUMTEXT'],
      'custom_message' => ['type' => 'MEDIUMTEXT', 'null' => true, 'default' => null],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('newsletters');

    /* xx. Emails ------------------------------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
      'type' => ['type' => 'VARCHAR', 'constraint' => 50],
      'name' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
      'reply_to' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'receiver' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'subject' => ['type' => 'VARCHAR', 'constraint' => 200],
      'TEXT' => ['type' => 'TEXT'],
      'error' => ['type' => 'TEXT', 'null' => true],
      'error_retries' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true],
      'sent_at' => ['type' => 'INT', 'constraint' => 50, 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('mails', true);

    /* xx. Chats ----------------------------------------------------------------------------------------------------------*/
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'user1_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'user2_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'locked' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('user1_id', 'users', 'id', '', 'CASCADE');
    $this->forge->addForeignKey('user2_id', 'users', 'id', '', 'CASCADE');
    $this->forge->createTable('chats', true);

    /* xx. Chat Messages -----------------------------------------------------------------------------------------------*/
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'chat_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'is_read' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true],
      'message' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('chat_id', 'chats', 'id', '', 'CASCADE');
    $this->forge->createTable('messages', true);

    /* xx. Testimonials ----------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'picture' => ['type' => 'VARCHAR', 'constraint' => 255],
      'info' => ['type' => 'TEXT', 'null' => true],
      'users_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'clients_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('users_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('clients_id', 'clients', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('testimonials', true);

    /* xx. Testimonial replies ---------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'testimonial_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'comment' => ['type' => 'TEXT', 'null' => true],
      'users_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('users_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('testimonial_id', 'testimonials', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('testimonial_replies', true);

    /* xx. Portfolio ------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'p_title' => ['type' => 'VARCHAR', 'constraint' => 255],
      'p_info' => ['type' => 'TEXT', 'null' => true],
      'p_image' => ['type' => 'VARCHAR', 'constraint' => 255],
      'p_image_alt' => ['type' => 'TEXT', 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('portofolios', true);

    /* 17. Feedbacks -------------------------------------------------------  */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true,],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'feedback' => ['type' => 'VARCHAR', 'constraint' => 255],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('feedbacks', true);




    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }

  public function down()
  {
    $this->db->disableForeignKeyChecks();

    $this->forge->dropTable('pollings', true);            //1

    $this->forge->dropTable('webinars', true);                // xxx
    $this->forge->dropTable('faqs', true);                    // xxx    
    $this->forge->dropTable('files', true);//9
    $this->forge->dropTable('members', true);//6
    $this->forge->dropTable('employees', true); //7
    $this->forge->dropTable('jobs', true);                    // 4
    $this->forge->dropTable('kbs', true);                     // 5
    $this->forge->dropTable('reviews', true);                   // 20
    $this->forge->dropTable('timetracking', true);            // 13
    $this->forge->dropTable('newsletters', true);
    $this->forge->dropTable('mails', true);
    $this->forge->dropTable('messages', true);
    $this->forge->dropTable('chats', true);
    $this->forge->dropTable('testimonials', true);
    $this->forge->dropTable('testimonial_replies', true);
    $this->forge->dropTable('portofolios', true);
    $this->forge->dropTable('feedbacks', true);
    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }
}
