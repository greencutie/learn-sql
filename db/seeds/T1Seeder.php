<?php


use Phinx\Seed\AbstractSeed;

class T1Seeder extends AbstractSeed
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
            ['ID' => 1],
        ];

        $t1 = $this->table('t1');
        $t1->truncate();

        $t1->insert($data)->save();
    }
}
