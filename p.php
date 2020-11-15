<?php
function curl($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; en-US) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/9.0.597.15 Safari/534.13");
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
}
system("clear");
echo"Hello World ";
echo"\n✬   ✬  ✬   ✬ ✬   ✬  ✬   ✬ 
     ╔════════════╗     
     ║  ALIFKF01. ║
     ║NIRVANA TEAM║
     ╚════════════╝
✬   ✬  ✬   ✬ ✬   ✬  ✬   ✬ 
";
echo"╔═══════════════════╗
 VIDOE FB DOWNLOADER 
╚═══════════════════╝          ";

echo "                                                                                                    
 
╔═╦╦══╦═╦╗─╔╦══╦═╦╦══╗╔══╦═╦══╦═╦═╗
║║║╠║║╣╬║╚╦╝║╔╗║║║║╔╗║╚╗╔╣╦╣╔╗║║║║║
║║║╠║║╣╗╬╗║╔╣╠╣║║║║╠╣║─║║║╩╣╠╣║║║║║
╠╩═╩══╩╩╝╚═╝╚╝╚╩╩═╩╝╚╝─╚╝╚═╩╝╚╩╩═╩╝V1";
echo "
╠══➤ LINK: ";
$v = trim(fgets(STDIN, 1024));
echo "╠══➤ NAMA VIDEO: ";
$name = trim(fgets(STDIN, 1024));
$url = str_replace('www', 'mbasic', $v);
$s = curl($url);
//echo $s;
$vurl = preg_match('/<a href=\"\/video_redirect\/\?src\=(.*?)\"/ims', $s, $matches) ? $matches[1] : null;
$vu = urldecode($vurl);
echo "╠═══════════╗
║DOWNLOADING║";
echo"\n╚═══════════╝";
$d = 'wget -O "' . $name . '.mp4" --user-agent="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1092.0 Safari/536.6" "' . $vu . '" -q --show-progress';
system($d);
echo "\n\n╔═══════════════════════════╗
║ Done.. Saved As : " . $name . ".mp4.  ║";
echo"\n╚═══════════════════════════╝\n\n";
echo " <═════════════════════════════════════>
 Author:AkF01.LtD|Team:NIRVANA TEAM\n\n";
exit(0);
?>