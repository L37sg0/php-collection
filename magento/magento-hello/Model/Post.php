<?php

namespace L37sg0\HelloWorld\Model;

use L37sg0\HelloWorld\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements IdentityInterface
{

    public const CACHE_TAG = PostResourceModel::TABLE_NAME;

    protected $_cacheTag = self::CACHE_TAG;

    protected $_eventPrefix = self::CACHE_TAG;

    public function _construct()
    {
        $this->_init(PostResourceModel::class);
    }

    /**
     * @inheritDoc
     */
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