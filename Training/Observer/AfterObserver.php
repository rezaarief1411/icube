<?php
namespace Icube\Training\Observer;

use Magento\Framework\Event\ObserverInterface;

class AfterObserver implements ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$data=$observer->getData('eventData');
		var_dump( $data );
	}
}