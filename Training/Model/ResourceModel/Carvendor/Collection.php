<?php
namespace Icube\Training\Model\ResourceModel\Carvendor;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected function _construct()
	{
		$this->_init('Icube\Training\Model\Carvendor', 'Icube\Training\Model\ResourceModel\Carvendor');
	}
}