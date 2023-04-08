<?php
namespace Magento\Framework\Image\Adapter\Gd2;

/**
 * Interceptor class for @see \Magento\Framework\Image\Adapter\Gd2
 */
class Interceptor extends \Magento\Framework\Image\Adapter\Gd2 implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem $filesystem, \Psr\Log\LoggerInterface $logger, array $data = [])
    {
        $this->___init();
        parent::__construct($filesystem, $logger, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function open($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'open');
        return $pluginInfo ? $this->___callPlugins('open', func_get_args(), $pluginInfo) : parent::open($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function save($destination = null, $newName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($destination, $newName);
    }

    /**
     * {@inheritdoc}
     */
    public function watermark($imagePath, $positionX = 0, $positionY = 0, $opacity = 30, $tile = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'watermark');
        return $pluginInfo ? $this->___callPlugins('watermark', func_get_args(), $pluginInfo) : parent::watermark($imagePath, $positionX, $positionY, $opacity, $tile);
    }

    /**
     * {@inheritdoc}
     */
    public function validateUploadFile($filePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateUploadFile');
        return $pluginInfo ? $this->___callPlugins('validateUploadFile', func_get_args(), $pluginInfo) : parent::validateUploadFile($filePath);
    }
}
