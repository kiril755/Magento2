<?php
namespace Magento\Cms\Model\Wysiwyg\Images\Storage\Collection;

/**
 * Interceptor class for @see \Magento\Cms\Model\Wysiwyg\Images\Storage\Collection
 */
class Interceptor extends \Magento\Cms\Model\Wysiwyg\Images\Storage\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\Filesystem $filesystem)
    {
        $this->___init();
        parent::__construct($entityFactory, $filesystem);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
