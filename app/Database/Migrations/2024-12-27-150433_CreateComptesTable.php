<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateComptesTable extends Migration
{
    public function up()
    {
        // Création de la table comptes
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id'     => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
             'role_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],

        ]);

        // Définir la clé primaire
        $this->forge->addPrimaryKey('id');

        // Ajouter la clé étrangère
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE');

        // Créer la table
        $this->forge->createTable('comptes');
    }

    public function down()
    {
        // Suppression de la table comptes
        $this->forge->dropTable('comptes');
    }
}
