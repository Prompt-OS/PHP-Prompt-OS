<?php
/*
echo "Boot now?(pless return or tipe\"exit\")";
$nowboot = trim(fgets(STDIN));
if($nowboot == ""){
    bootSystem();
}else{
  echo "PHPPO: Segmentation fault";
  exit();
}
*/
//////////////���[��/////////////
//�E$aryTipeTxt[1]���s�o�O�������@....$aryTipeTxt[1] = trim($aryTipeTxt[1]);
//�E���ɂ���֐��Ɣ�閼�O�̃��[�U�[��`�֐������ۂ́up_�v�𓪂ɂ���i��:p_mkdir�j
////////////////////////////////
$logMode = "on";//���O��f���f�t�H���g�̐ݒ�
bootSystem();
//��������{��

date_default_timezone_set('Asia/Tokyo');
$startBootTime = microtime(true);
function bootSystem(){
	date_default_timezone_set('Asia/Tokyo');
	$startBootTime = microtime(true);
  	//�ϐ��̏������E�錾
  	global $pr_time;
  	global $pr_info;
  	global $pr_thread;
  	global $prompt;
  	global $user;
  	global $file_name;
  	global $Language_setup;
  	global $LICENSE_agree;
  	$pr_info = "";
  	$pr_time = "";
  	$pr_thread = "";
  	$prompt = "";
  	$user = "";
  	$file_name = "";
  	$Language_setup = "";
  	$LICENSE_agree = "";
  	/*�R�s�y�p
  	global $;
  	$pr_info = "";
  	$pr_info = "";
  	$pr_info = "";
  	$pr_info = "";
  	$pr_info = "";
  	$pr_info = "";*/
  	date_default_timezone_set('Asia/Tokyo');
  	$GLOBALS['pr_thread'] = "Boot";//�X���b�h-�v�����v�g�ɕ\��
  	$GLOBALS['pr_info'] = "INFO";//���-�v�����v�g�ɕ\��
  	echo $prompt . "PHP Prompt OS v_0.21_Beta\n";
  	echo $prompt . "Build by chell rui.\n";
  	@readfile($Sys_data) or readySetup();
  	/*$prompt = "[{$pr_thread} Thread/{$pr_info}:{$pr_time}]";
  	$pr_time = date$('$A$-H:i:s',time());
  	echo $prompt . "test\n";*/
	$pr_thread = "LOGIN";
  	echo $prompt . "Welcome to PHPPO! User:" . $user;
  		$prompt = "\n[$pr_time] [{$pr_thread} Thread/{$pr_info}]";
  		echo $prompt . "test\n";

}

/*function standby(){
  global $pr_TipeTxt;
  $pr_TipeTxt = trim(fgets(STDIN));
}*/

function readySetup(){
  global $pr_time;
  global $pr_info;
  global $pr_thread;
  global $prompt;
  global $user;
  global $file_name;
  global $Language_setup;
  global $LICENSE_agree;
  global $pr_info, $pr_thread;
  $user = 'Guest';
  // �쐬����t�@�C�����̎w��
 $file_name = 'LICENSE.txt';

 // �t�@�C���̑��݊m�F
 if( !file_exists($file_name) ){
   // �t�@�C���쐬
   touch( $file_name );
 }else{
   // ���łɃt�@�C�������݂���׃G���[�Ƃ���
   //$pr_info = "ERROR";
   //$pr_thread = "File";
   //sendMessage("�t�@�C�������݂��Ă��܂��B file name:[" . $file_name . "]");
 }
 // �t�@�C���̃p�[�e�B�V�����̕ύX
 chmod( $file_name, 0666 );
 $file_name = 'config.ini';

 // �t�@�C���̑��݊m�F
 if(!file_exists($file_name)){//?
   // �t�@�C���쐬
   touch($file_name);
 }else{
   // ���łɃt�@�C�������݂���׃G���[�Ƃ���
   //$pr_info = "ERROR";
   //$pr_thread = "File";
   //sendMessage("�t�@�C�������݂��Ă��܂��B file name:[" . $file_name . "]");
 }
 // �t�@�C���̃p�[�e�B�V�����̕ύX
 chmod( $file_name, 0666 );
	$logfilepath = dirname(__FILE__) . "\\" . "logs";
	if (!file_exists($logfilepath)) {
	mkdir($logfilepath);
   sendMessage("���O�o�͗p�t�H���_�𐶐����܂����B:[" . $logfilepath .  "]");
 }

	$logfilepath = dirname(__FILE__) . "\\" . "logs" . "\\" . date('Y_m_d') . ".log";
 	if (!file_exists($logfilepath)) {
 	touch($logfilepath);
    sendMessage("���O�o�͗p�t�@�C���𐶐����܂����B:" . $logfilepath . PHP_EOL);
	}
 	systemFileOpen(dirname(__FILE__) . "\\" . "logs" . "\\" . date('Y_m_d') . ".log");
 	$pr_info = "INFO";
 	$pr_thread = "File";
 	$LICENSE = fopen("LICENSE.txt", "w");
 	fwrite($LICENSE, "      ��php�A�v���P�[�V�����uPHP Prompt OS�v(�Ȍ��PHPPO)�̒��쌠�́Achell rui�y��chell_uoxou�ɂ�����̂Ƃ��܁[���B\n      ���쌠�\���̂Ȃ��܂ܕʂ̏ꏊ�Ɍ��J������A�񎟔z�z�����炾�߂���[\n     �I�[�v���\�[�X�Ŕz�z���Ă܂����A���g  �������Ⴎ����Ȃ�ł��̕ӋC�ɂ��Ȃ��ł������[���B\n     ���ア�낢��@�\�ǉ����܂��̂ŁA�܂��A�y����ł����Ăˁ[(=^�E�E^=)");
 	fclose($LICENSE);
 	//echo PHP_EOL . "Language(en):\n  English -> \"en\"\n  Japanese -> \"ja\"\n";
  	$Language_setup = "ja";
  	switch($Language_setup){
    	case 'ja':
      	echo "�������{��Ɍ��肢�����܂����B\n";
      	echo file_get_contents("LICENSE.txt") . "\n";
      	echo "���C�Z���X�ɓ��ӂ��܂����H(y/n):";
      	$LICENSE_agree = trim(fgets(STDIN));
      	if($LICENSE_agree == "y"){
        	startSetup();
      	}else{
        	echo "\n���C�Z���X�ɓ��ӂ��Ă�������\n";
        	sendMessage("PHP Prompt OS is stopping now...");
        exit;
      	}
      break;
    default:
      echo "";
      break;
  }

  }

function startSetup(){
  global $pr_time;
  global $pr_info;
  global $pr_thread;
  global $prompt;
  global $user;
  global $file_name;
  global $Language_setup;
  global $LICENSE_agree;
  global $pr_disp;
  global $setup_password;
  sendMessage("====�Z�b�g�A�b�v���J�n���܂�====");
  sendMessage("�g�p���郆�[�U�[������͂��Ă�������:");
  $setup_user = trim(fgets(STDIN));
  setUserPassword();
  endUserSetup($setup_user,$setup_password);
}

function setUserPassword(){
  	global $setup_password;
	do {
		$setup_password = "";
		$setup_password_req = "";
		do {
			sendMessage('�p�X���[�h��ݒ肵�Ă��������B(�������ȏ�)');
			$setup_password = trim(fgets(STDIN));
			sysCls(50);
			$flag = true;
			if (8 > strlen($setup_password)) {
				sendMessage("�ݒ肵���p�X���[�h�͔������ɖ������Ă��܂���I");
			}else {
				$flag = false;
			}
		} while ($flag);
		sendMessage("�ݒ肵���p�X���[�h��������x���͂��Ă��������B:");
		$setup_password_req = trim(fgets(STDIN));
		sysCls(50);
		if ($setup_password_req != $setup_password) {
			sendMessage("���ڂɓ��͂����p�X���[�h���͂��߂ƈ�v���Ă��܂���I");
		}
	} while ($setup_password_req != $setup_password);
}
// function setPromptTime(){
//   global $pr_time;
//   global $pr_info;
//   global $pr_thread;
//   global $prompt;
//   global $user;
//   global $file_name;
//   global $Language_setup;
//   global $LICENSE_agree;
//   $GLOBALS['pr_time'] = date('A-H:i:s',time());
//   $GLOBALS['prompt'] = "[{$pr_time}] [{$pr_thread} Thread/{$pr_info}]";
//  }
$pr_thread = "BOOT";
sendMessage("�悤�����IPHP Prompt OS v_0.21_Beta");
sendMessage("��ʂ̍X�V���s���܂�...");
sleep(2);
sysCls(500);
$endBootTime = microtime(true);
$resBootTime = $endBootTime - $startBootTime;
sendMessage("�N�������I(" . round($resBootTime, 2) . " s.) help�R�}���h�ŃR�}���h�ꗗ��\���B");
$pr_thread = "PHPPO";
standbyTipe();


function endUserSetup($user, $password){

}

function standbyTipe(){
  	global $pr_disp;
  	global $tipe_text;
  	global $stanby;
	global $writeData;
  	$stanby = True;
  	sendMessage(">");
  	$stanby = false;
	$tipe_text = trim(fgets(STDIN));
	fwrite($writeData,PHP_EOL . $tipe_text);
  	runCommand();
  	standbyTipe();
  }



function runCommand() {
  global $tipe_text;
  global $baseCommand;
  global $aryTipeTxt;
  global $pr_disp;
  global $pr_info;
  global $exec_command;
  $aryTipeTxt = explode(" ", $tipe_text);
  $baseCommand = trim($aryTipeTxt[0]);
  if (!$baseCommand == "") {
	  switch ($baseCommand) {
        case "help":
          	onHelpCommad();
          	break;
        case "echo":
          	onEchoCommand();
          	break;
        case "exit":
        	onExitCommand();
        	break;
        case "exec":
          	onExecCommand();
          	break;
        case "cls":
          	onClsCommand();
          	break;
        case 'time':
          	onTimeCommand();
          	break;
        case 'log':
          	onLogCommand();
          	break;
     	case "download":
    		onDownloadCommand();
        	break;
        case "info":
    		onInfoCommand();
          	break;
        default:
          	sendMessage("\"" . $baseCommand . "\"�R�}���h��������܂���ł����Bhelp�R�}���h�Ŋm�F���Ă��������B");
          	break;
      }
  }

}
function onHelpCommad(){
  global $tipe_text;
  global $baseCommand;
  global $aryTipeTxt;
  global $pr_disp;
  sendMessage("======�R�}���h�ꗗ=======");
  sendMessage("help:�g�p�ł���R�}���h��\���B");
  sendMessage("echo:���b�Z�[�W��\���B");
  sendMessage("exit:PHP Prompt OS���I���B");
  sendMessage("*exec:�R�}���h�y�ъO���v���Z�X�̎��s");
  sendMessage("time:�R���s���[�^�[�ɐݒ肳��Ă��鎞����\���B");
  sendMessage("log:���O���o�͂���ݒ�B");
  sendMessage("*info <logo|auther|des|help|url|>:���v���O�����Ɋւ��Ă̏���\���B");
  sendMessage("=========================");
  sendMessage("�A�X�^���X�N(*)�}�[�N�́A�݊������Ȃ��\��������܂��B");
}


function onEchoCommand() {
  global $pr_disp;
  global $pr_TipeTxt;
  global $pr_thread;
  global $pr_info;
  global $prompt;
  global $aryTipeTxt;
  $messageCount = count($aryTipeTxt);
  if ($messageCount <= 1) {
  	sendMessage("�p�����[�^�[���s�����Ă��܂��B");
	}else{
	$aryTipeTxt[1] = trim($aryTipeTxt[1]);
	$message = '';
	for ($i=1; $i < $messageCount; $i++) {
		$message .= $aryTipeTxt[$i] . " ";
	}
	sendMessage($message);
  }
}

function onExitCommand() {
	global $pr_disp;
	global $aryTipeTxt;
	if (!isset($aryTipeTxt[1])){
 	sendMessage("PHP Prompt OS by chell rui���I�����܂�...");
		}else{
			$aryTipeTxt[1] = trim($aryTipeTxt[1]);
  			sendMessage($aryTipeTxt[1] . "�b���PHP Prompt OS by chell rui���I�����܂�...");
			$waitSec = (int)$aryTipeTxt[1];
  			sleep($waitSec);
	}
	sendMessage("(@^^)/~~~�I");
	exit();
}

function onExecCommand() {
  global $tipe_text;
  global $baseCommand;
  global $aryTipeTxt;
  global $pr_disp;
  $messageCount = count($aryTipeTxt);
	if ($messageCount <= 1) {
  	sendMessage("�p�����[�^�[���s�����Ă��܂��B");
  	}else{
  		$exec_command = '';
  		for ($i=1; $i < $messageCount; $i++) {
	  	$exec_command .= $aryTipeTxt[$i] . " ";
			}
		$exec_command = trim($exec_command);
  		exec($exec_command);
		sendMessage($exec_command . "�R�}���h�̎��s�����݂܂����B");
	}
}

function onInfoCommand(){
	global $aryTipeTxt;
	$messageCount = count($aryTipeTxt);
    if ($messageCount <= 1) {
		sendMessage("PHP Prompt OS (PHPPO) version 0.2.5");
		sendMessage("Copyright by chell rui @2015");
  	}else{
  		$aryTipeTxt[1] = trim($aryTipeTxt[1]);
  		$message = '';
  		for ($i=1; $i < $messageCount; $i++) {
  			$message .= $aryTipeTxt[$i] . "";
  		}
	}

	switch ($aryTipeTxt[1]) {
		case 'logo':
			exec(dirname(__FILE__) . "\\" . "logo.jpg");
			break;
		case 'auther':
			sendMessage("PHP Prompt OS�A�����PHPPO�̍쐬�҂�chell rui�ł��B");
			sendMessage("Twitter:@chell_uoxou");
			break;
		case 'help':
			sendMessage("info�R�}���h�̎g�p���@:");
			sendMessage("info <logo|auther|des|help|url>");
			sendMessage("logo:PHP Prompt OS �̃��S������̉摜�r���[�A�[�ŕ\�����܂��B");
			sendMessage("auther:PHP Prompt OS �̍쐬�҂̏���\�����܂��B");
			sendMessage("des:PHP Prompt OS�̏���\�����܂��B");
			sendMessage("help:�R�}���h�̎g�p���@��\�����܂��B");
			sendMessage("url:PHP Prompt OS�̃y�[�W��URL��\�����܂��B�A�b�v�f�[�g�̊m�F�͂�����ł��肢���܂��B");
			break;
		case 'url':
			sendMessage("PHP Prompt OS�̃y�[�W�ł��B�A�b�v�f�[�g�̊m�F�͂�����ł��肢���܂��B");
			sendMessage("https://chellruibox.wordpress.com/php-prompt-os/");
			break;
		case 'des':
			sendMessage(" PHP Prompt OS�́Achell rui�ɂ���č��ꂽ�R���\�[������PHP�X�N���v�g�ł��B");
			sendMessage(" �J�C�k�V(chell rui)��PHP�̕׋������邽�߂ɍ���܂����B");
			sendMessage(" ����@�\��ǉ����Ă����\��Ȃ̂ł����A��ʁA�܂��͊�Ƃɑ΂��ė��v�̂��銈���ł͂���܂���B");
			sendMessage(" PHP Prompt OS �́A���i�K��PHP�ł̃J�C�k�V�𒆐S�Ƃ����v���W�F�N�g�Ƃ��Đi�s���Ă���A���i�K�ł̓v���O���~���O�����Hot Soop Processor 3�AJava�𗘗p�����݊��v���O�����������ɊJ�����i�߂��Ă��܂��B");
			sendMessage(" �J���҂́A���ݎO���ł��BPHP�ł͎��chell rui���S�����Ă���܂��B���̑��̒S���́A����Google Plus�R�~���j�e�B�[�����m�F���������B�܂��A�J���҂��W���Ă���܂��̂ŁA�������킢�����͂��ЃR�~���j�e�B�ɂĎQ���̊�]��\�����Ă��������B�A���A���v���W�F�N�g�͌��i�K�ł͔�c���Ŋ������Ă��邽�߁A�J���҂ɗ��v�͂������܂���B");
			sendMessage(" ���S�́Achell rui�ɂ����̂ł��B");
			break;
		default:
			break;
	}
}


function onClsCommand() {
    exec(cls);
}

function onTimeCommand(){
  global $tipe_text;
  global $baseCommand;
  global $aryTipeTxt;
  global $pr_disp;
  global $pr_time;
  $pr_time = date('H��i���b',time());
  $d = getdate();
  sendMessage($d['year'] . "�N" . $d['mon'] . '��' . $d['mday'] . "��");
  sendMessage($d['hours'] . '��' . $d['minutes'] . '��' . $d['seconds'] . "�b");
}

function onLogCommand(){
	global $tipe_text;
	global $baseCommand;
	global $aryTipeTxt;
	global $pr_disp;
	global $pr_time;
	global $logMode;
	$messageCount = count($aryTipeTxt);
	if ($messageCount <= 1) {
	  sendMessage("Log mode�� " . $logMode . " �ł��B");
	  sendMessage("���O���[�h��ύX����ۂ́A��������<on>��<off>�̒l���L�����Ă��������B");
	  }else{
		$aryTipeTxt[1] = trim($aryTipeTxt[1]);
	  	if ($aryTipeTxt[1] == "on") {
	  	$logMode = "on";
		sendMessage("���O�t�@�C���Ƀ��O�������o���܂��B");
				}else{
				if ($aryTipeTxt[1] == "off") {
			  	$logMode = "off";
			  	sendMessage("���O�t�@�C���Ƀ��O�������o���܂���B");
		  			}else{
			  		sendMessage("�p�����[�^�[�̋L�@�Ɍ�肪����܂��B");
			  		sendMessage("������(" . $aryTipeTxt[1] . ")��<on>��<off>�̒l���L�����Ă��������B");

		  }
		}
	  }
}

function onDownloadCommand(){
	global $tipe_text;
	global $baseCommand;
	global $aryTipeTxt;
	$url = $aryTipeTxt[1];
	$save_base_name = $aryTipeTxt[3];
	$aryTipeTxt[1] = trim($aryTipeTxt[1]);
	if ($path == "") {
		file_download($url, dirname(__FILE__), $save_base_name);
	}else {
		$path = $aryTipeTxt[2];
		file_download($url, $path, $save_base_name);
	}
}

function file_download($url, $dir='.', $save_base_name='' ){//http://logic.moo.jp/data/archives/825.html�����p���܂����B
    if ( ! is_dir($dir) ){
		 sendMessage("�f�B���N�g��({$dir})�����݂��܂���B");
	 }
    $dir = preg_replace("{/$}","",$dir);
    $p = pathinfo($url);
    $local_filename = '';
    if ( $save_base_name ){
		 $local_filename = "{$dir}/{$save_base_name}.{$p['extension']}";
	 }else{
		  $local_filename = "{$dir}/{$p['filename']}.{$p['extension']}"; }
    if ( is_file( $local_filename ) ){
		 sendMessage("���łɃt�@�C��({$local_filename})�����݂��܂�<br>\n");
	 }
    $tmp = file_get_contents($url);
    if (! $tmp){
		sendMessage("URL({$url})����_�E�����[�h�ł��܂���ł����B");
	}
    $fp = fopen($local_filename, 'w');
    fwrite($fp, $tmp);
    fclose($fp);
}
/////////////////////////////////////////////�V�X�e�������W/////////////////////////////////////////////
function showCsv($fname){
  $f = @fopen($fname,'rb') or sendMessage("���t�@�C�����J���ۂɃG���[���������܂����B");
  while(!feof($f)) $GLOBALS['/*����*/'] = something;fgetcsv($f,1024);
  fclose($f);
}

function systemFileOpen($path)
{
	global $writeData;
	$writeData = fopen($path,'a');
}

function systemFileClose()
{
	global $writeData;
	fclose($writeData);
}

function sysCls($res){
  for($i = 0; $i < $res;$i++){
    echo "\n";
  }
}

function sendMessage($pr_disp){
  global $pr_TipeTxt;
  global $pr_thread;
  global $pr_info;
  global $pr_time;
  global $prompt;
  global $writeData;
  global $stanby;
  global $logMode;
  global $tipe_text;
  date_default_timezone_set('Asia/Tokyo');
  $pr_time = date('A-H:i:s');
  $prompt = PHP_EOL . "[{$pr_time}] [{$pr_thread} Thread/{$pr_info}]";
  echo "{$prompt} {$pr_disp}";
  if ($logMode == "on") {
	  if (isset($writeData)){
		if ($stanby) {

		}else{
			fwrite($writeData,"{$prompt} {$pr_disp}");
		}
	  }
  }
}
