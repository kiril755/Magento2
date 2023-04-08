<?php
namespace Magento\User\Controller\Adminhtml\Auth\Forgotpassword;

/**
 * Interceptor class for @see \Magento\User\Controller\Adminhtml\Auth\Forgotpassword
 */
class Interceptor extends \Magento\User\Controller\Adminhtml\Auth\Forgotpassword implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\User\Model\UserFactory $userFactory, \Magento\Security\Model\SecurityManager $securityManager, ?\Magento\User\Model\ResourceModel\User\CollectionFactory $userCollectionFactory = null, ?\Magento\Backend\Helper\Data $backendDataHelper = null, ?\Magento\User\Model\Spi\NotificatorInterface $notificator = null)
    {
        $this->___init();
        parent::__construct($context, $userFactory, $securityManager, $userCollectionFactory, $backendDataHelper, $notificator);
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
