<?php

use Phinx\Migration\AbstractMigration;

class CreateT1Table extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('t1', ['id' => 'ID']);
        $table->create();
    }
}
