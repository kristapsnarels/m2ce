<?php
/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

declare(strict_types=1);

namespace Convert\Training\Plugin;

use Magento\Catalog\Model\Product;
use Psr\Log\LoggerInterface;

class ProductSave
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function beforeSave(Product $product)
    {
        $this->log('before', $product);
    }

    public function afterSave(Product $product)
    {
        $this->log('after', $product);
    }

    public function aroundSave(Product $product, callable $proceed)
    {
        $this->log('around', $product);

        $proceed();
    }

    private function log(string $logType, Product $product)
    {
        $this->logger->info(
            "Training plugin - $logType save: productId: {$product->getId()} productName: {$product->getName()}"
        );
    }
}
