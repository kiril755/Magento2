<?php

declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Catalog\Model\Session as CatalogSession;
use Magento\Directory\Model\Currency;

class CurrentProduct implements ArgumentInterface
{
    const last_item_id = 'last_viewed_product_id';
    /**
     * @var CatalogSession
     * @var Currency
     */
    private $catalogSession;
    private $currency;

    /**
     * @param CatalogSession $catalogSession
     * @param Currency $currency;
     */
    public function __construct(
        CatalogSession $catalogSession,
        Currency $currency
    )
    {
        $this->catalogSession = $catalogSession;
        $this->currency = $currency;
    }
    /**
     * @return int
     */
    public function getCurrentProduct() : int
    {
        return (int) $this->catalogSession->getData(self::last_item_id);
    }

    /**
     * @return string
     */
    public function getCurrency() : string {
        return $this->currency->getCurrencySymbol();
    }
}
