<?php

namespace Mastering\SampleKirilModule\Api;

interface ItemRepositoryInterface
{
    /**
     * @return \Mastering\SampleKirilModule\Api\Data\ItemInterface[]
     */
    public function getList();
}
