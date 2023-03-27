<?php
namespace Magento\AdminNotification\Ui\Component\DataProvider\DataProvider;

/**
 * Interceptor class for @see \Magento\AdminNotification\Ui\Component\DataProvider\DataProvider
 */
class Interceptor extends \Magento\AdminNotification\Ui\Component\DataProvider\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\AdminNotification\Model\ResourceModel\System\Message\Collection\SynchronizedFactory $messageCollectionFactory, array $meta = [], array $data = [])
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $messageCollectionFactory, $meta, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMeta');
        return $pluginInfo ? $this->___callPlugins('getMeta', func_get_args(), $pluginInfo) : parent::getMeta();
    }
}
