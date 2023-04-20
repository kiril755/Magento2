<?php
namespace Magento\Review\Block\View;

/**
 * Interceptor class for @see \Magento\Review\Block\View
 */
class Interceptor extends \Magento\Review\Block\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Review\Model\Rating\Option\VoteFactory $voteFactory, \Magento\Review\Model\RatingFactory $ratingFactory, \Magento\Review\Model\ReviewFactory $reviewFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $voteFactory, $ratingFactory, $reviewFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
