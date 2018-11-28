<?php

namespace Icube\Training\Controller\Event;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;

class Index extends Action
{
	protected $traineeFactory;

	public function __construct(
		Context $context,
		\Icube\Training\Model\TraineeFactory $traineeFactory
	){
		$this->traineeFactory = $traineeFactory;
		parent::__construct($context);
	}
	public function execute()
	{
		$eventData = $this->traineeFactory->create();
		$eventData = $eventData->load(0);
		$eventData = $eventData->getData();

		$this->_eventManager->dispatch('icube_training_event_before');
		echo '<br>';
		echo 'Dispatched Event Before';
		echo '<br>';

		$this->_eventManager->dispatch('icube_training_event_after',['eventData'=>$eventData]);
		echo '<br>';
		echo 'Dispatched Event Aftar';
	}
}