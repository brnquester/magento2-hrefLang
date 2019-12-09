<?php


namespace BrunoCanada\HrefLang\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Config
 * @package BrunoCanada\HrefLang\Model
 */
class Config
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Config constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function isActive(string $configPath): bool
    {
        return $this->scopeConfig->isSetFlag(
            $configPath,
            ScopeInterface::SCOPE_STORE
        );
    }

    private function getConfigValue(string $configPath) : string
    {
        $result = $this->scopeConfig->getValue(
            $configPath,
            ScopeInterface::SCOPE_STORE
        );
        return $result ?? '';
    }
}
