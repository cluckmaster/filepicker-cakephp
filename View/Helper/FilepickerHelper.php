<?php

App::uses('FilepickerInfo', 'Filepicker.Lib');
class FilepickerHelper extends AppHelper {
    var $helpers = array('Html');

	function scriptTag() {
		$apikey = FilepickerInfo::getConfig($key = 'apikey');

		$out[] = $this->Html->script('http://api.filepicker.io/v0/filepicker.js');
		$out[] = $this->Html->scriptBlock("filepicker.setKey('$apikey')");
		return implode("\n", $out);
	}
	
}
?>
