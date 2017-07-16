<?php

use Phinx\Migration\AbstractMigration;

class AuditTrnMigration extends AbstractMigration
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
        $config = $this->table('audit_trn');
        $config->addColumn('timestamp', 'timestamp', array('default' => 'CURRENT_TIMESTAMP'))
            ->addColumn('table', 'string', array('limit' => 20))
            ->addColumn('pkValue', 'string', array('limit' => 20))
            ->addColumn('type', 'string', array('limit' => 20))
            ->addColumn('newValues', 'text', array())
            ->addColumn('oldValues', 'text', array())
            ->addColumn('changedBy', 'string', array('limit' => 20))
            ->addColumn('user_id', 'integer', array())
            ->addIndex(array('table', 'pkValue'), array('unique' => false, 'name'=>'Table Search'))
            ->save();
    }
}
