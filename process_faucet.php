 <!-- jQuery 3.6.0 -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> 
 <script>
      $.ajaxSetup({
        url: "https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php",
        timeout: 120000
      });
    </script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<?PHP 
$db = mysqli_connect(getenv('db_host'),getenv('db_user'),getenv('db_pass'),'bmorecoinweb') or die(); 
$q = "select * from tweets where status = 'approved'";
$r = $db->query($q);
while ($d = mysqli_fetch_array($r,MYSQLI_ASSOC)){
  echo "<li>SENDING 1,000.00000000 BALTx to $d[address] ($d[id])</li>";
    ?>
              <form action='https://www.mdwestserve.com/BMoreCoin/google_wallet_api.php' id='faucet_form<?PHP echo $d['id'];?>' name='faucet_form<?PHP echo $d['id'];?>' class="d-flex">
                   <button id='faucet_button<?PHP echo $d['id'];?>' class="btn btn-outline-success">SEND 1,000 BALTx to <?PHP echo $d['address'];?></button>
                    <script>
              document.getElementById("faucet_button<?PHP echo $d['id'];?>").addEventListener("click", function () {
                gtag("event", "earn_virtual_currency", {
                  virtual_currency_name: "BALTx",
                  value: 1000
                });
              });
            </script>
                  </form>                 
                  <div id='faucet<?PHP echo $d['id'];?>'></div>
                  <script>
                       $("#faucet_form<?PHP echo $d['id'];?>").submit(function(event) {
                        event.preventDefault();
                        $('#faucet').text('Received... Waiting for TX Confirmation...');
                        var $form = $(this),
                          url = $form.attr('action');
                        var posting = $.post(url, {
                          address: <?PHP echo $d['address'];?>,
                          action: 'faucet'
                          

                        });

                        /* Alerts the results */
                        posting.done(function(data) {
                          $('#faucet<?PHP echo $d['id'];?>').text('TX Confirmed');
                          let element99 = document.getElementById("faucet");
                          element99.innerHTML = data;
                        });
                        posting.fail(function() {
                          $('#faucet<?PHP echo $d['id'];?>').text('Website Timeout - Reload to See Transfer');
                        });
                      });
                  </script>
<?PHP
 // sleep(5);
}

?>
