<?php
namespace Icube\Training\Block\Override;

class Login extends \Magento\Customer\Block\Form\Login
{

	protected function _prepareLayout()
	{
	    $this->pageConfig->getTitle()->set(__('Override Titles'));
	}
	public function getText()
	{
	    return "text_baru";
	}
}