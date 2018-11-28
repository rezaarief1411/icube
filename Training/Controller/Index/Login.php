<?php

namespace Icube\Training\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Login extends Action
{
	protected $resultPageFactory;

	public function __construct(
		PageFactory $resultPageFactory,
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