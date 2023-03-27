<?php
namespace Magento\Integration\Model\IntegrationService;

/**
 * Interceptor class for @see \Magento\Integration\Model\IntegrationService
 */
class Interceptor extends \Magento\Integration\Model\IntegrationService implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Model\IntegrationFactory $integrationFactory, \Magento\Integration\Api\OauthServiceInterface $oauthService)
    {
        $this->___init();
        parent::__construct($integrationFactory, $oauthService);
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $integrationData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($integrationData);
    }

    /**
     * {@inheritdoc}
     */
    public function update(array $integrationData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        return $pluginInfo ? $this->___callPlugins('update', func_get_args(), $pluginInfo) : parent::update($integrationData);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($integrationId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($integrationId);
    }

    /**
     * {@inheritdoc}
     */
    public function get($integrationId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($integrationId);
    }
}
