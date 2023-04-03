<?php
namespace Task\AdvancedCommentManagement\Model;

use Magento\Framework\App\Request\Http;
use Magento\Framework\Exception\AuthorizationException;
use Task\AdvancedCommentManagement\Api\AddCommentAdminInterface;

class AddCommentAdmin implements AddCommentAdminInterface
{
    protected $request;

    /**
     * @param Http $request
     */
    public function __construct(Http $request)
    {
        $this->request = $request;
    }

    public function execute($text)
    {
        return  $text;
    }
}
