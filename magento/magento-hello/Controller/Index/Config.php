<?php

namespace L37sg0\HelloWorld\Controller\Index;

use L37sg0\HelloWorld\Helper\Data;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Config extends Action
{
    protected $helperData;

    public function __construct(
        Context $context,
        Data $helperData
    )
    {
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        echo $this->helperData->getGeneralConfig('enable');
        echo "\n";
        echo $this->helperData->getGeneralConfig('display_text');
        exit();
    }
}