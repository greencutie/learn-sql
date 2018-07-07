<?php

use Phinx\Migration\AbstractMigration;

class InitSchemaMigration extends AbstractMigration
{
    const DATABASE_NAME = 'test';

    public function up()
    {
        $sql = file_get_contents('beaulieu/learning-sql.sql', true);
        $this->query($sql);
    }

    public function down()
    {
        /* Получаем список всех таблиц из БД*/
        $sql = "
            SELECT GROUP_CONCAT(TABLE_NAME SEPARATOR ', ')
            FROM INFORMATION_SCHEMA.TABLES
            WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA= '" . self::DATABASE_NAME . "'
        ";
        $stmt = $this->query($sql);
        $tableNames = $stmt->fetchAll()[0][0];

        /* Убираем из списка служебную таблицу phinxlog иначе будет ошибка "Table 'test.phinxlog' doesn't exist" */
        $tableNames = str_replace("phinxlog, ", "", $tableNames);

        /* Удаляем все эти таблицы */
        $sql = '
            SET foreign_key_checks = 0;
            DROP TABLE ' . $tableNames . ';
            SET foreign_key_checks = 1;
        ';
        $this->execute($sql);
    }
}
