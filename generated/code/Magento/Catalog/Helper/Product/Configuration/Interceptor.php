<?php
namespace Magento\Catalog\Helper\Product\Configuration;

/**
 * Interceptor class for @see \Magento\Catalog\Helper\Product\Configuration
 */
class Interceptor extends \Magento\Catalog\Helper\Product\Configuration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Catalog\Model\Product\OptionFactory $productOptionFactory, \Magento\Framework\Filter\FilterManager $filter, \Magento\Framework\Stdlib\StringUtils $string, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($context, $productOptionFactory, $filter, $string, $serializer, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions(\Magento\Catalog\Model\Product\Configuration\Item\ItemInterface $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        return $pluginInfo ? $this->___callPlugins('getOptions', func_get_args(), $pluginInfo) : parent::getOptions($item);
    }
}
