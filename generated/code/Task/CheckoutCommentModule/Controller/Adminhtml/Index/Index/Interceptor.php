<?php
namespace Task\CheckoutCommentModule\Controller\Adminhtml\Index\Index;

/**
 * Interceptor class for @see \Task\CheckoutCommentModule\Controller\Adminhtml\Index\Index
 */
class Interceptor extends \Task\CheckoutCommentModule\Controller\Adminhtml\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Task\CheckoutCommentModule\Model\ResourceModel\Comment\CollectionFactory $commentCollectionFactory, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $commentCollectionFactory, $jsonFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
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
