<?php

namespace Feedbackform\Test\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Test extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('feed_data', 'feed_id');
    }
}