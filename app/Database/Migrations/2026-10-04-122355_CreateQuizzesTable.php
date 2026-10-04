<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuizzesTable extends Migration {
    public function up() {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'lesson_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'question' => ['type' => 'TEXT'],
            'options' => ['type' => 'TEXT'], // Can store JSON-encoded options
            'correct_answer' => ['type' => 'VARCHAR', 'constraint' => 255],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('lesson_id', 'lessons', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('quizzes');
    }

    public function down() {
        $this->forge->dropTable('quizzes');
    }
}