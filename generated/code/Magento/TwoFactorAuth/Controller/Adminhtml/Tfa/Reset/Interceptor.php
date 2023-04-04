<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Tfa\Reset;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Tfa\Reset
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Tfa\Reset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\User\Model\ResourceModel\User $userResourceModel, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\User\Model\UserFactory $userFactory)
    {
        $this->___init();
        parent::__construct($context, $userResourceModel, $tfa, $userFactory);
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
