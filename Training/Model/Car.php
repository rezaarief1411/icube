<?php
namespace Icube\Training\Model;

class Car extends \Magento\Framework\Model\AbstractModel implements TraineeInterface,\Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG =  'icube_training_car';

	protected function _construct()
	{
		$this->_init('Icube\Training\Model\ResourceModel\Car');	
	}
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
}