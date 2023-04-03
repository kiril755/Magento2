<?php
namespace Task\AdvancedCommentManagement\Api;

interface AddCommentAdminInterface
{
    /**
     * @param string $text
     * @return string
     */
    public function execute($text);
}
