<?php
namespace Task\AdvancedCommentManagement\Api;

interface AddCommentAdminInterface
{
    /**
     * @param string $text
     * @param string $nickname
     * @param string $email
     * @return string
     */
    public function execute($text, $nickname, $email);
}
