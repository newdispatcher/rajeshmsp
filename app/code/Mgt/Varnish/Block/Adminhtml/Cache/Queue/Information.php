<?php
 namespace Mgt\Varnish\Block\Adminhtml\Cache\Queue; class Information extends \Magento\Backend\Block\Template { protected $varnishConfig; protected $config; public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\App\Config $config, \Mgt\Varnish\Model\Cache\Config $varnishConfig, array $data = []) { goto D1d49; ecbf6: $this->config = $config; goto Ce8e2; Ce8e2: $this->varnishConfig = $varnishConfig; goto C29ac; D1d49: parent::__construct($context, $data); goto ecbf6; C29ac: } public function isCacheWarmerEnabled() { $isCacheWarmerEnabled = $this->varnishConfig->isCacheWarmerEnabled(); return $isCacheWarmerEnabled; } public function getQueueInformationAjaxUrl() { $queueInformationAjaxUrl = $this->getUrl("\x6d\147\164\x76\141\162\156\151\x73\x68\x2f\161\x75\145\165\145\x2f\x69\156\x66\x6f\162\155\x61\x74\151\157\156"); return $queueInformationAjaxUrl; } }