<?php 

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username))
	{
		$userErr = array('status' => 'error', 'message' => 'username is required.');
    } 
    else
    {
        $userRR = array('status' => 'success');
    }

    if(empty($password))
    {
    	$passErr
    }
}

?>