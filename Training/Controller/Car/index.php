<?php

namespace Icube\Training\Controller\Car;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;

class Index extends Action
{
	protected $resultPageFactory;

	public function __construct(
		\Magento\Framework\View\Result\PageFactory $resultPageFactory,
		Context $context
	){
		$this->resultPageFactory = $resultPageFactory;
		parent::__construct($context);
	}	
	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		return $resultPage;
	}
}
