<p style="font-family:tahoma;">Enter Your Access token For Instagram Information:</p>
<form action="" method="post">
	<input type="text" name="access_token" >
	<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['access_token'],$_POST['submit'])){
	$access_token = $_POST['access_token']; //access_token
	$matches = array();
	$result = preg_match("/([0-9]+)\./",$access_token,$matches);
	$user_id = $matches[1]; //user_id
	$url="https://api.instagram.com/v1/users/{$user_id}/media/recent?access_token={$access_token}";
	//-----------------------------------------------------------------
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_HEADER,FALSE);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
	$json = curl_exec($curl);
	$object = json_decode($json);
	curl_close($curl);
	//-----------------------------------------------------------------
	$user_id = $object->data[0]->user->id;
	$full_name = $object->data[0]->user->full_name;
	$username = $object->data[0]->user->username;
	$post_count = count($object->data);
	$posts_like = 0;
	foreach($object->data as $post){
		$posts_like += $post->likes->count;
	}
	$posts_comment = 0;
	foreach($object->data as $post){
		$posts_comment += $post->comments->count;
	}
	//-----------------------------------------------------------------
	?>
	<h1 style="font-family:tahoma;">Instagram Information:</h1>
	<p style="font-family:tahoma;">UserID: <?php echo $user_id; ?></p>
	<p style="font-family:tahoma;">FullName: <?php echo $full_name; ?></p>
	<p style="font-family:tahoma;">Username: <?php echo $username; ?></p>
	<p style="font-family:tahoma;">PostCount: <?php echo $post_count; ?></p>
	<p style="font-family:tahoma;">AllPostLike: <?php echo $posts_like; ?></p>
	<p style="font-family:tahoma;">AllPostComment: <?php echo $posts_comment; ?></p>
	<?php
}
	
	
	
	
	