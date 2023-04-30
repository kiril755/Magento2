<?php

declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Model;

use Magento\Framework\Model\AbstractModel;

class userRequest extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Task\PriceVisibilityRestriction\Model\ResourceModel\UserRequest::class);
    }
}
