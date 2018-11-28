<?php

namespace Icube\Training\Controller\Trainee;

use Magento\Framework\Controller\ResultFactory;

class Add extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Retrieve your form data
            $id = $post['entity_id'];
            $name   = $post['name'];
            $division    = $post['division'];
            $create = $post['created_at'];

            // Doing-something with...
            $this->_resources = \Magento\Framework\App\ObjectManager::getInstance()->get('Magento\Framework\App\ResourceConnection');
            $connection= $this->_resources->getConnection();
            $sql = "INSERT INTO mg2icube_trainee (entity_id, name, division, created_at) VALUES ('".$id."', '".$name."','".$division."','".$create."')";
            $connection->query($sql);

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Add done !');

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/training/trainee/add');

            return $resultRedirect;
        }
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}