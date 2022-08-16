<?php
namespace I95Learning\CrudModel\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'i95dev_helloworld_post';

    protected $_cacheTag = 'i95dev_helloworld_post';

    protected $_eventPrefix = 'i95dev_helloworld_post';

    protected function _construct()
    {
        $this->_init('I95Learning\CrudModel\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
