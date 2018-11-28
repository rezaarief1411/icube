<?php
namespace Icube\Training\Model\ResourceModel\Car;

use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'car_id';

	public function __construct(
		EntityFactoryInterface $entityFactory,
        LoggerInterface $logger,
        FetchStrategyInterface $fetchStrategy,
        ManagerInterface $eventManager,
        StoreManagerInterface $storeManager,
        AdapterInterface $connection = null,
        AbstractDb $resource = null
	){
		$this->_init('Icube\Training\Model\Car', 'Icube\Training\Model\ResourceModel\Car');
		parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
        $this->storeManager = $storeManager;
	}

	protected function _initSelect()
    {
        parent::_initSelect();
 
        $this->getSelect()->joinLeft(
            ['secondTable' => $this->getTable('car_vendor')], //2nd table name by which you want to join mail table
            'main_table.car_vendor_id = secondTable.car_vendor_id', // common column which available in both table 
            '*' // '*' define that you want all column of 2nd table. if you want some particular column then you can define as ['column1','column2']
        );
    }
}
