<?php

namespace L37sg0\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    public function sayHello()
    {
        return __('Hello from L37sg0!!');
    }
}