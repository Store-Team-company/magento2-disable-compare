<?php
declare(strict_types=1);

namespace StoreTeam\DisableCompare\Plugin;

use Magento\Catalog\Helper\Product\Compare;

class DisableComparePlugin
{
    /**
     * Suppress Add-to-Compare URL generation across product cards, widgets, and search results.
     */
    public function afterGetAddUrl(Compare $subject, $result): string
    {
        return '';
    }

    /**
     * Suppress Add-to-Compare POST payload generation.
     */
    public function afterGetPostDataParams(Compare $subject, $result): string
    {
        return '';
    }
}
