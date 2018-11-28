<?php

namespace Icube\Training\Controller\Adminhtml\Post;

use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Icube\Training\Model\ResourceModel\Trainee\CollectionFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\ResponseInterface;

class MassUpdate extends \Magento\Backend\App\Action
{
  
    protected $filter;
    protected $collectionFactory;
    protected $_idFieldName;
    public function __construct(Context $context, Filter $filter, CollectionFactory $collectionFactory)
    {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $collectionSize = $collection->getSize();
        $this->_resources = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\App\ResourceConnection');
        $connection= $this->_resources->getConnection();
        foreach ($collection->getAllids() as $id) {
            $sql = "UPDATE mg2icube_trainee SET division='support' WHERE entity_id=".$id;
            $connection->query($sql);
        }
        $this->messageManager->addSuccess(__('A total of %1 element(s) have been updated.', $collectionSize));
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}