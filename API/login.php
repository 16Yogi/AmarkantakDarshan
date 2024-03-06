<?php
   $con = mysqli_connect("localhost","root","","amarkantak");
   if($con){
   //  echo "Connection successful";
   }else{
   //  echo "Connection failed";
   }


    require_once'vendor/autoload.php';

    $clientID = '142496647645-mvgbiqvptph6b26qtftv57ld97gi7gsn.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUrl = 'http://localhost/API/login.php';

    // creating client request to google

    $client = new Google_Client();
    $client->setClientID($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUrl);
    $client->addScope('profile');
    $client->addScope('email');

    if(isset($_GET['code'])){
       $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
       $client->setAccessToken($token);

       //Getting user Profile
       $gauth = new Google_Service_Oauth2($client);
       $google_info=$gauth->userinfo->get();
       $email = $google_info->email;
       $name = $google_info->name;
       
       $sql = "INSERT INTO `glogin`(`googleusername`, `googleemail`) VALUES ('$name','$email')";
       $qry = mysqli_query($con,$sql);
       if($qry){
        echo "<a href='https://heelo.mobi/'>Go to home page</a>";
       }else{
        echo "Data failed";
       }
    //    echo "welcome".$name."your are registered using email:".$email;
    }else{
    	// echo "<a href='".$client->createAuthUrl()."'>Login with Goole</a>";
    }


?>