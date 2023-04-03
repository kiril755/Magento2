<?php

namespace Task\AdvancedCommentManagement\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_MODULE_ENABLED = 'task/general/module_enable';
    private $config;

    public function __construct(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }
    public function isModuleEnabled() {
        return $this->config->getValue(self::XML_PATH_MODULE_ENABLED);
    }
}
