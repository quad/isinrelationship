<?php

require_once 'facebook.php';
require_once 'accept-to-gettext.inc.php';

function get_fb() {
  $appapikey = '60237d0a13480c24eb8f3eccf42d193e';
  $appsecret = 'e0504baa721280e66ed5c2f0148d8de2';

  $facebook = new Facebook($appapikey, $appsecret);
  $facebook->require_login();

  return $facebook;
}

// Accepts: A Facebook UID
// Returns: Whether or they are in a relationship
function isInRelationship($uid = 27203077) {
  global $yes, $no;

  $facebook = get_fb();

  $details = $facebook->api_client->users_getInfo($uid, array('name', 'relationship_status'));

  $gt = al2gt(array_keys($yes));
  $lang = $gt['lang'];
  $answer = ($details[0]['relationship_status'] == "In a Relationship") ? $yes[$lang] : $no[$lang];

  return array('name' => $details[0]['name'], 'answer' => $answer);
}
 
// These arrays are IsItChristmas' sole IP
$yes = array(
  "en" => "YES", // English
  "fr" => "OUI", // French
  "nl" => "JA", // Dutch
  "af" => "JA", // Afrikaans
  "es" => "SÍ", // Spanish
  "pl" => "TAK", // Polosj
  "sv" => "JA", // Swedish
  "lt" => "TAIP", // Lithuanian
  "de" => "JA", // Germany
  "ga" => "IS EA", // Irish
  "ja" => "はい", // Japanese
  "no" => "JA", // Norwegian
  "it" => "SÌ", // Italian
  "hu" => "IGEN", // Hungarian
  "da" => "JA", // Danish
  "fi" => "KYLLÄ", // Finnish
  "ro" => "DA", // Romanian
  "pt" => "SIM", // Portugese
  "et" => "JAA", // Estonian
  "hr" => "DA", // Croatian

/*
  "CN" => "SHI", // China (Mandarin)
  "IN" => "HAJI", // India
  "SG" => "YA", // Singapore
  "PH" => "ÓO", // Phillipines
  "IL" => "KEN", // Israel
  "KR" => "NE", // Korea
  "CZ" => "ANO", // Czech Republic
  "SK" => "ÁNO", // Slovakia
  "GR" => "NE", // Greece
  "IS" => "JÁ", // Iceland
  "VE" => "SÍ", // Venezuela
  "SI" => "DA", // Slovenia
  "TH" => "CHAI", // Thailand
  "LV" => "JA", // Latvia
  "RU" => "DA", // Russia
  "HK" => "HAI", // Hong Kong (Cantonese)
  "TR" => "EVET", // Turkey
  "MY" => "YA", // Malaysia
  "CY" => "NE", // Cyprus
  "BM" => "SIM", // Bermuda
  "DM" => "WÍ", // Dominica (Creole)
  "HT" => "WÍ", // Haiti (Creole)
  "PY" => "HÊE", // Paraguay
  "VN" => "ĐÚNG" // Vietnam
*/
);

// This array is IsItChristmas' sole IP
$no = array(
  "en" => "NO", // English
  "fr" => "NON", // French
  "nl" => "NEE", // Dutch
  "af" => "NEE", // Afrikaans
  "es" => "NO", // Spanish
  "pl" => "NIE", // Polish
  "sv" => "NEJ", // Swedish
  "lt" => "NO", // Lithuanian
  "de" => "NEIN", // German
  "ga" => "NÍ HA", // Irish
  "ja" => "いいえ", // Japanese
  "no" => "NEI", // Norwegian
  "it" => "NO", // Italian
  "hu" => "NEM", // Hungarian
  "da" => "NEJ", // Danish
  "fi" => "EI", // Finnish
  "ro" => "NU", // Romanian
  "pt" => "NÃO", // Portugese
  "et" => "EI", // Estonian
  "hr" => "NE", // Croatian

/*
  "CN" => "BÙ SHÌ", // China (Mandarin)
  "IN" => "NAHIM", // India
  "SG" => "TIDAK", // Singapore
  "PH" => "HINDI", // Phillipines
  "IL" => "LO", // Israel
  "KR" => "ANIYO", // Korea
  "CZ" => "NE", // Czech Republic
  "SK" => "NIE", // Slovakia
  "GR" => "OHI", // Greece
  "IS" => "NEI", // Iceland
  "SI" => "NE", // Slovenia
  "TH" => "MAI CHAI", // Thailand
  "LV" => "NÉ", // Latvia
  "RU" => "NYET", // Russia
  "HK" => "M̀H HAIH", // Hong Kong (Cantonese)
  "TR" => "HAYIR", // Turkey
  "MY" => "TIDAK", // Malaysia
  "CY" => "OHI", // Cyprus
  "BM" => "NÃO", // Bermuda
  "DM" => "NON", // Dominica (Creole)
  "HT" => "NON", // Haiti (Creole)
  "VN" => "SAI" // Vietnam
*/
);

?>
