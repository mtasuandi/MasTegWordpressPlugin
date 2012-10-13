<?php

function masteg_twitter_text(){
	echo "";
}

function masteg_twitter_tweet(){
	$options = get_option('masteg_twitter');
	echo "<textarea id='masteg_twitter_tweet' name='masteg_twitter[masteg_twitter_tweet]' cols='60' rows='3'></textarea>";
}

function masteg_twitter_images(){
	$options = get_option('masteg_twitter');
	echo "<input id='masteg_twitter_images' name='masteg_twitter_images' type='file'/><p/>";
	echo '
	<div id="container">
	<div class="buttons">
	  <button class="action blue"><span class="label">Tweet</span></button>
	</div>
	';
}

function masteg_twitter_validate($input){
	
	$options = get_option('masteg_twitter');
	
	$options['masteg_twitter_tweet']		= $input['masteg_twitter_tweet'];
	$options['masteg_twitter_images_name']		= $_FILES['masteg_twitter_images']['name'];
	$options['masteg_twitter_images_tmp_name']		= $_FILES['masteg_twitter_images']['tmp_name'];
	$options['masteg_twitter_images_type']		= $_FILES['masteg_twitter_images']['type'];
	
	if(!empty ($options['masteg_twitter_tweet'])){

		require 'twitter/tmhOAuth.php';
		require 'twitter/tmhUtilities.php';
		$tmhOAuth = new tmhOAuth(array(
		  'consumer_key'    => 'CONSUMER_KEY',
		  'consumer_secret' => 'CONSUMER_SECRET',
		  'user_token'      => 'USER_TOKEN',
		  'user_secret'     => 'USER_SECRET',
		));

		$trends_url = "http://api.twitter.com/1/statuses/followers/masteg_.json";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $trends_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$curlout = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($curlout, true);

			foreach($response as $friends){
				$thumb = $friends['profile_image_url'];
				$url = $friends['screen_name'];
				$name = $friends['name'];
			}
		
		if($options['masteg_twitter_images_name'] != ""){
			$tweet = $options['masteg_twitter_tweet'];
			$image = "@{$_FILES['masteg_twitter_images']['tmp_name']};type={$_FILES['masteg_twitter_images']['type']};filename={$_FILES['masteg_twitter_images']['name']}";
			//$image = "@{$options['masteg_twitter_images_tmp_name']};type={$options['masteg_twitter_images_type']};filename={$options['masteg_twitter_images_name']}";
			
			$code = $tmhOAuth->request(
			'POST',
			'https://upload.twitter.com/1/statuses/update_with_media.json',
			array(
				'media[]'  => $image,
				'status'   => $tweet,
			),true,true);

				if($code == 200){
					//tmhUtilities::pr(json_decode($tmhOAuth->response['response']));
					echo "Tweet sent!";
				}else{
					//tmhUtilities::pr($tmhOAuth->response['response']);
					echo "Something wrong!";
				}
		}else{
			$tweet = $options['masteg_twitter_tweet'];
			
			$code = $tmhOAuth->request(
			'POST', $tmhOAuth->url('1/statuses/update'), array(
			'status' => $tweet
			));

				if ($code == 200) {
				  //tmhUtilities::pr(json_decode($tmhOAuth->response['response']));
				  echo "Tweet sent!";
				} else {
				  //tmhUtilities::pr($tmhOAuth->response['response']);
				  echo "Something wrong!";
				}
		}
	
	}
	
	return null;//$options;
}
?>