<?php

use Phinx\Seed\AbstractSeed;

class T100Seeder extends AbstractSeed
{
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 100; $i++) { 
            $data[] = ['ID' => $i];
        }

        $t100 = $this->table('t100');
        $t100->truncate();

        $t100->insert($data)->save();
    }
}
