<?php
namespace Icube\Training\Block;
 
class Hello extends \Magento\Framework\View\Element\Template
{
	 public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Icube\Training\Helper\Data $helper) {
        parent::__construct($context);
		$this->helper = $helper;
    }

    public function getHelloWorld()
    {
    	// $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/filename.log');
     //    $logger = new \Zend\Log\Logger();
     //    $logger->addWriter($writer);

     //    $logger->info('your log 1');
     //    $logger->info('your log 2');


        return 'Hello world Icube!';

    }
    public function gethelper(){
    	return $this->helper->getTrainingHelper();
    }
}