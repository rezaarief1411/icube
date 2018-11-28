<?php
 
namespace Icube\Training\Block;
 
class Car extends \Magento\Framework\View\Element\Template {
 
    protected $carFactory;
    protected $_resource;
     
    public function __construct(
    \Magento\Framework\View\Element\Template\Context $context,
    \Icube\Training\Model\CarFactory $carFactory,
    \Magento\Framework\App\ResourceConnection $Resource
    ) {
        $this->carFactory = $carFactory;
        $this->_resource = $Resource;
        parent::__construct($context);
    }
 
    // protected function _prepareLayout()
    // {
    //     $text = $this->getJoinData();
    //     $this->setText($test);
    // }
     
    // public function _prepareCollection(){
    //     $collection = $this->carFactory->create()->getCollection();
    //     $second_table_name = $this->_resource->getTableName('car_vendor');
         
    //     $collection->getSelect()->joinLeft(array('car_vendor' => $second_table_name),
    //                                            'car.car_vendor_id = car_vendor.car_vendor_id');
    //     // echo $collection->getSelect()->__toString();
    //     $this->setCollection($collection);
    //     return parent::_prepareCollection();
    // }
    
    public function getCarName($id)
    {
        $result = $this->employeeFactory->create();
        $result = $result->load($id);
        return $result->getData('car_name');
    }

    public function getCarCollection()
    {
        $result = $this->carFactory->create();
        $collection = $result->getCollection();
        return $collection;
    }
}