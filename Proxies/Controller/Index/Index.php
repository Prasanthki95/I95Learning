<?php

namespace I95Learning\Proxies\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\Http;
use I95Learning\Proxies\Model\SlowLoading;

class Index extends Action
{
   protected $SlowLoading;
   protected $Http;

    public function __construct(Context $context,Http $Http,
        SlowLoading $SlowLoading
    ){
        $this->Http = $Http;
        $this->SlowLoading = $SlowLoading;
         parent::__construct($context);
    }

     public function execute()
    {
       $id= $this->Http->getParam('id',0);
        if($id==1){
     
         $this->SlowLoading->getValue();
        }
        else{
            echo "not working";
        }
    }

   
}
?>
