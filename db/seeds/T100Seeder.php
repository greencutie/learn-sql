<?php


use Phinx\Seed\AbstractSeed;

class T100Seeder extends AbstractSeed
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
        $data = [];

        for ($i = 1; $i <= 100; $i++) { 
            $data[] = ['ID' => $i];
        }

        $t100 = $this->table('t100');
        $t100->truncate();

        $t100->insert($data)->save();
    }
}
