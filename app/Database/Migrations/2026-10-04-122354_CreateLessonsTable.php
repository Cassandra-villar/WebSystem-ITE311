<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLessonsTable extends Migration {
    public function up() {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'course_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'title' => ['type' => 'VARCHAR', 'constraint' => 150],
            'content' => ['type' => 'TEXT'],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('lessons');
    }

    public function down() {
        $this->forge->dropTable('lessons');
    }
}