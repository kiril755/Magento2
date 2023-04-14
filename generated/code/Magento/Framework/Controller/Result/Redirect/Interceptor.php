<?php
namespace Magento\Framework\Controller\Result\Redirect;

/**
 * Interceptor class for @see \Magento\Framework\Controller\Result\Redirect
 */
class Interceptor extends \Magento\Framework\Controller\Result\Redirect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Response\RedirectInterface $redirect, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($redirect, $urlBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function setRefererUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRefererUrl');
        return $pluginInfo ? $this->___callPlugins('setRefererUrl', func_get_args(), $pluginInfo) : parent::setRefererUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function setRefererOrBaseUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRefererOrBaseUrl');
        return $pluginInfo ? $this->___callPlugins('setRefererOrBaseUrl', func_get_args(), $pluginInfo) : parent::setRefererOrBaseUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function setUrl($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUrl');
        return $pluginInfo ? $this->___callPlugins('setUrl', func_get_args(), $pluginInfo) : parent::setUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function setPath($path, array $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPath');
        return $pluginInfo ? $this->___callPlugins('setPath', func_get_args(), $pluginInfo) : parent::setPath($path, $params);
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
