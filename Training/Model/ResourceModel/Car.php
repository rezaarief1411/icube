<?php
namespace Icube\Training\Model\ResourceModel;

class Car extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
	{
		$this->_init('car','car_id');
	}
}