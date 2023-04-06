<?php
namespace Magento\Framework\Controller\Result\Raw;

/**
 * Interceptor class for @see \Magento\Framework\Controller\Result\Raw
 */
class Interceptor extends \Magento\Framework\Controller\Result\Raw implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function setContents($contents)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setContents');
        return $pluginInfo ? $this->___callPlugins('setContents', func_get_args(), $pluginInfo) : parent::setContents($contents);
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
