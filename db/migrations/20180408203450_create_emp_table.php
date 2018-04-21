<?php

use Phinx\Migration\AbstractMigration;

class CreateEmpTable extends AbstractMigration
{
	/**
	 * Change Method.
	 *
	 * Write your reversible migrations using this method.
	 *
	 * More information on writing migrations is available here:
	 * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
	 *
	 * The following commands can be used in this method and Phinx will
	 * automatically reverse them when rolling back:
	 *
	 *    createTable
	 *    renameTable
	 *    addColumn
	 *    renameColumn
	 *    addIndex
	 *    addForeignKey
	 *
	 * Remember to call "create()" or "update()" and NOT "save()" when working
	 * with the Table class.
	 */
	public function change()
	{
		$table = $this->table('emp', ['id' => 'EMPNO']);
		$table  ->addColumn('ENAME', 'string', ['limit' => 50])
				->addColumn('JOB', 'string', ['limit' => 50])
				->addColumn('MGR', 'integer', ['null' => true])
				->addColumn('HIREDATE', 'date')
				->addColumn('SAL', 'integer')
				->addColumn('COMM', 'integer', ['null' => true])
				->addColumn('DEPTNO', 'integer')
				->create();
	}
}
