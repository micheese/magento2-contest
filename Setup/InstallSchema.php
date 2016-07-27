<?php 

namespace Okalm\Contest \Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        
        $installer = $setup;

        $installer->startSetup();
        
        /**
         * Create okalm_contest_config table
         */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('okalm_contest_config'))
            ->addColumn(
                'id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'ID'
            )
            ->addColumn('rule_id', Table::TYPE_INTEGER, 100, ['nullable' => false])
            ->addColumn('min_order_number', Table::TYPE_INTEGER, 255, ['nullable' => false])
            ->setOption('type', 'InnoDB')
            ->setOption('charset', 'utf8');


        $installer->getConnection()->createTable($table);
        
        $installer->endSetup();
    }

}