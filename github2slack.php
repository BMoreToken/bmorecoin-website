<?PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// https://docs.github.com/en/developers/webhooks-and-events/webhooks/webhook-events-and-payloads
function slack_general($msg,$room){
	$room = str_replace("'",'-',strtolower(str_replace(' ','-',$room)));
	$msg = urlencode($msg);
	$token = getenv('token');
	$url = "https://slack.com/api/channels.create?token=$token&name=$room&pretty=1";
	$curl = curl_init();
	curl_setopt ($curl, CURLOPT_URL, $url);
	curl_setopt ($curl, CURLOPT_TIMEOUT,"2");
	curl_setopt ($curl, CURLOPT_USERAGENT, sprintf("BMoreCoin/%d.0",rand(180,400)));
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
	$html = curl_exec ($curl);
	curl_close ($curl);
	$url = "https://slack.com/api/chat.postMessage?token=$token&channel=$room&text=$msg";
	$curl = curl_init();
	curl_setopt ($curl, CURLOPT_URL, $url);
	curl_setopt ($curl, CURLOPT_TIMEOUT,"2");
	curl_setopt ($curl, CURLOPT_USERAGENT, sprintf("BMoreCoin/%d.0",rand(180,400)));
	curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
	$html = curl_exec ($curl);
	curl_close ($curl);
	if (empty($html)){
		return $url;
	}
	return $html;
}
slack_general('GITHUB Activity',"bmorecoin");

// Takes raw json from the post
$json = file_get_contents('php://input');

slack_general(strip_tags($json),"bmorecoin");

// Converts it into a PHP array
$array = json_decode($json, true);

if (is_array($array)){
	// convert array to string
	ob_start();
	print_r($array);
	$string = ob_get_clean();
	slack_general($string,"bmorecoin");
}
?>
?>
