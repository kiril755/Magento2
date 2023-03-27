<?php
namespace Magento\Ui\Component\Form\Element\DataType\Media\OpenDialogUrl;

/**
 * Interceptor class for @see \Magento\Ui\Component\Form\Element\DataType\Media\OpenDialogUrl
 */
class Interceptor extends \Magento\Ui\Component\Form\Element\DataType\Media\OpenDialogUrl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(?string $url = null)
    {
        $this->___init();
        parent::__construct($url);
    }

    /**
     * {@inheritdoc}
     */
    public function get() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get();
    }
}
