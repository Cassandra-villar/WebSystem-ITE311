<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSubmissionsTable extends Migration {
    public function up() {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'quiz_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'user_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'answer' => ['type' => 'TEXT'],
            'score' => ['type' => 'INT', 'constraint' => 5, 'default' => 0],
            'submitted_at' => ['type' => 'DATETIME', 'null' => TRUE],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('quiz_id', 'quizzes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('submissions');
    }

    public function down() {
        $this->forge->dropTable('submissions');
    }
}