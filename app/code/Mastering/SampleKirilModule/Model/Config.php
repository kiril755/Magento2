<?php

namespace Mastering\SampleKirilModule\model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_ENABLED = 'mastering/general/enabled';
    private $config;

    public function __constract(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }
    public function isEnabled() {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }
}
