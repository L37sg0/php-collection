<?php

namespace L37sg0\HelloWorld\Setup;

use L37sg0\HelloWorld\Model\PostFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $_postFactory;

    public function __construct(PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
    }

    /**
     * @inheritDoc
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.3.0', '<')) {
            $data = [
                [
                    'name' => 'Post 3',
                    'url_key' => '/post-3',
                    'post_content' => 'Lorem ipsum dol set ma 3 ....',
                    'tags' => 'posts',
                    'status' => 1
                ],
                [
                    'name' => 'Post 4',
                    'url_key' => '/post-4',
                    'post_content' => 'Lorem ipsum dol set ma 4 ....',
                    'tags' => 'posts',
                    'status' => 1
                ]
            ];

            foreach ($data as $row) {
                $post = $this->_postFactory->create();
                $post->addData($row)->save();
            }
        }
    }
}