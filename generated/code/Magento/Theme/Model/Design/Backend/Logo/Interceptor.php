<?php
namespace Magento\Theme\Model\Design\Backend\Logo;

/**
 * Interceptor class for @see \Magento\Theme\Model\Design\Backend\Logo
 */
class Interceptor extends \Magento\Theme\Model\Design\Backend\Logo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Config\Model\Config\Backend\File\RequestData\RequestDataInterface $requestData, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\UrlInterface $urlBuilder, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\MediaStorage\Helper\File\Storage\Database $databaseHelper = null, ?\Magento\Framework\Filesystem\Io\File $ioFileSystem = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $uploaderFactory, $requestData, $filesystem, $urlBuilder, $resource, $resourceCollection, $data, $databaseHelper, $ioFileSystem);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }
}
