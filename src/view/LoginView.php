<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include("../lib/material-design-css.php"); ?>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center" style="height: 100vh;">
        <div class="d-flex flex-row justify-content-center">
            <div class="card" style="max-width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <form action="../routes/Router.php?action=login" method="POST">
                        <div class="form-outline mb-3">
                            <input type="text" name="username" id="username" class="form-control" />
                            <label class="form-label" for="username">Username</label>
                        </div>
                        <div class="form-outline mb-3">
                            <input class="form-control" type="password" name="password" id="password" />
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("../lib/material-design-js.php"); ?>

   <?php
    <?php
$channels = [
	["abbreviation"=>"TELCEL","name"=>"TELCEL"],
    ["abbreviation"=>"MOVISTAR","name"=>"MOVISTAR"],
    ["abbreviation"=>"AT&T","name"=>"AT&T"],
    ["abbreviation"=>"ALESTRA","name"=>"ALESTRA"],
    ["abbreviation"=>"IZZI","name"=>"IZZI"],
    ["abbreviation"=>"ALTAN","name"=>"ALTAN"],
];
$customerChannels=["TELCEL", "MOVISTAR", "AT&T"];

$callbackFunction=function($data) use($customerChannels){
	$index = array_search($data['name'], $customerChannels);
	$isInArray = $index>=0;
	//echo"----\n";
	echo $isInArray;
	echo"---- \n";
	print_r($data);
	return $index >=0 ? $data['channel'] = $customerChannels[$index] : $data;
};



$data=array_map($callbackFunction, $channels);
echo "<pre>";
print_r($data);
echo "</pre>";
    ?> 
    
</html>
