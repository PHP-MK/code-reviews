<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class HiringManagersMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $config = $this->table('hiring_managers');
        $config->addColumn('manager', 'string', array('limit' => 125))
            ->addColumn('manager_email', 'string', array('limit' => 165,'default'=>null,))
            ->addColumn('active', 'integer', array('default'=>0, 'limit' => MysqlAdapter::INT_TINY))
            ->addColumn('created_at', 'timestamp', array())
            ->addColumn('updated_at', 'timestamp', array())
            ->save();
    }
}
