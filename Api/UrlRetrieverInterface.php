<?php
namespace BrunoCanada\HrefLang\Api;

use Magento\Store\Model\Store;

interface UrlRetrieverInterface
{
    /**
     * @param string|int $identifier
     * @param Store $store
     * @return string
     */
    public function getUrl($identifier, $store);
}
