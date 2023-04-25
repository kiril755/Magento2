<?php

namespace Task\PriceVisibilityRestriction\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class UserRequest extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('user_requests_for_price', 'id');
    }
}
