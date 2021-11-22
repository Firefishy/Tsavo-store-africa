<?php
//For filter
$connect = new PDO("mysql:host=localhost;dbname=tsavo", "root", "");

//For Followers
$cone = mysqli_connect("localhost","root","","tsavo");
if (!$cone) {
	die("Connection failed: " . mysqli_connect_error());
}
//Others general
class Database{
    private $server = "mysql:host=localhost;dbname=tsavo";
	private $username = "root";
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	private $host  = 'localhost';
    private $user  = 'root';
    private $database  = "tsavo";
	private $itemUsersTable = 'users';
	private $itemTable = 'products';
    private $itemRatingTable = 'item_rating';
	private $dbConnect = false;
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "There is some problem in connection: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 


    public function __construct(){
        if(!$this->dbConnect){
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	
	
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error($this->dbConnect));
		}
		$data= array();
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]=$row;
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error($this->dbConnect));
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}

	public function userLogin($email, $password){
		$sqlQuery = "
			SELECT * 
			FROM ".$this->itemUsersTable." 
			WHERE email='".$email."' AND password='".$password."'";
        return  $this->getData($sqlQuery);
	}		
	public function getItemList(){
		$sqlQuery = "
			SELECT * FROM ".$this->itemTable;
		return  $this->getData($sqlQuery);	
	}
	public function getItem($itemId){
		$sqlQuery = "
			SELECT * FROM ".$this->itemTable."
			WHERE slug='".$itemId."'";
		return  $this->getData($sqlQuery);	
	}
	public function getItemRatingLimit($itemId){
		$sqlQuery = "
			SELECT r.ratingId, r.itemId, r.userId, u.lastname, u.photo, r.ratingNumber, r.title, r.comments, r.created, r.modified
			FROM ".$this->itemRatingTable." as r
			LEFT JOIN ".$this->itemUsersTable." as u ON (r.userId = u.id)
			WHERE r.itemId = '".$itemId."'
			ORDER BY id ASC LIMIT 3";
		return  $this->getData($sqlQuery);		
	}
	public function getItemRating($itemId){
		$sqlQuery = "
			SELECT r.ratingId, r.itemId, r.userId, u.lastname, u.photo, r.ratingNumber, r.title, r.comments, r.created, r.modified
			FROM ".$this->itemRatingTable." as r
			LEFT JOIN ".$this->itemUsersTable." as u ON (r.userId = u.id)
			WHERE r.itemId = '".$itemId."'
			ORDER BY id ASC";
		return  $this->getData($sqlQuery);		
	}
	public function getRatingAverage($itemId){
		$itemRating = $this->getItemRating($itemId);
		$ratingNumber = 0;
		$count = 0;		
		foreach($itemRating as $itemRatingDetails){
			$ratingNumber+= $itemRatingDetails['ratingNumber'];
			$count += 1;			
		}
		$average = 0;
		if($ratingNumber && $count) {
			$average = $ratingNumber/$count;
		}
		return $average;	
	}
	public function getRatingTotal($itemId){

	 	$sqlQuery = "
			SELECT *
			FROM ".$this->itemRatingTable."  WHERE itemId = '".$itemId."'";

	  $count = $this->getNumRows($sqlQuery);

		return $count;
	}
	public function saveRating($POST, $userID){		
		$insertRating = "INSERT INTO ".$this->itemRatingTable." (itemId, userId, ratingNumber, title, comments, created, modified) VALUES ('".$POST['itemId']."', '".$userID."', '".$POST['rating']."', '".$POST['title']."', '".$POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";
		mysqli_query($this->dbConnect, $insertRating);	
	}

}

$pdo = new Database();

?>
