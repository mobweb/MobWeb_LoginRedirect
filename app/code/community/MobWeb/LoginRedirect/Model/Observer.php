<?php

class MobWeb_LoginRedirect_Model_Observer
{
	public function customerLogin($observer)
	{
		$target = Mage::getStoreConfig('customer/login_redirect_target/target');
		Mage::getSingleton('customer/session')->setBeforeAuthUrl(Mage::getUrl($target ? $target : ''));
	}
}