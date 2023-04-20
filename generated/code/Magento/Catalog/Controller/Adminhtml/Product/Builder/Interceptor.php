<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Builder;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Builder
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Builder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ProductFactory $productFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Registry $registry, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, ?\Magento\Store\Model\StoreFactory $storeFactory = null, ?\Magento\Catalog\Api\ProductRepositoryInterface $productRepository = null)
    {
        $this->___init();
        parent::__construct($productFactory, $logger, $registry, $wysiwygConfig, $storeFactory, $productRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function build(\Magento\Framework\App\RequestInterface $request) : \Magento\Catalog\Api\Data\ProductInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'build');
        return $pluginInfo ? $this->___callPlugins('build', func_get_args(), $pluginInfo) : parent::build($request);
    }
}
