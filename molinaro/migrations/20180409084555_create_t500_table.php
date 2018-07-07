<?php

use Phinx\Migration\AbstractMigration;

class CreateT500Table extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('t500', ['id' => 'ID']);
        $table->create();
    }
}
