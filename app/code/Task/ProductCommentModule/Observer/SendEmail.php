<?php
namespace Task\ProductCommentModule\Observer;

use Magento\Framework\Event\ObserverInterface;
use Task\ProductCommentModule\Model\ResourceModel\Item\CollectionFactory;
use Task\ProductCommentModule\Helper\Email;

class SendEmail implements ObserverInterface
{
    private $commentCollectionFactory;

    private $emailHelper;

    public function __construct(CollectionFactory $commentCollectionFactory, Email $emailHelper) {
        $this->commentCollectionFactory = $commentCollectionFactory;
        $this->emailHelper = $emailHelper;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $request = $observer->getEvent()->getObject();

        // get data of last created comment
//        $nickname = $request->getNickname();
//        $email = $request->getEmail();
//        $commentValue = $request->getText();
        $newComment = [
            'nickname' => $request->getNickname(),
            'email' => $request->getEmail(),
            'comment' => $request->getText()
        ];

        // get data of last 4 comment with pending status

        $commentCollection = $this->commentCollectionFactory->create();
        $commentCollection
            ->addFieldToFilter('status', 'pending')
            ->setOrder('create_time', 'desc')
            ->setPageSize(5)
            ->load();
        $lastFiveComment = [];

        foreach ($commentCollection as $comment) {
            $eachComment = [
                'id' => $comment->getId(),
                'nickname' => $comment->getNickname(),
                'email' => $comment->getEmail(),
                'comment' => $comment->getText()
            ];


            array_push($lastFiveComment, $eachComment);
//            $lastFiveComment .= "nickname: " . $comment->getNickname() . "\n"
//                . "email: " . $comment->getEmail() . "\n"
//                . "Comment: " . $comment->getText() . "\n\n";
        }

//        $message = "Please, don't forget to confirm or reject this new comment:\n\n"
//            . "nickname: " . $nickname . "\n"
//            . "email: " . $email . "\n"
//            . "Comment: " . $commentValue . "\n\n\n"
//            . "The last 5 unapproved or unrejected comments:\n\n" . $lastFiveComment;
//        $headers = 'From: ' . $email;

        // transporte builder

        $this->emailHelper->sendEmail($newComment, $lastFiveComment);
//        mail("owner@example.com", "New Comment", $message, $headers);
    }
}
