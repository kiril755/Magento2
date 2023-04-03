<?php
namespace Task\AdvancedCommentManagement\Api;

interface AddCommentAnonInterface
{
    /**
     * @param string $text
     * @return string
     */
    public function execute($text);
}
