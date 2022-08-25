<?php
namespace I95Learning\CustomerCollection\Block;
 
use Magento\Framework\View\Element\Template;
 
class Customers extends Template
{
    protected $_customer;
    protected $_customerFactory;
 
    public function __construct(
        Magento\Backend\Block\Template\Context $context,
        \Magento\Customer\Model\CustomerFactory $customerFactory,
        \Magento\Customer\Model\Customer $customers
 
    )
    {
        $this->_customerFactory = $customerFactory;
        $this->_customer = $customers;
        parent::__construct($context);
    }
 
    public function getCustomersCollection() {
        return $this->_customer->getCollection()
            ->addAttributeToSelect("*")
            ->load();
    }
 
    public function getFilteredCustomersCollection() {
        return $this->_customerFactory->create()->getCollection()
                ->addAttributeToSelect("*")
                ->addAttributeToFilter("firstname", array("eq" => "Max"))
            -load();
    }
 
}