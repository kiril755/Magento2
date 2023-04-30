<?php
declare(strict_types=1);

namespace Task\PriceVisibilityRestriction\Logger;

use Magento\Framework\Logger\Handler\Base as BaseHandler;
use Monolog\Logger;

class SuccessHandler extends BaseHandler
{
    /**
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * @var string
     */
    protected $fileName = '/var/log/success.log';
}
