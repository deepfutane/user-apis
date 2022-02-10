<?php
class User{
  
    // database connection and table name
    private $conn;
    private $table_name = "user";
  
    // object properties - Table columns
    public $name;
    public $email;
    public $mobile;
    public $city;
    public $message;
    public $image;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    public function read(){
        $query = "SELECT * FROM ". $this->table_name;
        
         // prepare query statement
        $stmt = $this->conn->prepare($query);
    
        // execute query
        $stmt->execute();
    
        return $stmt;
    }

    function create(){
  
        // query to insert record
        $query = "INSERT INTO user
                    SET
                    name=:Name, 
                    email=:Email, 
                    city=:CityName, 
                    mobile=:Mobile,
                    message=:Message,
                    image=:Image";
        
        // prepare query
        $stmt = $this->conn->prepare($query);
      
        // sanitize
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->mobile=htmlspecialchars(strip_tags($this->mobile));
        $this->city=htmlspecialchars(strip_tags($this->city));
        $this->message=htmlspecialchars(strip_tags($this->message));
        $this->image=htmlspecialchars(strip_tags($this->image));
       
        // bind values
        $stmt->bindParam(":Name", $this->name);
        $stmt->bindParam(":Email", $this->email);
        $stmt->bindParam(":CityName", $this->city);
        $stmt->bindParam(":Mobile", $this->mobile);
        $stmt->bindParam(":Message", $this->message);
        $stmt->bindParam(":Image", $this->image);
      
        // execute query
        if($stmt->execute()){
            return true;
        }
      
        return false;
          
    }
    
}
?>