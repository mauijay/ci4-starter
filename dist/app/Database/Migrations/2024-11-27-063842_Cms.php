<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cms extends Migration {
  public function up()
  {
    // We aren't actually going to use foreign keys (see below) but it is a good idea to toggle them in your seeder.
    $this->db->disableForeignKeyChecks();

    /* 1. Payment Types Table -------------------------------------------------------------------------------------- */
    $fields = [
      'types_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'types_name' => ['type' => 'VARCHAR', 'constraint' => 15],
      'types_description' => ['type' => 'VARCHAR', 'constraint' => 40, 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('types_id', true);
    $this->forge->createTable('payment_types', true);

    /* 2. lead_source ------------------------------------------------------------------------------------ */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'title' => ['type' => 'VARCHAR', 'constraint' => 100],
      'sort' => ['type' => 'INT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->createTable('lead_sources', true);

    /* 3. lead_status ------------------------------------------------------------------------------------ */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'title' => ['type' => 'VARCHAR', 'constraint' => 100],
      'color' => ['type' => 'VARCHAR', 'constraint' => 10],
      'sort' => ['type' => 'INT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->createTable('lead_statuses', true);

    /* 4. leads ------------------------------------------------------------------------------------ */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'company_name' => ['type' => 'VARCHAR', 'constraint' => 150],
      'first_name' => ['type' => 'VARCHAR', 'constraint' => 50],
      'last_name' => ['type' => 'VARCHAR', 'constraint' => 50],
      'work_phone' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
      'cell_phone' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
      'e_mail' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
      'website' => ['type' => 'VARCHAR', 'constraint' => 120],
      'address' => ['type' => 'TEXT'],
      'city' => ['type' => 'VARCHAR', 'constraint' => 40],
      'state' => ['type' => 'VARCHAR', 'constraint' => 2],
      'zip' => ['type' => 'VARCHAR', 'constraint' => 10],
      'is_lead' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'lead_status_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'lead_source_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'last_lead_status' => ['type' => 'TEXT'],
      'notes' => ['type' => 'TEXT'],
      'files' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('lead_status_id', 'lead_statuses', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('lead_source_id', 'lead_sources', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('leads', true);

    /* 5. Client Groups Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'cg_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'cg_title' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('cg_id', true);
    $this->forge->createTable('client_groups');

    /* 6. Clients Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'client_name' => ['type' => 'VARCHAR', 'constraint' => 150],
      'type' => ['type' => 'ENUM', 'constraint' => ['organization', 'person'], 'default' => 'organization'],
      'address' => ['type' => 'TEXT'],
      'city' => ['type' => 'VARCHAR', 'constraint' => 40],
      'state' => ['type' => 'VARCHAR', 'constraint' => 2],
      'zip' => ['type' => 'VARCHAR', 'constraint' => 10],
      'website' => ['type' => 'TEXT'],
      'website_image' => ['type' => 'TEXT'],
      'client_logo' => ['type' => 'TEXT'],
      'main_contact' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'billing_contact' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'main_email' => ['type' => 'VARCHAR', 'constraint' => 150],
      'main_phone' => ['type' => 'VARCHAR', 'constraint' => 20],
      'starred_by' => ['type' => 'TEXT'],
      'group_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'owner_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'created_by' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'client_status' => ['type' => 'INT', 'constraint' => 2],
      'client_migration_date' => ['type' => 'DATE'],
      'tax_id_number' => ['type' => 'TEXT', 'null' => true],
      'disable_online_payment' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true, 'default' => 0],
      'notes' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
      //"gender SET('male', 'female', 'other') NULL DEFAULT NULL COMMENT 'gender user'",
      //"user_type ENUM('staff', 'client', 'lead') NULL DEFAULT 'client' COMMENT 'User Type'",
      //"id int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1050",
    ];
    $this->forge->addField($fields);
    $this->forge->addPrimaryKey('id');
    $this->forge->addForeignKey('main_contact', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('billing_contact', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('group_id', 'client_groups', 'cg_id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('owner_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('created_by', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('clients');

    /* ALTER TABLE CLIENTS AUTO_INCREMENT=1050;  */
    /* ALTER TABLE `clients` MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1050; */

    /* 7. Clients Contacts ------------------------------------------------------------------------------------------------ */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'firstname' => ['type' => 'VARCHAR', 'constraint' => 50],
      'lastname' => ['type' => 'VARCHAR', 'constraint' => 50],
      'workphone' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
      'cellphone' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
      'mail' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
      'type' => ['type' => 'VARCHAR', 'constraint' => 20],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->createTable('clients_contacts', true);

    /* 8. Client Requests -------------------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true,],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'type' => ['type' => 'VARCHAR', 'constraint' => 25],
      'payload' => ['type' => 'JSON', 'null' => true,],
      'status' => ['type' => 'VARCHAR', 'constraint' => 10, 'default' => 'pending'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('client_id', 'clients', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('client_requests', true);

    /* 9. Advertizements ad_S -------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'id_client' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 1],
      'campaign' => ['type' => 'VARCHAR', 'constraint' => 100],
      'text_ads' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad728x90' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad250x125' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad250x250' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad250x300' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad300x250' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad300x300' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad300x600' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad320x100' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad320x320' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad320x480' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'ad480x60' => ['type' => 'MEDIUMTEXT', 'null' => true],
      'status' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 1],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('id_client', 'clients', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('ad_s', true);

    /* 10. Invoice Settings Table ------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'key' => ['type' => 'VARCHAR', 'constraint' => 100],
      'value' => ['type' => 'TEXT', 'null' => true],
      'position' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
      'header' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);

    $this->forge->createTable('invoice_settings', true);

    /* 11. Invoices Table ----------------------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'website_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'subscription_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'contact_name' => ['type' => 'VARCHAR', 'constraint' => 150],
      'contact_phone' => ['type' => 'VARCHAR', 'constraint' => 150],
      'contact_mail' => ['type' => 'VARCHAR', 'constraint' => 150],
      'description' => ['type' => 'VARCHAR', 'constraint' => 100],
      'notes' => ['type' => 'TEXT', 'null' => true],
      'invoice_date' => ['type' => 'DATE', 'null' => true],
      'paid' => ['type' => 'TINYINT', 'unsigned' => true,],
      'renewed' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true],
      'renew' => ['type' => 'TINYINT', 'unsigned' => true,],
      'renew_interval' => ['type' => 'TINYINT', 'unsigned' => true],
      'amount' => ['type' => 'FLOAT', 'constraint' => 10],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('website_id', 'websites', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('subscription_id', 'subscriptions', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('client_id', 'clients', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('invoices', true);

    /* 12. Invoices Position Table ---------------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'position' => ['type' => 'INT'],
      'invoice_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'title' => ['type' => 'VARCHAR', 'constraint' => 100],
      'description' => ['type' => 'VARCHAR', 'constraint' => 200, 'null' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'price' => ['type' => 'FLOAT', 'constraint' => 11],
      'price_inkl' => ['type' => 'INT', 'constraint' => 2],
      'multiplication' => ['type' => 'FLOAT', 'constraint' => 4],
      'mwst' => ['type' => 'VARCHAR', 'constraint' => 4],
      'unit' => ['type' => 'VARCHAR', 'constraint' => 20],
      'notes' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('invoice_id', 'invoices', 'id', '', 'CASCADE');
    $this->forge->createTable('invoices_position', true);

    /* 13. Projects Table ----------------------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'name' => ['type' => 'VARCHAR', 'constraint' => 100],
      'status' => ['type' => 'TINYINT', 'unsigned' => true,],
      'date_offer' => ['type' => 'DATE', 'null' => true],
      'date_order' => ['type' => 'DATE', 'null' => true],
      'date_finish' => ['type' => 'DATE', 'null' => true],
      'notes' => ['type' => 'VARCHAR', 'constraint' => 255],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('client_id', 'clients', 'id', '', 'CASCADE');
    $this->forge->createTable('projects', true);

    /* 14. Notification Settings ----------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true,],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'email_thread' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'email_post' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'email_post_reply' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'moderation_daily_summary' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'event' => ['type' => 'VARCHAR', 'constraint' => 250],
      'category' => ['type' => 'VARCHAR', 'constraint' => 50],
      'enable_email' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'enable_web' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'enable_slack' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'notify_to_team' => ['type' => 'TEXT'],
      'notify_to_team_members' => ['type' => 'TEXT'],
      'notify_to_terms' => ['type' => 'TEXT'],
      'sort' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'deleted' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addKey('event');
    $this->forge->addForeignKey('user_id', 'users', 'id', '', 'cascade');
    $this->forge->addUniqueKey('user_id');
    $this->forge->createTable('notification_settings', true);

    /* 15. Newsletter Subscribers Table --------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'email' => ['type' => 'VARCHAR', 'constraint' => 100, 'unique' => true,],
      'name' => ['type' => 'VARCHAR', 'constraint' => 50],
      'phone' => ['type' => 'VARCHAR', 'constraint' => 20],
      'campaign' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true,],
      'client' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true,],
      'offer_cta' => ['type' => 'TINYTEXT'],
      'source_url' => ['type' => 'TINYTEXT'],
      'section' => ['type' => 'VARCHAR', 'constraint' => 100],
      'frequency' => ['type' => 'INT', 'constraint' => 7],
      'number_of_news' => ['type' => 'VARCHAR', 'constraint' => 50],
      'payment_status' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true, 'default' => 1],
      'social_share' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true, 'default' => 1],
      'status' => ['type' => 'ENUM', 'constraint' => ['subscribed', 'unsubscribed', 'pending'], 'default' => 'pending',],
      'activation_hash' => ['type' => 'VARCHAR', 'constraint' => 64],
      'is_active' => ['type' => 'BOOLEAN', 'default' => false],
      'subscribed_at' => ['type' => 'DATETIME',],  // created
      'unsubscribed_at' => ['type' => 'DATETIME', 'default' => null],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);

    $this->forge->createTable('subscribers');

    /* 16. Subscription Plans ----------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true,],
      'name' => ['type' => 'VARCHAR', 'constraint' => 100,],
      'description' => ['type' => 'TEXT'],
      'is_active' => ['type' => 'BOOLEAN', 'default' => true],
      'price' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'default' => 0.00],
      'duration' => ['type' => 'INT', 'constraint' => 5, 'default' => 1,],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('subscription_plans', true);

    /* 17. Subscriptions ---------------------------------------------  */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'plan_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'payment_type' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'payment_status' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true, 'default' => '0'],
      'subs_auth_code' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
      'status' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true, 'default' => 'active'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('plan_id', 'subscription_plans', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('client_id', 'clients', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('payment_type', 'payment_types', 'types_id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('subscriptions', true);

    /* 18. Billings -------------------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'subscription_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'valid_from' => ['type' => 'DATETIME'],
      'valid_to' => ['type' => 'DATETIME'],
      'price' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'default' => 0.00],
      'status' => ['type' => 'ENUM', 'constraint' => ['valid', 'invalid', 'cancelled', 'pending', 'expired', 'renewed'], 'default' => 'pending'],
      'description' => ['type' => 'TEXT', 'null' => true],
      'notes' => ['type' => 'TEXT', 'null' => true],
      'renew' => ['type' => 'TINYINT', 'unsigned' => true,],
      'renew_interval' => ['type' => 'INT', 'constraint' => 2],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('client_id', 'clients', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('subscription_id', 'subscriptions', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('billings', true);

    /* 19. Billing Disputes -------------------------------------------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true,],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'subscription_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'issue' => ['type' => 'TEXT'],
      'other_details' => ['type' => 'TEXT'],
      'preferred_resolution' => ['type' => 'VARCHAR', 'constraint' => 25],
      'support_document' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('client_id', 'clients', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('subscription_id', 'subscriptions', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('billing_disputes', true);

    /* 20. Team Table ---------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'title' => ['type' => 'TEXT'],
      'members' => ['type' => 'MEDIUMTEXT'],
      'deleted' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('team', true);

    /* 21. Websites Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'id_project' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'subscription_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'domain_name' => ['type' => 'VARCHAR', 'constraint' => 50],
      'website_url' => ['type' => 'VARCHAR', 'constraint' => 50],
      'website_image' => ['type' => 'TEXT'],
      'website_live' => ['type' => 'DATE', 'null' => true],
      'website_installed' => ['type' => 'DATE', 'null' => true],
      'notes' => ['type' => 'TEXT', 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('client_id', 'clients', 'id', '', 'CASCADE');
    $this->forge->addForeignKey('id_project', 'projects', 'id', '', 'CASCADE');
    $this->forge->createTable('websites');

    /* 22. Website Tags Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'tag_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'id_website' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
    ];
    $this->forge->addField($fields);
    //$this->forge->addKey('tag_id', 'id_website');
    $this->forge->addForeignKey('id_website', 'websites', 'id', '', 'CASCADE');
    $this->forge->addForeignKey('tag_id', 'tags', 'id', '', 'CASCADE');
    $this->forge->createTable('websites_tags');

    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }

  public function down()
  {
    $this->db->disableForeignKeyChecks();

    $this->forge->dropTable('websites_tags', true);         // 22
    $this->forge->dropTable('websites', true);              // 21
    $this->forge->dropTable('team', true);                  // 20
    $this->forge->dropTable('billing_disputes', true);      // 19
    $this->forge->dropTable('billings', true);              // 18
    $this->forge->dropTable('subscriptions', true);         // 17
    $this->forge->dropTable('subscription_plans', true);    // 16
    $this->forge->dropTable('subscribers', true);           // 15
    $this->forge->dropTable('notification_settings', true); // 14
    $this->forge->dropTable('projects', true);              // 13
    $this->forge->dropTable('invoices_position', true);     // 12
    $this->forge->dropTable('invoices', true);              // 11
    $this->forge->dropTable('invoice_settings', true);      // 10    
    $this->forge->dropTable('ad_s', true);                  // 9
    $this->forge->dropTable('client_requests', true);       // 8
    $this->forge->dropTable('clients_contacts', true);      // 7
    $this->forge->dropTable('clients', true);               // 6
    $this->forge->dropTable('client_groups', true);         // 5
    $this->forge->dropTable('leads', true);                 // 4    
    $this->forge->dropTable('lead_statuses', true);         // 3
    $this->forge->dropTable('lead_sources', true);          // 2    
    $this->forge->dropTable('payment_types', true);         // 1

    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }
}
