<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddQuestions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('questions');


        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => false,
        ]);


        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('survey_id', 'integer');
        $table->addColumn('question_type_id', 'integer');

        $table->create();
    }
}
