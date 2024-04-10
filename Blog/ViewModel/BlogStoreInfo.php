<?php

declare(strict_types=1);

namespace Growcode\Blog\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class BlogStoreInfo implements ArgumentInterface
{
    private \Magento\Store\Model\StoreManagerInterface $storeManager;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
    ) {
        $this->storeManager = $storeManager;
    }

     public function getCurrentStoreName(): string
    {
        return $this->storeManager->getStore()->getName();
    }
}
