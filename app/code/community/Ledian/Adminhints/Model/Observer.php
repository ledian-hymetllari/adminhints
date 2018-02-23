<?php

class Ledian_Adminhints_Model_Observer
{
    /**
     * Handle adminhtml hints
     * @param $observer
     */
    public function handleAdminHints($observer)
    {
        $adminHints = Mage::getStoreConfig('dev/debug/template_hints_admin');
        $blockToAdminHints = Mage::getStoreConfig('dev/debug/template_block_hints_admin');
        Mage::getConfig()->saveConfig('dev/debug/template_hints', $adminHints);
        Mage::getConfig()->saveConfig('dev/debug/template_hints_blocks', $blockToAdminHints);

    }
}