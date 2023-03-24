<?php

namespace Mastering\SampleKirilModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('mastering_sample_kiril_item', 'id');
    }
}
