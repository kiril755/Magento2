<?php
namespace Magento\Framework\Controller\Result\Json;

/**
 * Interceptor class for @see \Magento\Framework\Controller\Result\Json
 */
class Interceptor extends \Magento\Framework\Controller\Result\Json implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Translate\InlineInterface $translateInline, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($translateInline, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($data, $cycleCheck = false, $options = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($data, $cycleCheck, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function setJsonData($jsonData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setJsonData');
        return $pluginInfo ? $this->___callPlugins('setJsonData', func_get_args(), $pluginInfo) : parent::setJsonData($jsonData);
    }

    /**
     * {@inheritdoc}
     */
    public function setHttpResponseCode($httpCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHttpResponseCode');
        return $pluginInfo ? $this->___callPlugins('setHttpResponseCode', func_get_args(), $pluginInfo) : parent::setHttpResponseCode($httpCode);
    }

    /**
     * {@inheritdoc}
     */
    public function setHeader($name, $value, $replace = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHeader');
        return $pluginInfo ? $this->___callPlugins('setHeader', func_get_args(), $pluginInfo) : parent::setHeader($name, $value, $replace);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatusHeader($httpCode, $version = null, $phrase = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatusHeader');
        return $pluginInfo ? $this->___callPlugins('setStatusHeader', func_get_args(), $pluginInfo) : parent::setStatusHeader($httpCode, $version, $phrase);
    }

    /**
     * {@inheritdoc}
     */
    public function renderResult(\Magento\Framework\App\ResponseInterface $response)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderResult');
        return $pluginInfo ? $this->___callPlugins('renderResult', func_get_args(), $pluginInfo) : parent::renderResult($response);
    }
}
