<?php
namespace Magento\Customer\Model\Metadata\Form;

/**
 * Interceptor class for @see \Magento\Customer\Model\Metadata\Form
 */
class Interceptor extends \Magento\Customer\Model\Metadata\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\CustomerMetadataInterface $customerMetadataService, \Magento\Customer\Api\AddressMetadataInterface $addressMetadataService, \Magento\Customer\Model\Metadata\ElementFactory $elementFactory, \Magento\Framework\App\RequestInterface $httpRequest, \Magento\Framework\Module\Dir\Reader $modulesReader, \Magento\Framework\Validator\ConfigFactory $validatorConfigFactory, $entityType, $formCode, array $attributeValues = [], $ignoreInvisible = true, $filterAttributes = [], $isAjax = false)
    {
        $this->___init();
        parent::__construct($customerMetadataService, $addressMetadataService, $elementFactory, $httpRequest, $modulesReader, $validatorConfigFactory, $entityType, $formCode, $attributeValues, $ignoreInvisible, $filterAttributes, $isAjax);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributes');
        return $pluginInfo ? $this->___callPlugins('getAttributes', func_get_args(), $pluginInfo) : parent::getAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getUserAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUserAttributes');
        return $pluginInfo ? $this->___callPlugins('getUserAttributes', func_get_args(), $pluginInfo) : parent::getUserAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getSystemAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSystemAttributes');
        return $pluginInfo ? $this->___callPlugins('getSystemAttributes', func_get_args(), $pluginInfo) : parent::getSystemAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedAttributes');
        return $pluginInfo ? $this->___callPlugins('getAllowedAttributes', func_get_args(), $pluginInfo) : parent::getAllowedAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function extractData(\Magento\Framework\App\RequestInterface $request, $scope = null, $scopeOnly = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'extractData');
        return $pluginInfo ? $this->___callPlugins('extractData', func_get_args(), $pluginInfo) : parent::extractData($request, $scope, $scopeOnly);
    }

    /**
     * {@inheritdoc}
     */
    public function compactData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'compactData');
        return $pluginInfo ? $this->___callPlugins('compactData', func_get_args(), $pluginInfo) : parent::compactData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function restoreData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'restoreData');
        return $pluginInfo ? $this->___callPlugins('restoreData', func_get_args(), $pluginInfo) : parent::restoreData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareRequest(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareRequest');
        return $pluginInfo ? $this->___callPlugins('prepareRequest', func_get_args(), $pluginInfo) : parent::prepareRequest($data);
    }

    /**
     * {@inheritdoc}
     */
    public function validateData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateData');
        return $pluginInfo ? $this->___callPlugins('validateData', func_get_args(), $pluginInfo) : parent::validateData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function outputData($format = 'text')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'outputData');
        return $pluginInfo ? $this->___callPlugins('outputData', func_get_args(), $pluginInfo) : parent::outputData($format);
    }

    /**
     * {@inheritdoc}
     */
    public function setInvisibleIgnored($ignoreInvisible)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setInvisibleIgnored');
        return $pluginInfo ? $this->___callPlugins('setInvisibleIgnored', func_get_args(), $pluginInfo) : parent::setInvisibleIgnored($ignoreInvisible);
    }
}
