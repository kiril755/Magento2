<?php
namespace Magento\Cms\Model\PageRepository\ValidationComposite;

/**
 * Interceptor class for @see \Magento\Cms\Model\PageRepository\ValidationComposite
 */
class Interceptor extends \Magento\Cms\Model\PageRepository\ValidationComposite implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Api\PageRepositoryInterface $repository, array $validators = [], ?\Magento\Framework\EntityManager\HydratorInterface $hydrator = null)
    {
        $this->___init();
        parent::__construct($repository, $validators, $hydrator);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Cms\Api\Data\PageInterface $page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($page);
    }
}
