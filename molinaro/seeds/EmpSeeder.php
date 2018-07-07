<?php

use Phinx\Seed\AbstractSeed;

class EmpSeeder extends AbstractSeed
{
	public function run()
	{
        $data = [
            [
                'EMPNO' => 7369,
                'ENAME' => 'SMITH',
                'JOB' => 'CLERK',
                'MGR' => 7902,
                'HIREDATE' => date("Y-m-d", strtotime('17-DEC-1980')),
                'SAL' => 800,
                'COMM' => null,
                'DEPTNO' => 20,
            ],
            [
				'EMPNO' => 7499,
				'ENAME' => 'ALLEN',
				'JOB' => 'SALESMAN',
				'MGR' => 7698,
				'HIREDATE' => date("Y-m-d", strtotime('20-FEB-1981')),
				'SAL' => 1600,
				'COMM' => 300,
				'DEPTNO' => 30,
			],
			[
				'EMPNO' => 7521,
				'ENAME' => 'WARD',
				'JOB' => 'SALESMAN',
				'MGR' => 7698,
				'HIREDATE' => date("Y-m-d", strtotime('22-FEB-1981')),
				'SAL' => 1250,
				'COMM' => 500,
				'DEPTNO' => 30,
			],
			[
				'EMPNO' => 7566,
				'ENAME' => 'JONES',
				'JOB' => 'MANAGER',
				'MGR' => 7839,
				'HIREDATE' => date("Y-m-d", strtotime('02-APR-1981')),
				'SAL' => 2975,
				'COMM' => null,
				'DEPTNO' => 20,
			],
			[
				'EMPNO' => 7654,
				'ENAME' => 'MARTIN',
				'JOB' => 'SALESMAN',
				'MGR' => 7698,
				'HIREDATE' => date("Y-m-d", strtotime('28-SEP-1981')),
				'SAL' => 1250,
				'COMM' => 1400,
				'DEPTNO' => 30,
			],
			[
				'EMPNO' => 7698,
				'ENAME' => 'BLAKE',
				'JOB' => 'MANAGER',
				'MGR' => 7839,
				'HIREDATE' => date("Y-m-d", strtotime('01-MAY-1981')),
				'SAL' => 2850,
				'COMM' => null,
				'DEPTNO' => 30,
			],
			[
				'EMPNO' => 7782,
				'ENAME' => 'CLARK',
				'JOB' => 'MANAGER',
				'MGR' => 7839,
				'HIREDATE' => date("Y-m-d", strtotime('09-JUN-1981')),
				'SAL' => 2450,
				'COMM' => null,
				'DEPTNO' => 10,
			],
			[
				'EMPNO' => 7788,
				'ENAME' => 'SCOTT',
				'JOB' => 'ANALYST',
				'MGR' => 7566,
				'HIREDATE' => date("Y-m-d", strtotime('09-DEC-1982')),
				'SAL' => 3000,
				'COMM' => null,
				'DEPTNO' => 20,
			],
			[
				'EMPNO' => 7839,
				'ENAME' => 'KING',
				'JOB' => 'PRESIDENT',
				'MGR' => null,
				'HIREDATE' => date("Y-m-d", strtotime('17-NOV-1981')),
				'SAL' => 5000,
				'COMM' => null,
				'DEPTNO' => 10,
			],
			[
				'EMPNO' => 7844,
				'ENAME' => 'TURNER',
				'JOB' => 'SALESMAN',
				'MGR' => 7698,
				'HIREDATE' => date("Y-m-d", strtotime('08-SEP-1981')),
				'SAL' => 1500,
				'COMM' => 0,
				'DEPTNO' => 30,
			],
			[
				'EMPNO' => 7876,
				'ENAME' => 'ADAMS',
				'JOB' => 'CLERK',
				'MGR' => 7788,
				'HIREDATE' => date("Y-m-d", strtotime('12-JAN-1983')),
				'SAL' => 1100,
				'COMM' => null,
				'DEPTNO' => 20,
			],
			[
				'EMPNO' => 7900,
				'ENAME' => 'JAMES',
				'JOB' => 'CLERK',
				'MGR' => 7698,
				'HIREDATE' => date("Y-m-d", strtotime('03-DEC-1981')),
				'SAL' => 950,
				'COMM' => null,
				'DEPTNO' => 30,
			],
			[
				'EMPNO' => 7902,
				'ENAME' => 'FORD',
				'JOB' => 'ANALYST',
				'MGR' => 7566,
				'HIREDATE' => date("Y-m-d", strtotime('03-DEC-1981')),
				'SAL' => 3000,
				'COMM' => null,
				'DEPTNO' => 20,
			],
			[
				'EMPNO' => 7934,
				'ENAME' => 'MILLER',
				'JOB' => 'CLERK',
				'MGR' => 7782,
				'HIREDATE' => date("Y-m-d", strtotime('23-JAN-1982')),
				'SAL' => 1300,
				'COMM' => null,
				'DEPTNO' => 10,
			],
        ];

		$emp = $this->table('emp');
		$emp->truncate();

		$emp->insert($data)->save();
	}
}
