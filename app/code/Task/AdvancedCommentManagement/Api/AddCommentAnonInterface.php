<?php
namespace Task\AdvancedCommentManagement\Api;

interface AddCommentAnonInterface
{
    /**
     * @param string $text
     * @param string $nickname
     * @param string $email
     * @return string
     */
    public function execute($text, $nickname, $email);
}
