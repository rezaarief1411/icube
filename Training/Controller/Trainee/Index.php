<?php 

namespace Icube\Training\Controller\Trainee;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;

class Index extends Action
{
	protected $resultPageFactory;
	
	public function __construct(
		Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
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
