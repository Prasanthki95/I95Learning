<?php

namespace I95Learning\CreateEvent\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'I95Learning_CreateEvent'));
		$this->_eventManager->dispatch('I95Learning_CreateEvent_display_text', ['i95_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}