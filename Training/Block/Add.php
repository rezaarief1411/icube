<?php

namespace Icube\Training\Block;

class Add extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
       }

    public function getFormAction()
    {
        return '/training/trainee/add';
    }
}