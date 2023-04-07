<?php

namespace Task\AdminManageComment\Model\ResourceModel\Item\Grid;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Psr\Log\LoggerInterface as Logger;
//use Magento\Framework\App\Request\Http;
use Magento\Framework\App\RequestInterface;

class Collection extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult
{
    protected $request;
    public function __construct(
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        RequestInterface $request,
                      $mainTable = 'task_product_comment',
                      $resourceModel = 'Task\AdminManageComment\Model\ResourceModel\Item',
//        Magento\Framework\App\RequestInterface $request,
    ) {
        $this->request = $request;
//        $collection = $this->collectionFactory->create();
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $mainTable,
            $resourceModel
        );

//        $this->addFieldToFilter('status', $this->request->getControllerName());

//        var_dump($this->load());
//        die();
//        isload();
//        $this->isLoaded();
//        if ($this->isLoaded()) {
//            $this->addFieldToFilter('status', $this->request->getControllerName());
//            if ($this->request->getControllerName() === 'success') {
//                $this->addFieldToFilter('status', 'success');
////                $this->load();
//            } elseif ($this->request->getControllerName() === 'pending') {
////                $this->getItems();
////                die();
//                $this->addFieldToFilter('status', 'pending');
////                $this->load();
//            } elseif ($this->request->getControllerName() === 'reject') {
////                return $this->getItemsByColumnValue('status', 'reject');
////                die();
//                $this->addFieldToFilter('status', 'reject');
////                $this->load();
//            }
//        }


//        $this->load();
//        return $this;
    }
}
