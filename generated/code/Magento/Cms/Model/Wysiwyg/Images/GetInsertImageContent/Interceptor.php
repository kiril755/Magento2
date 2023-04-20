<?php
namespace Magento\Cms\Model\Wysiwyg\Images\GetInsertImageContent;

/**
 * Interceptor class for @see \Magento\Cms\Model\Wysiwyg\Images\GetInsertImageContent
 */
class Interceptor extends \Magento\Cms\Model\Wysiwyg\Images\GetInsertImageContent implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Helper\Wysiwyg\Images $imagesHelper, \Magento\Catalog\Helper\Data $catalogHelper)
    {
        $this->___init();
        parent::__construct($imagesHelper, $catalogHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $encodedFilename, bool $forceStaticPath, bool $renderAsTag, ?int $storeId = null) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($encodedFilename, $forceStaticPath, $renderAsTag, $storeId);
    }
}
