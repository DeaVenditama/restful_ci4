<?php 
namespace App\Database\Migrations;

class Users extends \CodeIgniter\Database\Migration{

    public function up(){
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'username' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'firstname' => [
                'type' => 'TEXT'
            ],
            'lastname' => [
                'type' => 'TEXT'
            ],
            'address' => [
                'type' => 'TEXT'
            ],
            'age' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
            'password' => [
                'type' => 'TEXT',
            ],
            'salt' => [
                'type' => 'TEXT',
            ],
            'avatar' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'role' => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 1,
            ],
            'created_by' =>[
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_date' =>[
                'type' => 'DATETIME',
            ],
            'updated_by' =>[
                'type' => 'INT',
                'constraint' => 11,
                'null' => TRUE,
            ],
            'updated_date' =>[
                'type' => 'DATETIME',
                'null' => TRUE,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}