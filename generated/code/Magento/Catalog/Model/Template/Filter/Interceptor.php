<?php
namespace Magento\Catalog\Model\Template\Filter;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Template\Filter
 */
class Interceptor extends \Magento\Catalog\Model\Template\Filter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Asset\Repository $assetRepo, $variables = [])
    {
        $this->___init();
        parent::__construct($string, $storeManager, $assetRepo, $variables);
    }

    /**
     * {@inheritdoc}
     */
    public function filter($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filter');
        return $pluginInfo ? $this->___callPlugins('filter', func_get_args(), $pluginInfo) : parent::filter($value);
    }
}
