<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\GetSelected;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\GetSelected
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\GetSelected implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($jsonFactory, $productCollectionFactory, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
