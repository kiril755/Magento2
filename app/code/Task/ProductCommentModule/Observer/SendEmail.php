<?php
namespace Task\ProductCommentModule\Observer;

use Magento\Framework\Event\ObserverInterface;

class SendEmail implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $request = $observer->getEvent()->getObject();

        $nickname = $request->getNickname();
        $email = $request->getEmail();
        $comment = $request->getText();

        $message = "Please, don't forget to confirm or reject this comment:\n\n"
            . "nickname: " . $nickname . "\n"
            . "email: " . $email . "\n"
            . "Comment: " . $comment . "\n";
        $headers = 'From: ' . $email;

        mail("owner@example.com", "New Comment", $message, $headers);
    }
}
