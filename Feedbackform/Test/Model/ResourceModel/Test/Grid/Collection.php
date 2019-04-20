<?php

namespace Feedbackform\Test\Model\ResourceModel\Test\Grid;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{
    protected function _construct()
    {
        $this->_init('Feedbackform\Test\Model\Test', 'Feedbackform\Test\Model\ResourceModel\Test\Grid');
    }
}
