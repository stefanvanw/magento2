<?php
namespace Mageplaza\HelloWorld\Block;

use Ashsmith\Blog\Model\ResourceModel\Post\CollectionFactory;

class Webelephant extends \Magento\Framework\View\Element\Template

{

    protected $_postCollectionFactory;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
                                CollectionFactory $postCollectionFactory)
    {
        $this->_postCollectionFactory = $postCollectionFactory;
        parent::__construct($context);

    }


    public function sayHello()
    {
    $count = 1;
        echo '<div class="wrapper">';

        $posts = $this->_postCollectionFactory->create();
        foreach ($posts as $post) {
            echo '<div class="post"'.$count.'">'  ;
            echo $post->getTitle();
            echo $post->getContent();
            $count++;
        }
        echo '</div>';
    }
}