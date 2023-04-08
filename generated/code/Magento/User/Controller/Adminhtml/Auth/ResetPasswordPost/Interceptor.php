<?php
namespace Magento\User\Controller\Adminhtml\Auth\ResetPasswordPost;

/**
 * Interceptor class for @see \Magento\User\Controller\Adminhtml\Auth\ResetPasswordPost
 */
class Interceptor extends \Magento\User\Controller\Adminhtml\Auth\ResetPasswordPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\User\Model\UserFactory $userFactory, ?\Magento\Backend\Helper\Data $backendDataHelper = null)
    {
        $this->___init();
        parent::__construct($context, $userFactory, $backendDataHelper);
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
