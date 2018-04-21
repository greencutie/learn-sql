<?php

use Phinx\Seed\AbstractSeed;

class DeptSeeder extends AbstractSeed
{
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
