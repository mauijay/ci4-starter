<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Samples extends Migration {
  public function up()
  {
    // We aren't actually going to use foreign keys (see below) but it is a good idea to toggle them in your seeder.
    $this->db->disableForeignKeyChecks();

    /* 1. Students Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'student_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'student_user' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'first_name' => ['type' => 'VARCHAR', 'constraint' => 64],
      'last_name' => ['type' => 'VARCHAR', 'constraint' => 64],
      'address' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('student_id', true);
    $this->forge->addForeignKey('student_user', 'users', 'id');
    $this->forge->createTable('students');

    /* 2. books ------------------------------------------------------------------------------------------------------ */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'book_code' => ['type' => 'VARCHAR', 'constraint' => 150],
      'book_stock' => ['type' => 'INT'],
      'book_title' => ['type' => 'VARCHAR', 'constraint' => 255],
      'synopsis' => ['type' => 'TEXT'],
      'category' => ['type' => 'VARCHAR', 'constraint' => 255],
      'writer' => ['type' => 'VARCHAR', 'constraint' => 255],
      'publisher' => ['type' => 'VARCHAR', 'constraint' => 50],
      'publication_year' => ['type' => 'VARCHAR', 'constraint' => 50],
      'book_cover' => ['type' => 'VARCHAR', 'constraint' => 255],
      'book_cover_img_alt' => ['type' => 'VARCHAR', 'constraint' => 255, 'default' => ''],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('books', true);

    /* 3. peminjaman / book loans ------------------------------------------------------------------------------------ */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'loan_code' => ['type' => 'VARCHAR', 'constraint' => 20],
      'book_code' => ['type' => 'VARCHAR', 'constraint' => 150,],
      'userid' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'borrow_date' => ['type' => 'DATE',],
      'return_date' => ['type' => 'DATE',],
      'loan_status' => ['type' => 'INT'],
      /** loan status
       * 1 dikembalikan   / returned
       * 2 dipinjamkan    / lent
       * 3 proses         / process
       * 0 ditolak        / rejected 
       **/
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('userid', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('loans', true);



    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }

  public function down()
  {
    $this->db->disableForeignKeyChecks();
    $this->forge->dropTable('students', true);        // 1 
    $this->forge->dropTable('books', true);           // 2
    $this->forge->dropTable('loans', true);           // 3    

    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }
}
