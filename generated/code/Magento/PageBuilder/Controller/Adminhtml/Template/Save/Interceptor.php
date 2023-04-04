<?php
namespace Magento\PageBuilder\Controller\Adminhtml\Template\Save;

/**
 * Interceptor class for @see \Magento\PageBuilder\Controller\Adminhtml\Template\Save
 */
class Interceptor extends \Magento\PageBuilder\Controller\Adminhtml\Template\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\PageBuilder\Model\TemplateFactory $templateFactory, \Magento\PageBuilder\Api\TemplateRepositoryInterface $templateRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Api\ImageContentValidator $imageContentValidator, \Magento\Framework\Api\ImageContentFactory $imageContentFactory, \Magento\MediaStorage\Helper\File\Storage\Database $mediaStorage, \Magento\Framework\Image\AdapterFactory $imageAdapterFactory)
    {
        $this->___init();
        parent::__construct($context, $logger, $templateFactory, $templateRepository, $searchCriteriaBuilder, $filesystem, $imageContentValidator, $imageContentFactory, $mediaStorage, $imageAdapterFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
