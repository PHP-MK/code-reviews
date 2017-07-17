<?php

use Phinx\Migration\AbstractMigration;

class FormConfigMigrations extends AbstractMigration
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

    /**
     * Migrate Up.
     */
    public function change()
    {
        $config = $this->table('form_configurations');
        $config->addColumn('name', 'string', array('limit' => 45))
            ->addColumn('label', 'text', array())
            ->addColumn('placeholder', 'text', array())
            ->addColumn('tooltip', 'text', array())
            ->addColumn('tooltip_active', 'integer', array('default'=>0))
            ->addColumn('input_filter', 'string', array('limit' => 75))
            ->addColumn('input_type', 'string', array('limit' => 25))
            ->addColumn('data_method', 'string', array('limit' => 65, 'default'=>null))
            ->addColumn('created_at', 'timestamp', array())
            ->addColumn('updated_at', 'timestamp', array())
            ->save();
    }



}
