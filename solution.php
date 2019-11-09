<?php

// Reads the variables sent via POST from the gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"]; //input/response from the user


//Easier to use navigate using Case statements
if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Please select a language \n";
    $response .= "1. English \n";
    $response .= "2. Setswana";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Welcome to the Human-Wildlife Conflict Coexistence Services \n";
    $response .= "1. Alerts \n";
    $response .= "2. Reports \n";
	$response .= "3. Tips \n";
	$response .= "4. Feedback \n";
	$response .= "0. Back \n";

} else if ($text == "2") {
	//TODO
	// Repeat else if statements with options in the desired language
	
} else if ($text == "1*1") {
    // Business logic for second level response
	// Better to get the data from the database
    $response = "END Large number of elephants spotted near kazungula area. \n";

} else if($text == "1*2") { 
    // This is a second level response where the user selected 1 in the first instance
	$response = "CON Please choose and action below to report \n";
    $response .= "1. Illegal wildlife activity \n";
	$response .= "2. Wildlife sighting \n";
	$response .= "0. Back \n";

} else if ( $text == "1*3" ) {
    // This is a second level response where the user selected 1 in the first instance
	$response = "CON \n";
	$response .= "1. Protection of crops \n";
	$response .= "2. Protection of livestock \n";
	$response .= "3. Encounters with wildlife \n";
	$response .= "0. Back \n";	
	
} else if ( $text == "1*4" ) {
	//we use CON here to continue with the current session
	$response = "CON \n";
	// This is a second level response where the user selected 1 in the first instance
	$response .= "Please provide us with feedback on what actions have worked and what didn't \n";
	
}  
else if ($text == "1*4*1") {
	// Use the END parameter to end or the terminate.
	// try and provide back capabilities were possible.
	$response = "END Thank you for your feedback";
	
} else if ( $text == "1*2*1" ) {
	// This is a third level response where the user selected first in the second instance of the first level
	$response = "END Thank you .$phoneNumber for making the report, an official will get back to you shortly. \n";
	
} else if ( $text == "1*2*2" ) {
	//Option to provide the user with a back functionality to avaoid restarting a new session
	$response = "END Thank you .$phoneNumber for making the report, an official will get back to you shortly. \n";
	
} else if ( $text == "1*2*0" ) {
	//TODO
	//Back functionality
	//Introduce a way to easily keep track of what level the user is in to easily provide the back feature.
	
} else if ( $text == "1*3*1" ) {
	$response = "CON \n";
	$response .= "1. Against Elephants \n";
	$response .= "2. Against Goats \n";
	$response .= "3. Against Cows \n";
	$response .= "0. Back \n";	
	
} else if ( $text == "1*3*2" ) {
	$response = "CON \n";
	$response .= "1. Against Lions \n";
	$response .= "2. Against Hyenas \n";
	$response .= "3. More \n";
	$response .= "0. Back \n";	
	
} else if ( $text == "1*3*3" ) {
	$response = "CON \n";
	$response .= "1. Lion \n";
	$response .= "2. Elephant \n";
	$response .= "3. Rhinos \n";
	$response .= "0. Back \n";	
	
} else if ( $text == "1*3*1*1" ) {
	//best you get the data from the database
	$response = "END 1. Plant chilli peppers with your food garden and field crops. \n2. Plant crops that elephants don't like \n3. Create noise \n4. Add some beehives on the perimeters of your crops or food garden \n";
		
} else if ( $text == "1*3*1*2" ) {
	//TODO
	//similar to the above else if statements.
		
} else if ( $text == "1*3*1*3" ) {
	//TODO
		
} else if ( $text == "1*3*1*0" ) {
	//TODO
		
} else if ( $text == "1*3*2*1" ) {
	$response = "END 1. Predator-proof bomas. \n2. Painting eyes on lifestock \n3. Etc \n4. Etc \n";
		
} else if ( $text == "1*3*2*2" ) {
	//TODO
		
} else if ( $text == "1*3*2*3" ) {
	//TODO
		
} else if ( $text == "1*3*2*0" ) {
	//TODO
		
} else if ( $text == "1*3*3*1" ) {
	//again better to get the data from a remote database
	$response = "END 1. Do not panic. \n2. Do not run \n3. Retreat slowly. Do not turn your back \n4. Be prepared again. The lion may charge you again \n";
		
} else if ( $text == "1*3*3*2" ) {
	//TODO
		
} else if ( $text == "1*3*3*3" ) {
	//TODO
		
} else if ( $text == "1*3*3*0" ) {
	//TODO	
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
?>
