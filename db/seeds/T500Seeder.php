<?php

use Phinx\Seed\AbstractSeed;

class T500Seeder extends AbstractSeed
{
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 500; $i++) { 
            $data[] = ['ID' => $i];
        }

        $t500 = $this->table('t500');
        $t500->truncate();

        $t500->insert($data)->save();
    }
}
