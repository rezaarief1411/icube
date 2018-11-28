<?php
namespace Icube\Training\Model;

class Carvendor extends \Magento\Framework\Model\AbstractModel implements TraineeInterface,\Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG =  'icube_training_carvendor';

	protected function _construct()
	{
		$this->_init('Icube\Training\Model\ResourceModel\Carvendor');	
	}
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
}