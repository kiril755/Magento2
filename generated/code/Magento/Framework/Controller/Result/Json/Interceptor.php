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
    public function renderResult(\Magento\Framework\App\ResponseInterface $response)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderResult');
        return $pluginInfo ? $this->___callPlugins('renderResult', func_get_args(), $pluginInfo) : parent::renderResult($response);
    }
}
