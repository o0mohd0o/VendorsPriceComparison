<?php

namespace Bnaia\VendorsPriceComparison\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /** 
     * @var \Magento\Framework\App\Config\ScopeConfigInterface 
     */
    protected $scopeConfig;
    protected $curl;
    /** 
     * Data constructor 
     * @param \Magento\Framework\App\Helper\Context $context 
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig 
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }

    public function getMainTitle()
    {
        $maintitle = $this->scopeConfig->getValue(
            'block/general/main_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $maintitle;
    }
    public function getSoldSellerText()
    {
        $sellertext = $this->scopeConfig->getValue(
            'block/general/sellers_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $sellertext;
    }

     public function getQuantityText()
    {
        $sellertext = $this->scopeConfig->getValue(
            'block/general/changed_quantity',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $sellertext;
    }
    public function getNotShippingAvailableText()
    {
        $sellertext = $this->scopeConfig->getValue(
            'block/general/shipping_rate',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $sellertext;
    }
    public function getshippingestimateText()
    {
        $sellertext = $this->scopeConfig->getValue(
            'block/general/ship_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $sellertext;
    }
    public function getConfigurableText()
    {
        $sellertext = $this->scopeConfig->getValue(
            'block/general/config_text',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $sellertext;
    }
        public function getSoldSellerTitle()
    {
        $sellertext = $this->scopeConfig->getValue(
            'block/general/sold_sellers_title',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $sellertext;
    }
    public function getSellerPagePrefix(){
               $urlkey = $this->scopeConfig->getValue(
            'vendors/vendorspage/url_key',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $urlkey; 
    }
}
