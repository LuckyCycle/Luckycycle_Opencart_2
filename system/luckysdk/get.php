<a href="get.php">SHOW</a> | <a href="poke.php">POKE</a> | <a href="draw.php">DRAW</a>
<hr />

<?php

require_once './lucky.php';

// $api_key = '9c936dbf1cfa00bc11a8961238d34fb1';
$api_key = 'ee1b37a0577f160c7dc1deb4feb6ddffbae5dddf05874107c7eb029ca1d8f457';

if (isset($_GET['operation_id'])) {

	$op = $_GET['operation_id'];
	$api_key = $_GET['api_key'];

	if ($op) {

		$req = new LuckyCycleApi('https://www.luckycycle.com');
		$req->setApiKey($api_key);
		$req->setOperationId($op);

		//$data = array();
		//$headers = array( 'X-LuckyApiKey'  =>  $api_key );
		//$path = '/api/v1/operations/' . $op . '/show';
		//$poke = $req->get( $path , $data, $headers );

		$poke = $req->show();

	}
} else {
	echo("Enter an operation id");
}

?>


Enter an operation id:

<form action="get.php">
	<input type="text" name="api_key" placeholder="Api Key">
	<input type="text" name="operation_id" placeholder="Operation id">
	<input type="submit">
</form>



<pre>
<? print_r($poke) ?>
</pre>
