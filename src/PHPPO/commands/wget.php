<?php
//////////////////////
include_once(dirname(__FILE__) . "/../system/System.php");
include_once dirname(__FILE__) . "/../command/AddCommand.php";
$addcom = new addcommand;
$addcom->addcommand("wget","default","ファイルをダウンロードします。","<URL>");
//////////////////////
class wget extends systemProcessing{
	function __construct(){

	}
	public function onCommand(){
		global $aryTipeTxt;
		global $currentdirectory;
		$pathCount = count($aryTipeTxt);
		$path = "";
		if ($pathCount == 0) {
			$this->sendMessage("パラメーターが不足しています。");
		}else {
			for ($i=1; $i < $pathCount; $i++) {
				$path .= $aryTipeTxt[$i] . " ";
			}
			$path;
			$this->file_download($path,$currentdirectory);
		}
	}
}


?>
