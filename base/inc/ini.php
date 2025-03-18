<?php
	$fname = basename($_SERVER['PHP_SELF']);
	if($_SERVER['QUERY_STRING']){
		$fname2 = $fname ."?".$_SERVER['QUERY_STRING'];
	}else{
		$fname2 = $fname;
	}

	$meta_og_site_name = "トップのタイトル ";
	$meta_og_url = "https://URLを入れる" . $fname2;
	
	switch($fname){
		case "index.php":
			$meta_title = "会社[公式] ";
			$meta_description = "";
			$meta_keywords = "";
			break;
		case "about.php":
			$meta_title = "会社[公式] | 会社概要";
			$meta_description = "";
			$meta_keywords = "";
			break;
		default:
			$meta_title = "会社[公式] ";
			$meta_description = "";
			$meta_keywords = "";
			break;
	}
	
	?>
