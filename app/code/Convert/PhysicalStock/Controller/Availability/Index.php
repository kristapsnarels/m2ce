<?php
/**
 * @author Convert Team
 * @copyright Copyright (c) Convert (https://www.convert.no)
 */

declare(strict_types=1);

namespace Convert\PhysicalStock\Controller\Availability;

use Convert\PhysicalStock\Helper\StockConfigHelper;
use Convert\PhysicalStock\Model\ReferenceModel\PhysicalStock\PhysicalStockCollection;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\ResultFactory;

class Index implements HttpGetActionInterface
{
    private StockConfigHelper $stockConfigHelper;
    private RequestInterface $request;
    private ResultFactory $resultFactory;
    private PhysicalStockCollection $physicalStockCollection;

    public function __construct(
        StockConfigHelper $stockConfigHelper,
        RequestInterface  $request,
        ResultFactory     $resultFactory,
        PhysicalStockCollection $physicalStockCollection
    ) {
        $this->stockConfigHelper = $stockConfigHelper;
        $this->request = $request;
        $this->resultFactory = $resultFactory;
        $this->physicalStockCollection = $physicalStockCollection;
    }

    public function execute()
    {
        $response = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        if (!$this->stockConfigHelper->isEnabled()) {
            return $response->setData([]);
        }

        $productId = $this->request->getParam('product_id');
        if (!$productId) {
            return $response->setData(['error' => true, 'message' => "Product with ID: $productId not found!"]);
        }

        $productStockData = $this->physicalStockCollection
            ->join(
                'limesharp_stockists_stores',
                'main_table.stockist_id = limesharp_stockists_stores.stockist_id',
                'limesharp_stockists_stores.name AS store_name'
            )
            ->addFilter('product_id', $productId)
            ->getData();

        return $response->setData(['product_stock_data' => $productStockData]);
    }
}
