<?php

if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $_REQUEST['folder'] . '/';
	$name = date('YmdHis')."_".rand(1000,9999).'.'.getExt($_FILES['Filedata']['name']);
	$targetFile =  str_replace('//','/',$targetPath) . $name;
	
		move_uploaded_file($tempFile,$targetFile);
		//echo "1";
		echo $_REQUEST['folder']."/$name ";
	// } else {
	// 	echo 'Invalid file type.';
	// }
	
	
}

// ��ȡ�ļ���չ��
// @param $fileName �ϴ��ļ���ԭ�ļ���
	function getExt($fileName){
		$ext = explode(".", $fileName);
		$ext = $ext[count($ext) - 1];
		return strtolower($ext);
	}

?>