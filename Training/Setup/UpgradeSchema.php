<?php
namespace Icube\Training\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;

		$installer->startSetup();

		if(version_compare($context->getVersion(), '1.1.2', '<')) {
			if (!$installer->tableExists('employee')) {
				$table = $installer->getConnection()->newTable(
					$installer->getTable('employee')
				)
					->addColumn(
						'employee_id',
						\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
						null,
						[
							'identity' => true,
							'nullable' => false,
							'primary'  => true,
							'unsigned' => true,
						],
						'Employee Id'
					)
					->addColumn(
						'firsname',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						['nullable => false'],
						'Firstname'
					)
					->addColumn(
						'lastname',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						['nullable => false'],
						'Lastname'
					)
					->addColumn(
						'address',
						\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
						255,
						['nullable => false'],
						'Address'
					)
					->setComment('Post Table');
				$installer->getConnection()->createTable($table);
			}

			$table =$installer->getConnection()->newTable(
	        $installer->getTable('car_vendor')
	        )->addColumn(
	            'car_vendor_id',
	            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
	            null,
	            ['indentity'=> true, 'unsigned'=> true, 'nullable' => false, 'primary' => true],
	            'Car Vendor Id'
	        )->addColumn(
	            'car_vendor_name',
	            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
	            255,
	            [], 
	            'Car Vendor Name'
	        );
	        $installer->getConnection()->createTable($table);


	        $table =$installer->getConnection()->newTable(
	        $installer->getTable('car')
	        )->addColumn(
	            'car_id',
	            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
	            null,
	            ['indentity'=> true, 'unsigned'=> true, 'nullable' => false, 'primary' => true],
	            'Car Id'
	         )->addColumn(
                'car_vendor_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned'=>true, 'nullable'=>false, 'default' => '0'],
                'Car Vendor Id'
            )->addIndex(
                $installer->getIdxName(
                    'car',
                    ['car_vendor_id'],
                    AdapterInterface::INDEX_TYPE_UNIQUE
                ),
                ['car_vendor_id'],
                AdapterInterface::INDEX_TYPE_UNIQUE
	        )->addForeignKey(
	            $installer->getFkName(
	                'car',
	                'car_vendor_id',
	                'car_vendor',
	                'car_vendor_id'
	            ),
	            'car_vendor_id',
	            $installer->getTable('car_vendor'), 
	            'car_vendor_id',
	            \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
	        )->addColumn(
	            'car_name',
	            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
	            null,
	            ['nullable' => true, 'default' => null],
	            'Car Name'
	        );
	        $installer->getConnection()->createTable($table);
		}
		$installer->endSetup();
	}
}