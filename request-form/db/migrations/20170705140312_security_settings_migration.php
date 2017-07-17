<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class SecuritySettingsMigration extends AbstractMigration
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
        $config = $this->table('security_settings');
        $config->addColumn('setting', 'string', array('limit' => 155))
            ->addColumn('setting_name', 'string', array('limit' => 255))
            ->addColumn('value', 'string', array('limit' => 255))
            ->addColumn('type', 'string', array('limit' => 255))
            ->addColumn('options', 'string', array('limit' => 255))
            ->addColumn('required', 'integer', array('limit' => MysqlAdapter::INT_TINY))
            ->addColumn('tooltip', 'string', array('limit' => 255))
            ->addColumn('order', 'integer', array('limit' => MysqlAdapter::INT_TINY))
            ->addColumn('setting_type', 'string', array('limit' => 255))
            ->save();
    }
}
