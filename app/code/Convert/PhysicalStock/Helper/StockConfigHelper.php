<?php
/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

declare(strict_types=1);

namespace Convert\PhysicalStock\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class StockConfigHelper extends AbstractHelper
{
    public function isEnabled(int $storeId = null): bool
    {
        return (bool)$this->scopeConfig->getValue('physical_stock/general/status', ScopeInterface::SCOPE_STORE, $storeId);
    }
}
