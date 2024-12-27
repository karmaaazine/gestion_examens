<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRolesTable extends Migration
{
    public function up()
    {
        // Création de la table roles
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'role_name'   => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'unique'         => true,
            ],
       
        ]);

        // Définir la clé primaire
        $this->forge->addPrimaryKey('id');
        
        // Créer la table
        $this->forge->createTable('roles');
    }

    public function down()
    {
        // Suppression de la table roles
        $this->forge->dropTable('roles');
    }
}