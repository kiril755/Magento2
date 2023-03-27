<?php
namespace Magento\Catalog\Console\Command\ProductAttributesCleanUp;

/**
 * Interceptor class for @see \Magento\Catalog\Console\Command\ProductAttributesCleanUp
 */
class Interceptor extends \Magento\Catalog\Console\Command\ProductAttributesCleanUp implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductAttributeRepositoryInterface $productAttributeRepository, \Magento\Catalog\Model\ResourceModel\Attribute $attributeResource, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\App\State $appState, \Magento\Framework\EntityManager\MetadataPool $metadataPool)
    {
        $this->___init();
        parent::__construct($productAttributeRepository, $attributeResource, $searchCriteriaBuilder, $appState, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
