<?php
/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

declare(strict_types=1);

namespace Convert\PhysicalStock\Model;

use Magento\Framework\Model\AbstractModel;

class PhysicalStock extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ReferenceModel\PhysicalStock::class);
    }
}
