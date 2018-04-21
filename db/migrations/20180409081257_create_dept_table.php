<?php

use Phinx\Migration\AbstractMigration;

class CreateDeptTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('dept', ['id' => 'DEPTNO']);
        $table  ->addColumn('DNAME', 'string', ['limit' => 50])
                ->addColumn('LOC', 'string', ['limit' => 50])
                ->create();
    }
}
