<?php

namespace L37sg0\HelloWorld\Model\ResourceModel\Post;

use L37sg0\HelloWorld\Model\Post;
use L37sg0\HelloWorld\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'post_id';

    protected $_eventPrefix = 'l37sg0_helloworld_post_collection';

    protected $_eventObject = 'post_collection';

    protected function _construct()
    {
        $this->_init(Post::class, PostResourceModel::class);
    }

}