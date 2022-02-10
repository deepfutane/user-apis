<?
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'mail.php';
// get database connection
include_once 'connection.php';
  
// instantiate user object
include_once 'user.php';
  
$database = new Database();
$db = $database->getConnection();
  
$user = new User($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));

// make sure data is not empty
if(
    !empty($data->name) &&
    !empty($data->email) &&
    !empty($data->mobile) &&
    !empty($data->message)
){
  
    // set user property values
    $user->name = $data->name; //Deepali
    $user->email = $data->email;
    $user->mobile = $data->mobile;
    $user->city = $data->city;
    $user->message = $data->message;
    $user->image = $data->image;
  
    // create the product
    if($user->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // sendemail($data->userEmail, "Congratulations.....");
        // tell the user
        echo json_encode(array("message" => "User was created successfully."));
    }
  
    // if unable to create the product, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(500);
        // 500 - Internal Server Error
  
        // tell the user
        echo json_encode(array("message" => "Unable to create User."));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create User. Data is incomplete."));
}
?>
