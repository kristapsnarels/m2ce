<?php
/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

declare(strict_types=1);

namespace Convert\PhysicalStock\Model\ReferenceModel\PhysicalStockCollection;

use Convert\PhysicalStock\Model\PhysicalStock;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class PhysicalStockCollection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'convert_physical_stock_collection';
    protected $_eventObject = 'convert_physical_stock';

    protected function _construct()
    {
        $this->_init(
            PhysicalStock::class,
            \Convert\PhysicalStock\Model\ReferenceModel\PhysicalStock::class
        );
    }
}
