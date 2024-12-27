<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration


{
    public function up()
    {
        // Création de la table users
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'unique'         => true,
            ],
            'city'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'unique'         => true,
            ],
            'tel'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'unique'         => true,
            ],
            'password'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
         
        ]);

        // Définir la clé primaire
        $this->forge->addPrimaryKey('id');
        
        // Créer la table
        $this->forge->createTable('users');
    }

    public function down()
    {
        // Suppression de la table users
        $this->forge->dropTable('users');
    }
}

