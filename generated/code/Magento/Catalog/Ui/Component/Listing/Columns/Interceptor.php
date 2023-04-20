<?php
namespace Magento\Catalog\Ui\Component\Listing\Columns;

/**
 * Interceptor class for @see \Magento\Catalog\Ui\Component\Listing\Columns
 */
class Interceptor extends \Magento\Catalog\Ui\Component\Listing\Columns implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Catalog\Ui\Component\ColumnFactory $columnFactory, \Magento\Catalog\Ui\Component\Listing\Attribute\RepositoryInterface $attributeRepository, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $columnFactory, $attributeRepository, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        return $pluginInfo ? $this->___callPlugins('prepare', func_get_args(), $pluginInfo) : parent::prepare();
    }
}
