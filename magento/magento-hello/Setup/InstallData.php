<?php

namespace L37sg0\HelloWorld\Setup;

use L37sg0\HelloWorld\Model\PostFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $_postFactory;

    public function __construct(PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
    }

    /**
     * @inheritDoc
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            [
                'name'          => 'Post 1',
                'url_key'       => '/post-1',
                'post_content'  => 'Lorem ipsum dol set ma 1 ....',
                'tags'          => 'posts',
                'status'        => 1
            ],
            [
                'name' => 'Post 2',
                'url_key' => '/post-2',
                'post_content' => 'Lorem ipsum dol set ma 2 ....',
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