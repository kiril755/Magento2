<?php

namespace Comment\CommentProductModule\Ui;

class Status implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            ['value' => 'success', 'label' => __('success')],
            ['value' => 'pending', 'label' => __('pending')],
            ['value' => 'reject', 'label' => __('reject')]
        ];
    }
}
