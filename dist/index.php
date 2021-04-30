<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title>Вёрстка сайта</title>
		<style>
			a {color: silver}
			a.done {color: green}
			a:hover {color: red !important}
		</style>		
	</head>
	<body>
		<?php
			define('SCRIPT', basename($_SERVER['SCRIPT_NAME']));
			define('PATH_PAGES', 'http://'.$_SERVER['SERVER_NAME'].str_replace(SCRIPT, '', $_SERVER['SCRIPT_NAME']));
			define('ARCHIVE', 'archive.zip');

			$filesByDir = getFilesByDir();
			$files = array();

			foreach ($filesByDir as $file) {
				$prefix = $file['prefix'];
				if (sizeof($prefix) == 1) {
					$files[$prefix[0]]['link'] = $file['link'];
					$files[$prefix[0]]['title'] = $file['title'];
					$files[$prefix[0]]['status'] = $file['status'];
				} elseif (sizeof($prefix) > 1) {
					for ($i = 1; $i < sizeof($prefix); $i++) {
						$files[$prefix[0]] = upbuilding($files[$prefix[0]], $prefix, $file, $i);
					}
				}
			}
			ksort($files);

			echo '<ol>';
			foreach ($files as $file) {
				if (isset($file['files'])) {
					echo '<li><a href="'.$file['link'].'" class="'.$file['status'].'" target="_blank">'.$file['title'].'</a>';
					if (isset($file['files'])) echo subfiles($file['files']);
					echo '</li>';
				} else {
					echo '<li><a href="'.$file['link'].'" class="'.$file['status'].'" target="_blank">'.$file['title'].'</a></li>';
				}
			}
			echo '</ol>';

			function subfiles($files) {
				echo '<ol>';
				foreach ($files as $subfile) {
					echo '<li><a href="'.$subfile['link'].'" class="'.$subfile['status'].'" target="_blank">'.$subfile['title'].'</a>';
					if (isset($subfile['files'])) echo subfiles($subfile['files']);
					echo '</li>';
				}
				echo '</ol>';
			}

			function getFilesByDir($zip = false) {
				$dir_handle = opendir('.');
				$allowed_types = array('php', 'html', 'htm');
				$file_list = array();
				while ($file = readdir($dir_handle)) {
					if ($file == '.' || $file == '..') continue;
					$file_name = explode('.', $file);
					$ext = strtolower(array_pop($file_name));
					if ($zip && $file != SCRIPT) $file_list[$file] = $file_name[0] ? 'file' : 'dir';
					elseif (in_array($ext, $allowed_types) && $file != SCRIPT && !$zip) {
						$page = file_get_contents(PATH_PAGES.$file);
						$meta_tags = get_meta_tags(PATH_PAGES.$file);
						if (preg_match_all("|<title>(.*)</title>|sUSi", $page, $titles) != 0) {
							$prefix = getPrefix($file);
							$file_list[$file]['link'] = $file;
							$file_list[$file]['title'] = $titles[1][0];
							$file_list[$file]['status'] = isset($meta_tags['job']) ? 'process' : 'done';
							$file_list[$file]['prefix'] = $prefix;
						}
					}
				}
				if ($zip) return $file_list;
				krsort($file_list);
				return array_values($file_list);
			}

			function getPrefix($filename) {
				$empty = array(null);
				preg_match("/[a-z]/", $filename, $letters);
				return array_diff(explode('_', substr($filename, 0, strpos($filename, $letters[0], true))), $empty);
			}

			function partitionFiles($array, $prefix, $link, $title, $level) {
				$meta_tags = get_meta_tags(PATH_PAGES.$link);
				if (sizeof($prefix) == $level) {
					$array['files'][$prefix[$level - 1]]['link'] = $link;
					$array['files'][$prefix[$level - 1]]['title'] = $title;
					$array['files'][$prefix[$level - 1]]['status'] = isset($meta_tags['job']) ? 'process' : 'done';
				}
				ksort($array['files']);
				return $array;
			}

			function upbuilding($files, $prefix, $file, $i) {
				if ($i < 2) {
					$files = partitionFiles($files, $prefix, $file['link'], $file['title'], $i+1);
				} elseif ($i < 3) {
					$files['files'][$prefix[1]] = partitionFiles($files['files'][$prefix[1]], $prefix, $file['link'], $file['title'], $i+1);
				} elseif ($i < 4) {
					$files['files'][$prefix[1]]['files'][$prefix[2]] = partitionFiles($files['files'][$prefix[1]]['files'][$prefix[2]], $prefix, $file['link'], $file['title'], $i+1);
				} else {
					$files['files'][$prefix[1]]['files'][$prefix[2]]['files'][$prefix[3]] = partitionFiles($files['files'][$prefix[1]]['files'][$prefix[2]]['files'][$prefix[3]], $prefix, $file['link'], $file['title'], $i+1);
				}
				return $files;
			}

			function create_zip($type_archive = 'php') {
				if (file_exists(ARCHIVE)) unlink(ARCHIVE);
				$files = getFilesByDir(true);
				$zip = new ZipArchive();
				$zip->open(ARCHIVE, ZIPARCHIVE::CREATE);
				$garbage = array();
				foreach ($files as $name => $type) {
					if ($type == 'file') {
						if ($type_archive == 'html') {
							$html_file = str_replace('php', 'html', $name);
							saveToFile(file_get_contents(PATH_PAGES.$name), $html_file);
							$zip->addFile($html_file);	
							$garbage[] = $html_file;
						} else $zip->addFile($name);	
					} else {
						$pathInfo = pathInfo('./'.$name); 
						$parentPath = $pathInfo['dirname']; 
						$dirName = $pathInfo['basename'];
						if ($type_archive == 'html') {
							if ($name != 'inc' || $name != 'include') {
								$zip->addEmptyDir($name); 
								folderToZip('./'.$name, $zip, strlen("$parentPath/"));
							}
						} else {
							$zip->addEmptyDir($name); 
							folderToZip('./'.$name, $zip, strlen("$parentPath/"));							
						}
					}
				}
				$zip->close();
				if (sizeof($garbage) > 0) {
					foreach ($garbage as $key => $value) unlink($value);
				}
				return true;
			}

			function folderToZip($folder, $zipFile, $exclusiveLength) {
				$handle = opendir($folder); 
				while (false !== $f = readdir($handle)) { 
					if ($f != '.' && $f != '..') { 
						$filePath = "$folder/$f"; 
						$localPath = substr($filePath, $exclusiveLength); 
						if (is_file($filePath)) { 
							$path_parts = pathinfo($filePath);
							$zipFile->addFile($filePath, $localPath); 
						} elseif (is_dir($filePath)) {
							$zipFile->addEmptyDir($localPath); 
							folderToZip($filePath, $zipFile, $exclusiveLength); 
						} 
					} 
				} 
				closedir($handle); 
			} 

			function xmail($from, $to, $subj, $text, $filename) {
				$f         = fopen($filename,"rb");
				$un        = strtoupper(uniqid(time()));
				$head      = "From: $from\n";
				$head     .= "To: $to\n";
				$head     .= "Subject: $subj\n";
				$head     .= "X-Mailer: PHPMail Tool\n";
				$head     .= "Reply-To: $from\n";
				$head     .= "Mime-Version: 1.0\n";
				$head     .= "Content-Type:multipart/mixed;";
				$head     .= "boundary=\"----------".$un."\"\n\n";
				$zag       = "------------".$un."\nContent-Type:text/html;\n";
				$zag      .= "Content-Transfer-Encoding: 8bit\n\n$text\n\n";
				$zag      .= "------------".$un."\n";
				$zag      .= "Content-Type: application/octet-stream;";
				$zag      .= "name=\"".basename($filename)."\"\n";
				$zag      .= "Content-Transfer-Encoding:base64\n";
				$zag      .= "Content-Disposition:attachment;";
				$zag      .= "filename=\"".basename($filename)."\"\n\n";
				$zag      .= chunk_split(base64_encode(fread($f,filesize($filename))))."\n";
				return @mail("$to", "$subj", $zag, $head);
			}

			function saveToFile($value, $filename) {
				if ($f = fopen($filename, 'w')) {
					fwrite($f, $value);
					fclose($f);
				} else return false;
			}

			if (isset($_GET['action']) && $_GET['action'] != '') {
				switch ($_GET['action']) {
					case 'download_zip': 
						if (create_zip()) header('Location: archive.zip'); 
					break;

					case 'sending_zip': {
						if (create_zip('html')) {
							if (isset($_GET['email'])) {
								xmail('admin@'.$_SERVER['HTTP_HOST'], $_GET['email'], 'Верстка сайта', 'Верстка сайта с домена '.$_SERVER['HTTP_HOST'], 'archive.zip');
								header('Location: index.php');
							}
						}
					} break;

				}
			}
		?>

		<!-- <form action="index.php" method="get">
			<input type="text" name="email" />
			<button name="action" value="sending_zip">Отправить архив на почту</button>
		</form>

		<form action="index.php" method="get">
			<button name="action" value="download_zip">Скачать архив с версткой</button>
		</form> -->

	</body>
</html>		