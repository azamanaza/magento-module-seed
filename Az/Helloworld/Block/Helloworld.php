<?php

namespace Az\Helloworld\Block;   

class Helloworld extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt(){ 
        return'Hello world! From Block class'; 
    } 
    
    public function _prepareLayout()
    {  
        return parent::_prepareLayout();
    }
}