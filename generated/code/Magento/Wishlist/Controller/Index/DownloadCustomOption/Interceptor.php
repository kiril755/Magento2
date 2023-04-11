<?php
namespace Magento\Wishlist\Controller\Index\DownloadCustomOption;

/**
 * Interceptor class for @see \Magento\Wishlist\Controller\Index\DownloadCustomOption
 */
class Interceptor extends \Magento\Wishlist\Controller\Index\DownloadCustomOption implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileResponseFactory, ?\Magento\Framework\Serialize\Serializer\Json $json = null)
    {
        $this->___init();
        parent::__construct($context, $fileResponseFactory, $json);
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
