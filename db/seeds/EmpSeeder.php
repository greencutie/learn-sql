<?php


use Phinx\Seed\AbstractSeed;

class EmpSeeder extends AbstractSeed
{
	/**
	 * Run Method.
	 *
	 * Write your database seeder using this method.
	 *
	 * More information on writing seeders is available here:
	 * http://docs.phinx.org/en/latest/seeding.html
	 */
	public function run()
	{
        $data = [
            [
                'EMPNO'    => 7369,
                'ENAME'    => 'SMITH',
                'JOB'    => 'CLERK',
                'MGR'    => 7902,
                'HIREDATE' => date('17-DEC-1980'),
                'SAL'    => 800,
                'COMM'    => null,
                'DEPTNO'    => 20,

            ]
        ];

		$posts = $this->table('emp');
		$posts->truncate();

		$posts->insert($data)
			->save();
	}
}
