<?php

use Phinx\Migration\AbstractMigration;

class CreateT100Table extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('t100', ['id' => 'ID']);
        $table->create();
    }
}
