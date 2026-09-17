<?php

namespace L37sg0\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Test extends Template
{
    public function sayHello()
    {
        return __('Hello from Test Block!');
    }
}