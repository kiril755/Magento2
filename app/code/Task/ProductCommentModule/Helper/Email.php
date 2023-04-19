<?php
namespace Task\ProductCommentModule\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Framework\Translate\Inline\StateInterface;
use Magento\Framework\Escaper;
use Magento\Framework\Mail\Template\TransportBuilder;

class Email extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $inlineTranslation;
    protected $escaper;
    protected $transportBuilder;
    protected $logger;

    public function __construct(
        Context $context,
        StateInterface $inlineTranslation,
        Escaper $escaper,
        TransportBuilder $transportBuilder
    ) {
        parent::__construct($context);
        $this->inlineTranslation = $inlineTranslation;
        $this->escaper = $escaper;
        $this->transportBuilder = $transportBuilder;
        $this->logger = $context->getLogger();
    }

    public function sendEmail($newCommentArr, $lastFiveCommentArr)
    {

        try {
            $this->inlineTranslation->suspend();
            $sender = [
                'name' => $this->escaper->escapeHtml('Comment'),
                'email' => $this->escaper->escapeHtml('comment@example.com'),
            ];
            $recipient = 'owner@example.com';

//            $comment = [
//                'newComment'  => $newCommentArr,
//                'lastFiveComment' => $lastFiveCommentArr
//            ];
            $comment = [
                'test' => 'test',
                'newComment'  => $newCommentArr,
                'lastFiveComment' => $lastFiveCommentArr,

            ];
            $postObject = new \Magento\Framework\DataObject();
            $postObject->setData($comment);

            $transport = $this->transportBuilder
                ->setTemplateIdentifier('email_comment')
                ->setTemplateOptions(
                    [
                        'area' => \Magento\Framework\App\Area::AREA_FRONTEND,
                        'store' => \Magento\Store\Model\Store::DEFAULT_STORE_ID,
                    ]
                )
                ->setTemplateVars([
                    'data' => $postObject
                ])
                ->setFrom($sender)
                ->addTo($recipient)
                ->getTransport();
            $transport->sendMessage();
            $this->inlineTranslation->resume();
        } catch (\Exception $e) {
            $this->logger->debug($e->getMessage());
        }
    }
}
