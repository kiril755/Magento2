<?php

declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Plugin;

use Magento\Customer\Model\Session;
use Magento\Catalog\Pricing\Render\FinalPriceBox;

class HidePriceForUser
{
    /**
     * @var Session
     */
    private $_customerSession;

    /**
     * @param Session $session
     */
    public function __construct(
        Session $session
    ) {
        $this->_customerSession = $session;
    }

    /**
     * @param FinalPriceBox $subject
     * @param string $result
     * @return string|null
     */
    function afterToHtml(FinalPriceBox $subject, string $result) : ?string
    {
        return $this->_customerSession->isLoggedIn() ? null : $result;
    }
}
