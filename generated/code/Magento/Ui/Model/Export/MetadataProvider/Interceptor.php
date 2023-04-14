<?php
namespace Magento\Ui\Model\Export\MetadataProvider;

/**
 * Interceptor class for @see \Magento\Ui\Model\Export\MetadataProvider
 */
class Interceptor extends \Magento\Ui\Model\Export\MetadataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Ui\Component\MassAction\Filter $filter, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Framework\Locale\ResolverInterface $localeResolver, $dateFormat = 'M j, Y h:i:s A', array $data = [])
    {
        $this->___init();
        parent::__construct($filter, $localeDate, $localeResolver, $dateFormat, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders(\Magento\Framework\View\Element\UiComponentInterface $component) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHeaders');
        return $pluginInfo ? $this->___callPlugins('getHeaders', func_get_args(), $pluginInfo) : parent::getHeaders($component);
    }

    /**
     * {@inheritdoc}
     */
    public function getFields(\Magento\Framework\View\Element\UiComponentInterface $component) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFields');
        return $pluginInfo ? $this->___callPlugins('getFields', func_get_args(), $pluginInfo) : parent::getFields($component);
    }

    /**
     * {@inheritdoc}
     */
    public function getRowData(\Magento\Framework\Api\Search\DocumentInterface $document, $fields, $options) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowData');
        return $pluginInfo ? $this->___callPlugins('getRowData', func_get_args(), $pluginInfo) : parent::getRowData($document, $fields, $options);
    }
}
