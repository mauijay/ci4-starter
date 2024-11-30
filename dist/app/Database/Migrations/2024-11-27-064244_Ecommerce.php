<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ecommerce extends Migration {
  public function up()
  {
    // We aren't actually going to use foreign keys (see below) but it is a good idea to toggle them in your seeder.
    $this->db->disableForeignKeyChecks();

    /* 1. Brands -----------------------------------------------------------------------------------------------  */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'brand_logo' => ['type' => 'VARCHAR', 'constraint' => 100,],
      'brand_logo_alt' => ['type' => 'VARCHAR', 'constraint' => 255,],
      'brand_name' => ['type' => 'VARCHAR', 'constraint' => 100,],
      'brand_slug' => ['type' => 'VARCHAR', 'constraint' => 200,],
      'brand_desc' => ['type' => 'TEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addKey('brand_slug');
    $this->forge->createTable('brands');

    /* 2. Supplier Table ------------------------------------------------------------------------------------------------  */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'name' => ['type' => 'VARCHAR', 'constraint' => 255],
      'contact' => ['type' => 'VARCHAR', 'constraint' => 40],
      'phone' => ['type' => 'VARCHAR', 'constraint' => 15],
      'email' => ['type' => 'VARCHAR', 'constraint' => 55],
      'address' => ['type' => 'TEXT'],
      'description' => ['type' => 'LONGTEXT'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->createTable('suppliers', true);

    /* 3. Products Table ---------------------------------------------------------------------------------------------- */
    $fields = [
      'products_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'product_name' => ['type' => 'VARCHAR', 'constraint' => 100],
      'slug' => ['type' => 'VARCHAR', 'constraint' => 100,],
      'category_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'brand_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'description' => ['type' => 'TEXT', 'null' => true],
      'short_description' => ['type' => 'TEXT', 'null' => true],
      'details' => ['type' => 'TEXT', 'null' => true],
      'note' => ['type' => 'TEXT', 'null' => true],
      'product_image' => ['type' => 'VARCHAR', 'null' => true, 'constraint' => 255],
      'product_img_alt' => ['type' => 'VARCHAR', 'null' => true, 'constraint' => 255],
      'height' => ['type' => 'FLOAT', 'null' => true],
      'width' => ['type' => 'FLOAT', 'null' => true],
      'length' => ['type' => 'FLOAT', 'null' => true],
      'weight' => ['type' => 'FLOAT', 'null' => true],
      'msrp' => ['type' => 'FLOAT'],
      'discount' => ['type' => 'FLOAT'],
      'cost' => ['type' => 'FLOAT'],
      'supplier_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'supplier_item_code' => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
      'sku' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true,],
      'stock' => ['type' => 'INT', 'default' => 1],
      'sold_count' => ['type' => 'INT', 'default' => 0],
      'status' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true, 'default' => 1],
      'featured' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true, 'default' => null],
      'onSale' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true, 'default' => null],
      'stars' => ['type' => 'TINYINT', 'unsigned' => true, 'null' => true, 'default' => 5],
      'last_modified_by' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],  //user id
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('products_id', true);
    $this->forge->addKey(['sku', 'slug', 'name', 'category_id', 'supplier_id']);
    $this->forge->addForeignKey('last_modified_by', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('brand_id', 'brands', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('supplier_id', 'suppliers', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('products', true);

    /* 4. Orders Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'orders_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'payment_type_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'amount' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'default' => 0.00],
      'is_paid' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'status' => ['type' => 'ENUM', 'constraint' => ['pending', 'paid', 'pending payment'], 'default' => 'pending'],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('orders_id', true);
    $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('payment_type_id', 'payment_types', 'types_id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('orders', true);

    /* 5. Order Details Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'detail_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'order_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'product_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'product_price' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'default' => 0.00],
      'order_qty' => ['type' => 'INT', 'unsigned' => true, 'default' => 1],
      'orderdetails_total' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'default' => 0.00],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('detail_id', true);
    $this->forge->addForeignKey('order_id', 'orders', 'orders_id', 'false', 'CASCADE');
    $this->forge->addForeignKey('product_id', 'products', 'products_id', false, 'CASCADE');
    $this->forge->createTable('order_details', true);

    /* 6. Order List Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'list_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true,],
      'sale_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true,],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('list_id', true);
    $this->forge->addForeignKey('user_id', 'users', 'id');
    //$this->forge->addForeignKey('sale_id', 'sale_post', 'id');
    $this->forge->createTable('order_list');

    /* 7. Order Requests Table ------------------------------------------------------------------------------------------ */
    $fields = [
      'req_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'request_description' => ['type' => 'TEXT'],
      'request_total' => ['type' => 'INT'],
      'request_status' => ['type' => 'INT'],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'product_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('req_id', true);
    $this->forge->addKey(['user_id', 'product_id']);
    $this->forge->addForeignKey('user_id', 'users', 'id', false, 'CASCADE');
    $this->forge->addForeignKey('product_id', 'products', 'products_id', false, 'CASCADE');
    $this->forge->createTable('order_requests', true);

    /* 8. Transactions Table -------------------------------------------------------------------------------------------- */
    $fields = [
      't_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'order_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
      'payable_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'payable_type' => ['type' => 'VARCHAR', 'constraint' => 255],
      'amount' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'null' => true],
      'sales_tax' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'null' => true],
      'status' => ['type' => 'VARCHAR', 'constraint' => 10, 'default' => 'pending'],
      'type' => ['type' => 'VARCHAR', 'constraint' => 10], // Payment or Withdrawal... ?? Transfer 🤷🏽
      'description' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('t_id', true);
    $this->forge->addForeignKey('order_id', 'orders', 'orders_id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('transactions');

    /* 9. Shopping Cart Table -------------------------------------------------------------------------------------------- */
    $fields = [
      'sc_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'product_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'quantity' => ['type' => 'INT', 'unsigned' => true, 'default' => 1],
      'price' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'default' => 0.00],
      'discount' => ['type' => 'TINYINT', 'unsigned' => true, 'default' => 0],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('sc_id', true);
    $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('product_id', 'products', 'products_id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('shopping_cart', true);

    /* 10. Wallets Table ----------------------------------------------------------------------------------------------- */
    $fields = [
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'amount' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'default' => 0.00],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('wallets', true);

    /* 11. PayPal Callbacks Table ---------------------------------------------------------------------------------------- */
    $fields = [
      'cb_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'order_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
      'payload_id' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      'pp_order_id' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
      'payer_email' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
      'amount' => ['type' => 'DECIMAL', 'constraint' => '8,2', 'default' => 0.00, 'null' => true],
      'status' => ['type' => 'VARCHAR', 'constraint' => 20],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ];
    $this->forge->addField($fields);
    $this->forge->addKey('cb_id', true);
    $this->forge->addForeignKey('order_id', 'orders', 'orders_id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('paypal_callbacks');

    /* 12. Banners ------------------------------------------------------------ */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true, 'constraint' => 11,],
      'product_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'cover' => ['type' => 'VARCHAR', 'constraint' => 255],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('product_id', 'products', 'products_id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('banners', true);

    /* 13. Product Ratings --------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'product_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'stars' => ['type' => 'INT', 'unsigned' => true],
      'comment' => ['type' => 'TEXT', 'null' => true,],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('product_id', 'products', 'products_id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('product_ratings', true);

    /* 14.Product Cats -------------------------------------------------------- */
    $this->forge->addField([
      'product_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'category_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
    ]);
    $this->forge->addForeignKey('product_id', 'products', 'products_id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('product_categories', true);

    /* 15.Favorite Products --------------------------------------------------- */
    $this->forge->addField([
      'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true,],
      'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'product_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
      'created_at' => ['type' => 'DATETIME', 'null' => true],
      'updated_at' => ['type' => 'DATETIME', 'null' => true],
      'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    $this->forge->addForeignKey('product_id', 'products', 'products_id', 'CASCADE', 'CASCADE');
    $this->forge->createTable('favorite_products', true);

    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }

  public function down()
  {
    $this->db->disableForeignKeyChecks();
    $this->forge->dropTable('favorite_products', true); // 15
    $this->forge->dropTable('product_categories', true);// 14
    $this->forge->dropTable('product_ratings', true);   // 13
    $this->forge->dropTable('banners', true);           // 12
    $this->forge->dropTable('paypal_callbacks', true);  // 11
    $this->forge->dropTable('wallets', true);           // 10
    $this->forge->dropTable('shopping_cart', true);     // 9
    $this->forge->dropTable('transactions', true);      // 8
    $this->forge->dropTable('order_requests', true);    // 7
    $this->forge->dropTable('order_list', true);        // 6
    $this->forge->dropTable('order_details', true);     // 5
    $this->forge->dropTable('orders', true);            // 4
    $this->forge->dropTable('products', true);          // 3
    $this->forge->dropTable('suppliers', true);         // 2    
    $this->forge->dropTable('brands', true);            // 1
    // we must enable the checks now    
    $this->db->enableForeignKeyChecks();
  }
}
