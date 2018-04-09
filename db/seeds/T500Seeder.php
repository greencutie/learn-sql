<?php


use Phinx\Seed\AbstractSeed;

class T500Seeder extends AbstractSeed
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

        for ($i = 1; $i <= 500; $i++) { 
            $data[] = ['ID' => $i];
        }

        $t500 = $this->table('t500');
        $t500->truncate();

        $t500->insert($data)->save();
    }
}
