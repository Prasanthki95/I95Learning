<?php

namespace I95Learning\ProductCollection\Block;

class FeaturedProducts extends \Magento\Framework\View\Element\Template
{   
    protected $productCollectionFactory;
    protected $categoryFactory;
    public function __construct(
       \Magento\Framework\View\Element\Template\Context $context,
       \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
       \Magento\Catalog\Model\CategoryFactory $categoryFactory,
       array $data = []
    ){
       $this->productCollectionFactory = $productCollectionFactory;
       $this->categoryFactory = $categoryFactory;
       parent::__construct($context, $data);
    }  
    public function getProductCollection()
    {
        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
           $collection->setPageSize(10);      
    //    foreach ($collection as $product) {
    //     //    print_r($product->getData());
    //    }
        return $collection;
    }
}