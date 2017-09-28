<?php

namespace JRB\CrudModel\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(
    SchemaSetupInterface $setup, ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();

        \Magento\Framework\App\ObjectManager::getInstance()->get('Psr\Log\LoggerInterface')->debug('install schema');

        /**
         * Create table 'employee_details'
         */
        $table = $setup->getConnection()
                        ->newTable($setup->getTable('employee_details'))
                        ->addColumn(
                                'employee_id', \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 'Employee Id'
                        )
                        ->addColumn(
                                'employee_name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, ['nullable' => false, 'default' => ''], 'Employee Name'
                        )
                        ->addColumn(
                                'employee_salary', \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL, '12,4', ['nullable' => false, 'default' => '0.0000'], 'Employee Salary'
                        )
                        ->addColumn(
                                'employee_address', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 255, ['nullable' => false, 'default' => ''], 'Employee Name'
                        )->setComment("Employee details table");
        $setup->getConnection()->createTable($table);

        \Magento\Framework\App\ObjectManager::getInstance()->get('Psr\Log\LoggerInterface')->debug('install schema ends here ');

        $setup->endSetup();
    }

}
