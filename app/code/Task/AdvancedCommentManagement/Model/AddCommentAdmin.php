<?php
namespace Task\AdvancedCommentManagement\Model;

use Magento\Framework\App\Request\Http;
use Task\AdvancedCommentManagement\Api\AddCommentAdminInterface;
use Task\ProductCommentModule\Model\ItemFactory;

use Magento\Framework\AuthorizationInterface;

class AddCommentAdmin implements AddCommentAdminInterface
{
    protected $authorization;

    protected $itemFactory;
    public function __construct(ItemFactory $itemFactory, AuthorizationInterface $authorization)
    {
        $this->itemFactory = $itemFactory;
        $this->authorization = $authorization;
    }

    public function execute($text, $nickname, $email)
    {
        if($this->authorization->isAllowed('Magento_Backend::admin')) {
            $item = $this->itemFactory->create();
            $item->setNickname($nickname);
            $item->setEmail($email);
            $item->setText($text);
            $item->setStatus('success');
            $item->save();

            return 'The comment with this text: ' . $text . ', successfully saved, with success status!';
        } else {
            return "you dont have right permission!";
        }
    }
}
