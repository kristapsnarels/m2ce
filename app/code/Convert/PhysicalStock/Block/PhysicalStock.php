<?php
/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

declare(strict_types=1);

namespace Convert\PhysicalStock\Block;

use Magento\Catalog\Helper\Data;
use Magento\Catalog\Model\Product;
use Magento\Framework\View\Element\Template;

class PhysicalStock extends Template
{
    private Data $catalogHelper;

    public function __construct( Data $catalogHelper, Template\Context $context, array $data = [])
    {
        $this->catalogHelper = $catalogHelper;

        parent::__construct($context, $data);
    }

    public function getProduct(): ?Product
    {
        return $this->catalogHelper->getProduct();
    }
}
