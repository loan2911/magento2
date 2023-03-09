<?php

namespace Robin\Bai2\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $connection = $setup->getConnection();
        $tablelName = $setup->getTable("Banner");
        if ($connection->isTableExists($tablelName) != true) {
            $table = $connection->newTable($tablelName)->addColumn(
                "id",
                Table::TYPE_INTEGER,
                null,
                ["primary" => true, "nullable" => false, "identity" => true]
            )->addColumn(
                "image",
                Table::TYPE_TEXT,
                255,
                ["nullable" => false]
            )->addColumn(
                "link",
                Table::TYPE_TEXT,
                255,
                ["nullable" => false]
            )->setOption("charset", "utf8");

        }
        $connection->createTable($table);
        $setup->endSetup();
    }
}
