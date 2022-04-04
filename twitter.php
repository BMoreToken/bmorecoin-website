<?PHP
require __DIR__ . '/vendor/autoload.php';

use Coderjerk\BirdElephant\BirdElephant;

if (empty($_GET['debug'])){
    // https://github.com/danieldevine/bird-elephant

    //your credentials, should be passed in via $_ENV or similar, don't hardcode.
    $credentials = array(
        'bearer_token' => getenv('bearer_token'),
        'consumer_key' => getenv('consumer_key'),
        'consumer_secret' => getenv('consumer_secret'),
        'token_identifier' => getenv('token_identifier'),
        'token_secret' => getenv('token_secret'),
    );

    //instantiate the object
    $twitter = new BirdElephant($credentials);

    //get a user's followers using the handy helper methods
    $followers = $twitter->user('bmorecoin')->followers();

    //pass your query params to the methods directly
   // $following = $twitter->user('coderjerk')->following([
   //     'max_results' => 20,
   //     'user.fields' => 'profile_image_url'
   // ]);

    // You can also use the sub classes / methods directly if you like:
    //$user = new UserLookup($credentials);
    //$user = $user->getSingleUserByID('2244994945', null);

    print_r($followers);
    
    
}else{
    echo getenv('consumer_key');
}
?>
