<?php

namespace I95Learning\CreateEvent\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$displayText = $observer->getData('i95_text');
		echo $displayText->getText() . " - Event </br>";
		$displayText->setText('Execute event successfully.');

		return $this;
	}
}