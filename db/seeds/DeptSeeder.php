<?php


use Phinx\Seed\AbstractSeed;

class DeptSeeder extends AbstractSeed
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
                'DEPTNO' => 10,
                'DNAME' => 'ACCOUNTING',
                'LOC' => 'NEW YORK',
            ],
            [
                'DEPTNO' => 20,
                'DNAME' => 'RESEARCH',
                'LOC' => 'DALLAS',
            ],
            [
                'DEPTNO' => 30,
                'DNAME' => 'SALES',
                'LOC' => 'CHICAGO',
            ],
            [
                'DEPTNO' => 40,
                'DNAME' => 'OPERATIONS',
                'LOC' => 'BOSTON',
            ],
        ];

        $dept = $this->table('dept');
        $dept->truncate();

        $dept->insert($data)->save();
    }
}
