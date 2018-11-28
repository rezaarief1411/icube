<?php
namespace Icube\Training\Model;

class Test extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	protected $objectManager;

    const TEST = 'test';
    
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectmanager,
        array $commands = []
    ){
        $this->objectManager = $objectmanager;
        parent::__construct();
    }

    public function execute()
    {
    	$resource = $this->objectManager->get('Magento\Framework\App\ResourceConnection');
	    $connection = $resource->getConnection();    
	    $connection->query("insert into mg2icube_trainee(name,division,created_at) values('asd','TI','2018-09-12 00:00:00')"); 
    }
      
        
}