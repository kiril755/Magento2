<?php
namespace Task\AdvancedCommentManagement\Model;

use Task\AdvancedCommentManagement\Api\AddCommentAnonInterface;
use Task\ProductCommentModule\Model\ItemFactory;

class AddCommentAnon implements AddCommentAnonInterface
{
    protected $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    public function execute($text, $nickname, $email)
    {
//        $nicknameValue = $this->getRequest()->getParam('nickname');
//        $emailValue = $this->getRequest()->getParam('email');

        $item = $this->itemFactory->create();
        $item->setNickname($nickname);
        $item->setEmail($email);
        $item->setText($text);
        $item->save();

        return 'The comment with this text: ' . $text . ', successfully saved, but not confirm';
    }
}
