<?php
namespace Icube\Training\Model\ResourceModel;

class Employee extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
	{
		$this->_init('car_vendor','car_vendor_id');
	}
}