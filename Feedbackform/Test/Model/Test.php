<?php

namespace Feedbackform\Test\Model;
use Magento\Framework\Model\AbstractModel;

class Test extends \Magento\Framework\Model\AbstractModel {

    protected function _construct() {
        $this->_init('Feedbackform\Test\Model\ResourceModel\Test');
    }
}