<?php
/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

declare(strict_types=1);

namespace Convert\PhysicalStock\Model\ReferenceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PhysicalStock extends AbstractDb
{
    private const TABLE_NAME = 'convert_physical_stock';

    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, 'id');
    }
}
