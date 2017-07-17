<?php

use Phinx\Migration\AbstractMigration;

class SecurityMenuMigration extends AbstractMigration
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
        $config = $this->table('security_menu');
        $config->addColumn('page_url', 'string', array('limit' => 100))
            ->addColumn('show_in_menu', 'integer', array(/*'limit' => MysqlAdapter::INT_TINY*/))
            ->addColumn('menu_position', 'integer', array(/*'limit' => MysqlAdapter::INT_TINY*/))
            ->addColumn('ip_restricted', 'integer', array(/*'limit' => MysqlAdapter::INT_TINY*/))
            ->addColumn('page_name', 'string', array('limit' => 255))
            ->save();
    }
}
