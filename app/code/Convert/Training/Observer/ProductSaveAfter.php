<?php
/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

declare(strict_types=1);

namespace Convert\Training\Observer;

use Magento\Catalog\Model\Product;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class ProductSaveAfter implements ObserverInterface
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        /** @var Product $product */
        $product = $observer->getData('product');

        $this->logger->info("Training event - Product {$product->getId()} has been saved");
    }
}
