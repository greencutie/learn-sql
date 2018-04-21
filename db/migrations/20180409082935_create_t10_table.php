<?php

use Phinx\Migration\AbstractMigration;

class CreateT10Table extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('t10', ['id' => 'ID']);
        $table->create();
    }
}
