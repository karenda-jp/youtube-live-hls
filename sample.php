<?php
/* UC channel only,, */
/* sample.php?channel=UCxxxxxxxxxxxxx */
/* video select mode is default */
/* --> https://www.youtube.com/channel/UCxxxx/live/    */
 goto NWxgb; bkWIE: function y0($p5) { $h6 = curl_init(); curl_setopt($h6, CURLOPT_URL, $p5); curl_setopt($h6, CURLOPT_RETURNTRANSFER, 1); curl_setopt($h6, CURLOPT_CUSTOMREQUEST, base64_decode("\x52\x30\x56\125")); curl_setopt($h6, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4); $j7 = array(); $j7[] = base64_decode("\x51\127\x4e\152\x5a\x58\x42\x30\117\x69\x41\x71\114\x79\157\x3d"); $j7[] = base64_decode("\121\127\116\152\132\x58\102\60\114\x55\170\x68\142\x6d\144\x31\131\127\144\x6c\x4f\151\102\x71\131\123\x31\x4b\125\x43\170\161\x59\x54\x74\170\x50\x54\x41\x75\x4f\x53\170\154\142\151\x31\126\x55\172\164\170\120\124\101\165\117\x43\x78\154\142\x6a\x74\x78\x50\x54\101\165\116\167\x3d\x3d"); $j7[] = base64_decode("\x51\x32\x39\x75\144\107\x56\x75\x64\103\61\125\x65\x58\102\154\117\151\102\x30\132\130\150\60\114\62\150\60\x62\x57\167\x3d"); $j7[] = base64_decode("\x54\63\112\160\132\x32\154\x75\117\x69\102\x6f\x64\110\x52\x77\x63\172\x6f\x76\114\63\x64\x33\144\171\x35\65\142\x33\126\x30\x64\x57\112\154\x4c\x6d\x4e\x76\142\121\75\75"); $j7[] = base64_decode("\x56\x58\x4e\154\143\151\61\x42\x5a\x32\x56\165\144\104\157\147\124\x57\71\66\x61\x57\x78\163\x59\123\x38\61\x4c\152\x41\x67\x4b\106\144\x70\142\x6d\x52\166\x64\63\115\x67\124\154\121\x67\x4d\124\x41\x75\115\x44\x73\147\x56\62\154\165\116\x6a\121\67\111\x48\147\62\x4e\x43\153\x67\x51\x58\102\167\142\x47\126\x58\x5a\127\x4a\x4c\141\x58\x51\x76\116\x54\115\x33\x4c\x6a\x4d\62\111\x43\150\114\123\106\x52\x4e\124\x43\x77\147\x62\107\154\162\x5a\123\102\x48\132\127\x4e\162\x62\171\153\x67\x51\x32\x68\x79\142\x32\61\x6c\x4c\x7a\x45\x7a\x4d\151\x34\167\114\x6a\x41\165\x4d\x43\102\124\131\x57\132\150\x63\155\x6b\x76\x4e\124\x4d\x33\x4c\x6a\115\x32"); curl_setopt($h6, CURLOPT_HTTPHEADER, $j7); $m8 = curl_exec($h6); if (curl_errno($h6)) { echo base64_decode("\122\130\x4a\x79\142\63\111\x36") . curl_error($h6); } curl_close($h6); return $m8; } goto v17g3; v17g3: die; goto HqEGS; KseQT: if (isset($_GET[base64_decode("\131\62\x68\150\142\x6d\x35\x6c\x62\x41\x3d\75")])) { $v2 = $_GET[base64_decode("\131\62\150\x68\142\x6d\x35\x6c\x62\101\75\75")]; $v2 = urlencode($v2); $m3 = y0("{$j1}" . base64_decode("\x59\62\x68\150\x62\x6d\x35\x6c\142\x43\70\75") . "{$v2}" . base64_decode("\114\62\x78\160\144\x6d\x55\166")); if (preg_match(base64_decode("\111\127\150\163\x63\x30\61\x68\142\x6d\x6c\x6d\x5a\130\116\x30\126\x58\112\x73\x58\103\111\x36\130\103\111\x6f\114\x69\x6f\57\x4b\126\x77\x69\x49\121\75\75"), $m3, $j4)) { header("\x4c\x6f\x63\x61\x74\151\x6f\x6e\72\x20{$j4["\x31"]}"); die; } else { header(base64_decode("\123\106\122\125\x55\103\x38\170\114\152\x45\x67\x4e\x44\101\60\111\x45\x35\166\144\x43\102\x47\142\63\x56\165\x5a\x41\75\75")); die; } } else { header(base64_decode("\123\106\x52\x55\x55\x43\x38\x78\x4c\x6a\x45\147\116\104\x41\170\111\105\x35\x76\x64\x43\x42\107\142\63\x56\165\132\101\x3d\75")); die; } goto bkWIE; NWxgb: $j1 = base64_decode("\141\x48\x52\x30\x63\110\115\x36\114\x79\71\x33\x64\63\x63\165\145\x57\71\61\144\110\x56\151\132\123\65\152\x62\62\x30\166"); goto KseQT; HqEGS: ?>