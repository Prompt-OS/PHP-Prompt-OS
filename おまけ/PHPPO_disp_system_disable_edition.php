<?php
/*echo "Boot now?(pless return or tipe\"exit\")";
$nowboot =trim(fgets(STDIN));
if($nowboot == exit){
  exit('PHPPO: Segmentation fault');
}else{
  bootSystem();
}*/
bootSystem();
//��������{��
global $startBootTime;
date_default_timezone_set('Asia/Tokyo');
$startBootTime = date('s',time()) + date('i',time()) * 60;
function bootSystem(){
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
  setPromptTime();//���ݎ���-�v�����v�g�ɕ\��
  $GLOBALS['pr_thread'] = "Boot";//�X���b�h-�v�����v�g�ɕ\��
  $GLOBALS['pr_info'] = "INFO";//���-�v�����v�g�ɕ\��
  setPromptTime();
  echo $prompt . "PHP Prompt OS v_0.10_Beta\n";
  echo $prompt . "Build by chell rui.\n";
  @readfile($Sys_data) or readySetup();
  /*$prompt = "[{$pr_thread} Thread/{$pr_info}:{$pr_time}]";
  $pr_time = date$('$A$-H:i:s',time());
  echo $prompt . "test\n";*/
  echo $prompt . "Welcome to PHPPO! User:" . $user;
    setPromptTime();
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
   $pr_info = "ERROR";
   $pr_thread = "File";
   $pr_disp = "�t�@�C�������݂��Ă��܂��B file name:[" . $file_name . "]";
   sendMessage();
 }
 // �t�@�C���̃p�[�e�B�V�����̕ύX
 chmod( $file_name, 0666 );
 $pr_info = "INFO";
 $pr_thread = "File";
 setPromptTime();
 $pr_disp = $prompt . '�t�@�C���쐬�����B file name:[' . $file_name . ']' . "\n";
 $LICENSE = fopen("LICENSE.txt", "w");
  fwrite($LICENSE, "      ��php�A�v���P�[�V�����uPHP Prompt OS�v(�Ȍ��PHPPO)�̒��쌠�́Achell rui�y��chell_uoxou�ɂ�����̂Ƃ��܁[���B\n      ���쌠�\���̂Ȃ��܂ܕʂ̏ꏊ�Ɍ��J������A�񎟔z�z�����炾�߂���[\n     �I�[�v���\�[�X�Ŕz�z���Ă܂����A���g  �������Ⴎ����Ȃ�ł��̕ӋC�ɂ��Ȃ��ł������[���B\n     ���ア�낢��@�\�ǉ����܂��̂ŁA�܂��A�y����ł����Ăˁ[(=^�E�E^=)");
  fclose($LICENSE);
  echo "Language(en):\n  English -> \"en\"\n  Japanese -> \"ja\"\n";
  $Language_setup = trim(fgets(STDIN));
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
        $pr_disp = "PHP Prompt OS is stopping now...";
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
  $pr_disp = "====�Z�b�g�A�b�v���J�n���܂�====";
  sendMessage();
  $pr_disp = "�g�p���郆�[�U�[������͂��Ă�������:";
  sendMessage();
  $setup_user = trim(fgets(STDIN));
  setUserPassword();
}
function setUserPassword(){
  global $pr_disp;
  $pr_disp = "�p�X���[�h��ݒ肵�Ă��������B(�������ȏ�)";
  sendMessage();
  $setup_password = trim(fgets(STDIN));
  $pr_disp = "�ݒ肵���p�X���[�h��������x���͂��Ă��������B:";
  sendMessage();
  $setup_password_req = trim(fgets(STDIN));
  if ($setup_password_req != $setup_password) {

    $pr_disp = "���ڂɓ��͂����p�X���[�h���͂��߂ƈ�v���Ă��܂���I";
    sendMessage();
    setUserPassword();
  }
}
function setPromptTime(){
  global $pr_time;
  global $pr_info;
  global $pr_thread;
  global $prompt;
  global $user;
  global $file_name;
  global $Language_setup;
  global $LICENSE_agree;
  $GLOBALS['pr_time'] = date('A-H:i:s',time());
  $GLOBALS['prompt'] = "[{$pr_time}] [{$pr_thread} Thread/{$pr_info}]";
  }
$pr_disp = "�悤�����IPHP Prompt OS v_0.10_Beta";
sendMessage();
$pr_disp = "��ʂ̍X�V���s���܂�...";
sendMessage();
sleep(2);
for($i = 0; $i < 100;$i++){
  echo "\n";
}
$endBootTime = date('s',time()) + date('i',time()) * 60;
echo $endBootTime;
echo $startBootTime;
$resBootTime = $startBootTime - $endBootTime;
$pr_disp = "�N�������I({$resBootTime} s.) help�R�}���h�ŃR�}���h�ꗗ��\���B";
sendMessage();
standbyTipe();
function standbyTipe(){
  global $pr_disp;
  global $tipe_text;
  $pr_disp = ">";
  sendMessage();
  $tipe_text = fgets(STDIN);
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
    case "":
      break;
    default:
      $pr_disp = "\"" . $baseCommand . "\"�R�}���h��������܂���ł����Bhelp�R�}���h�Ŋm�F���Ă��������B";
      sendMessage();
      break;
  }
}
function onHelpCommad(){
  global $tipe_text;
  global $baseCommand;
  global $aryTipeTxt;
  global $pr_disp;
  $pr_disp = "======�R�}���h�ꗗ=======";
  sendMessage();
  $pr_disp = "help:�g�p�ł���R�}���h��\���B";
  sendMessage();
  $pr_disp = "echo:���b�Z�[�W��\���B";
  sendMessage();
  $pr_disp = "exit:PHP Prompt OS���V���b�g�_�E���B";
  sendMessage();
  $pr_disp = "exec:�R�}���h�y�ъO���v���Z�X�̎��s";
  sendMessage();
  $pr_disp = "time:�R���s���[�^�[�ɐݒ肳��Ă��鎞����\���B";
  sendMessage();
}

function sendMessage(){
  global $pr_disp;
  global $pr_TipeTxt;
  global $pr_thread;
  global $pr_info;
  global $pr_time;
  global $prompt;
  date_default_timezone_set('Asia/Tokyo');
  $pr_time = date('A-H:i:s',time());
  $prompt = "\n[{$pr_time}] [{$pr_thread} Thread/{$pr_info}]";
  echo "{$prompt} {$pr_disp}";
}
function onEchoCommand() {
  global $pr_disp;
  global $pr_TipeTxt;
  global $pr_thread;
  global $pr_info;
  global $prompt;
  global $aryTipeTxt;
  @$pr_disp = /*$aryTipeTxt[1] or $pr_disp = "�p�����[�^�[���s�����Ă��܂��B";*/"{$aryTipeTxt[1]} {$aryTipeTxt[2]} {$aryTipeTxt[3]} {$aryTipeTxt[4]} {$aryTipeTxt[5]} {$aryTipeTxt[6]} {$aryTipeTxt[7]} {$aryTipeTxt[8]} {$aryTipeTxt[9]}"or $pr_disp = "�p�����[�^�[���s�����Ă��܂��B";
  sendMessage();
}
function onExitCommand() {
global $pr_disp;
$pr_disp = "PHP Prompt OS by chell rui���I�����Ă��܂�...";
sendMessage();
$pr_disp = "(@^^)/~~~�I";
sendMessage();
exit();
}

function onExecCommand() {
  global $tipe_text;
  global $baseCommand;
  global $aryTipeTxt;
  global $pr_disp;
  @$exec_command = "{$aryTipeTxt[1]} {$aryTipeTxt[2]} {$aryTipeTxt[3]} {$aryTipeTxt[4]} {$aryTipeTxt[5]} {$aryTipeTxt[6]}"or $pr_disp = "�p�����[�^�[���s�����Ă��܂��B";
  exec($exec_command);
  @$pr_disp = "�v���Z�X�̎��s�ɐ������܂����B" or $pr_disp = "�v���Z�X�̎��s�Ɏ��s���܂����B";
  sendMessage();

function onClsCommand() {
    exec(cls);
  }
}

function onTimeCommand(){
  global $tipe_text;
  global $baseCommand;
  global $aryTipeTxt;
  global $pr_disp;
  global $pr_time;
  $pr_time = date('H��i���b',time());
  $d = getdate();
  $pr_disp = $d['year'] . "�N" . $d['mon'] . '��' . $d['mday'] . "��";
  sendMessage();
  $pr_disp = $d['hours'] . '��' . $d['minutes'] . '��' . $d['seconds'] . "�b";
  sendMessage();
}
?>
