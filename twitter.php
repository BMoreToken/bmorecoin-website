<?PHP
// https://github.com/danieldevine/bird-elephant
require __DIR__ . '/vendor/autoload.php';
  
use Coderjerk/BirdElephant/BirdElephant;

//your credentials, should be passed in via $_ENV or similar, don't hardcode.
$credentials = array(
    'bearer_token' => xxxxxx,
    'consumer_key' => xxxxxx,
    'consumer_secret' => xxxxxx,
    'token_identifier' => xxxxxx,
    'token_secret' => xxxxxx,
);

//instantiate the object
$twitter = new BirdElephant($credentials);

//get a user's followers using the handy helper methods
$followers = $twitter->user('coderjerk')->followers();

//pass your query params to the methods directly
$following = $twitter->user('coderjerk')->following([
    'max_results' => 20,
    'user.fields' => 'profile_image_url'
]);

// You can also use the sub classes / methods directly if you like:
$user = new UserLookup($credentials);
$user = $user->getSingleUserByID('2244994945', null);

?>
