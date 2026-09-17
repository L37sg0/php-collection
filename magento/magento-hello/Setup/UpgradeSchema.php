<?php

namespace L37sg0\HelloWorld\Setup;

use L37sg0\HelloWorld\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{

    /**
     * @inheritDoc
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $tableName = PostResourceModel::TABLE_NAME;

        $installer = $setup;

        $installer->startSetup();

        if (
            version_compare($context->getVersion(), '1.2.0', '<')
            && $installer->tableExists($tableName)
        ) {
            $installer->getConnection()->addColumn(
                $installer->getTable($tableName),
                'test_column',
                [
                    'type'      => Table::TYPE_DECIMAL,
                    'nullable'  => true,
                    'length'    => '12,4',
                    'comment'   => 'test',
                    'after'     => 'status'
                ]
            );
        }

        $installer->endSetup();
    }
}