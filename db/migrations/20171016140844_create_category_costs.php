<?php

use Phinx\Migration\AbstractMigration;

class CreateCategoryCosts extends AbstractMigration
{
    // criar ou alterar algo no banco
    public function up()
    {
        $this->table('category_costs')
            ->addColumn('name', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('update_at', 'datetime')
            ->save();
    }

    // reverter migração, desfaz o que o up faz
    public function down()
    {
        $this->dropTable('category_costs');
    }

}
