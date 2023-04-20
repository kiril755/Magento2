<?php
namespace Magento\Ui\Controller\Adminhtml\Export\GridToCsv;

/**
 * Interceptor class for @see \Magento\Ui\Controller\Adminhtml\Export\GridToCsv
 */
class Interceptor extends \Magento\Ui\Controller\Adminhtml\Export\GridToCsv implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Model\Export\ConvertToCsv $converter, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, ?\Magento\Ui\Component\MassAction\Filter $filter = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($context, $converter, $fileFactory, $filter, $logger);
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
