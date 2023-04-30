<?php
declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface
{
    /**
     * @var ResultFactory
     */
    private $resultFactory;

    /**
     * @param ResultFactory $resultFactory
     */
    public function __construct(ResultFactory $resultFactory) {
        $this->resultFactory = $resultFactory;
    }
    /**
     * @return mixed
     */
    public function execute() : mixed
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
