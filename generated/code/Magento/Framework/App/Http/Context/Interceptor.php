<?php
namespace Magento\Framework\App\Http\Context;

/**
 * Interceptor class for @see \Magento\Framework\App\Http\Context
 */
class Interceptor extends \Magento\Framework\App\Http\Context implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $data = [], array $default = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($data, $default, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getVaryString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVaryString');
        return $pluginInfo ? $this->___callPlugins('getVaryString', func_get_args(), $pluginInfo) : parent::getVaryString();
    }
}
