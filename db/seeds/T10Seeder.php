<?php


use Phinx\Seed\AbstractSeed;

class T10Seeder extends AbstractSeed
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

        for ($i = 1; $i <= 10; $i++) { 
            $data[] = ['ID' => $i];
        }

        $t10 = $this->table('t10');
        $t10->truncate();

        $t10->insert($data)->save();
    }
}
