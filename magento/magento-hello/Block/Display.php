<?php

namespace L37sg0\HelloWorld\Block;

use L37sg0\HelloWorld\Model\PostFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Display extends Template
{
    protected $_postFactory;

    public function __construct(
        Context $context,
        PostFactory $postFactory,
        array $data = []
    )
    {
        $this->_postFactory = $postFactory;
        parent::__construct($context, $data);
    }

    public function sayHello()
    {
        return __("Hello from Display Block!");
    }

    public function getPostCollection() {
        $post = $this->_postFactory->create();
        return $post->getCollection();
    }
}