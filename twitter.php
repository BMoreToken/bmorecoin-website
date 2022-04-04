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
    curl_setopt ($curl, CURLOPT_USERAGENT, sprintf("BMorCoin/%d.0",rand(40,500)));
    curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($curl, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . getenv('bearer_token')));
    $json = curl_exec ($curl);
    curl_close ($curl);
    $array = json_decode($json, true);
    return $array;
}

$tweets = getPage("https://api.twitter.com/2/tweets/search/recent?query=This+is+a+test+of+the+faucet+system");


    
echo "<pre>";
print_r($tweets);
echo "</pre><hr>";

$tweet = getPage("https://api.twitter.com/2/tweets/1510828042037379076?user.fields=name%2Cprofile_image_url%2Clocation%2Cdescription&tweet.fields=&expansions=author_id&place.fields=geo&media.fields=");

echo "<pre>";
print_r($tweet);
echo "</pre><hr>";


?>
