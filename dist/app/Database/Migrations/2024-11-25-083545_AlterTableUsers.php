<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Forge;
use CodeIgniter\Database\Migration;

class AlterTableUsers extends Migration {
  /**
   * @var string[]
   */
  private array $tables;

  public function __construct(?Forge $forge = null)
  {
    parent::__construct($forge);

    /** @var \Config\Auth $authConfig */
    $authConfig   = config('Auth');
    $this->tables = $authConfig->tables;
  }

  public function up()
  {
    // add new identity info
    $fields = [
      'first_name' => ['type' => 'VARCHAR', 'constraint' => 50, 'after' => 'username'],
      'last_name' => ['type' => 'VARCHAR', 'constraint' => 50, 'after' => 'first_name'],
      'dob' => ['type' => 'DATE', 'null' => true, 'default' => NULL, 'after' => 'last_name'],
      'client_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true, 'after' => 'dob'],
      'address' => ['type' => 'TEXT', 'null' => true, 'after' => 'client_id'],
      'alternative_address' => ['type' => 'TEXT', 'null' => true, 'after' => 'address'],
      'city' => ['type' => 'VARCHAR', 'constraint' => 20, 'after' => 'alternative_address'],
      'state' => ['type' => 'VARCHAR', 'constraint' => 2, 'after' => 'city'],
      'zip' => ['type' => 'VARCHAR', 'constraint' => 10, 'after' => 'state'],
      'company' => ['type' => 'VARCHAR', 'constraint' => 100, 'after' => 'zip'],
      'description' => ['type' => 'TEXT', 'after' => 'company'],
      'avatar' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true, 'after' => 'description'],
      'image' => ['type' => 'TEXT', 'after' => 'avatar'],
      'phone' => ['type' => 'VARCHAR', 'constraint' => 20, 'default' => NULL, 'after' => 'image'],
      'mobile_number' => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true, 'after' => 'phone'],
      'message_checked_at' => ['type' => 'DATETIME', 'null' => true, 'after' => 'mobile_number'],
      'notification_checked_at' => ['type' => 'DATETIME', 'null' => true, 'default' => NULL, 'after' => 'message_checked_at'],
      'job_title' => ['type' => 'VARCHAR', 'constraint' => 100, 'default' => 'Untitled', 'after' => 'notification_checked_at'],
      'user_type' => ['type' => 'ENUM', 'constraint' => ['client', 'lead', 'staff'], 'default' => 'lead', 'after' => 'job_title'],
      'note' => ['type' => 'MEDIUMTEXT', 'null' => true, 'after' => 'user_type'],
      'sticky_note' => ['type' => 'MEDIUMTEXT', 'null' => true, 'after' => 'note'],
      'enable_web_notification' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0, 'after' => 'sticky_note'],
      'enable_email_notification' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0, 'after' => 'enable_web_notification'],
      'requested_account_removal' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0, 'after' => 'enable_email_notification'],
      'whatsapp' => ['type' => 'TINYTEXT', 'null' => true, 'after' => 'requested_account_removal'],
      'instagram' => ['type' => 'TINYTEXT', 'null' => true, 'after' => 'whatsapp'],
      'facebook' => ['type' => 'TINYTEXT', 'null' => true, 'after' => 'instagram'],
      'twitter' => ['type' => 'TINYTEXT', 'null' => true, 'after' => 'facebook'],
      'linked_in' => ['type' => 'TINYTEXT', 'null' => true, 'after' => 'twitter'],
      'skype' => ['type' => 'TINYTEXT', 'null' => true, 'after' => 'linked_in'],
      'tiktok' => ['type' => 'TINYTEXT', 'null' => true, 'after' => 'skype']
    ];

    $this->forge->addColumn($this->tables['users'], $fields);
  }

  public function down()
  {
    // drop new columns
    $fields = [
      'first_name',
      'last_name',
      'dob',
      'address',
      'alternative_address',
      'city',
      'state',
      'zip',
      'company',
      'description',
      'avatar',
      'image',
      'phone',
      'mobile_number',
      'message_checked_at',
      'notification_checked_at',
      'job_title',
      'user_type',
      'note',
      'sticky_note',
      'enable_web_notification',
      'enable_email_notification',
      'requested_account_removal',
      'whatsapp',
      'instagram',
      'facebook',
      'twitter',
      'linked_in',
      'skype'
    ];
    $this->forge->dropColumn($this->tables['users'], $fields);
  }
}
