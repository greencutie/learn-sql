<?php

use Phinx\Seed\AbstractSeed;

class T1Seeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['ID' => 1],
        ];

        $t1 = $this->table('t1');
        $t1->truncate();

        $t1->insert($data)->save();
    }
}
