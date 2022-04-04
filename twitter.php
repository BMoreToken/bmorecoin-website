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
echo "</pre>";

$params = [
    'query' => 'This is a test of the faucet system. Tracking Tweet vs Retweet.',
    'tweet.fields' => 'attachments,author_id,created_at',
    'expansions'   => 'attachments.media_keys',
    'media.fields' => 'public_metrics,type,url,width',
    'max_results'  => 1000,
];
$tweets->search->recent($params);

echo "<pre>";
print_r($tweets);
echo "</pre>";

?>
