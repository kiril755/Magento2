<?php
namespace Magento\Ui\Component\Bookmark;

/**
 * Interceptor class for @see \Magento\Ui\Component\Bookmark
 */
class Interceptor extends \Magento\Ui\Component\Bookmark implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Ui\Api\BookmarkRepositoryInterface $bookmarkRepository, \Magento\Ui\Api\BookmarkManagementInterface $bookmarkManagement, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $bookmarkRepository, $bookmarkManagement, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfiguration');
        return $pluginInfo ? $this->___callPlugins('getConfiguration', func_get_args(), $pluginInfo) : parent::getConfiguration();
    }
}
