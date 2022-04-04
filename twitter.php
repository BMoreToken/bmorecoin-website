<?PHP
require __DIR__ . '/vendor/autoload.php';

use Coderjerk\BirdElephant\BirdElephant;
    $credentials = array(
        'bearer_token' => getenv('bearer_token'),
        'consumer_key' => getenv('consumer_key'),
        'consumer_secret' => getenv('consumer_secret'),
        'token_identifier' => getenv('token_identifier'),
        'token_secret' => getenv('token_secret'),
    );
    $twitter = new BirdElephant($credentials);


$followers = $twitter->user('bmorecoin')->followers();
echo "<pre>";
print_r($followers);
echo "</pre><hr>";

// Custom Code
function getPage($url){
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, $url);
    curl_setopt ($curl, CURLOPT_USERAGENT, sprintf("McGuire Auto Data Entry/%d.0",rand(4,50)));
    curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . getenv('bearer_token')));
    $html = curl_exec ($curl);
    curl_close ($curl);
    return $html;
}

$tweets_json = getPage("https://api.twitter.com/2/tweets/search/recent?query=This+is+a+test+of+the+faucet+system");

$tweets = json_decode($tweets_json, true);
    
echo "<pre>";
print_r($tweets);
echo "</pre><hr>";

?>
