<?php







class DB
{

	private $hostname='localhost';
	private $username='root';
	private $password="";
	private $dbname;
	

	function __construct($dbname)
	{
		echo "<br>DB class is called<br>";
		$this->dbname = $dbname;

	}

	public function getDBHandler()
	{
		 try {
    $dbh = new PDO("mysql:host=$this->hostname;dbname=$this->dbname",$this->username,$this->password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
     $this->dbh = $dbh;
    echo 'Connected to Database<br/>'; 
     $this->dbname=$this->dbname; 
     return $dbh;  

    }catch(PDOException $e)
    {
       $dbh = null;
        echo $e->getMessage();
    }
	}//

	function getColumns($t){
		$dbh = $this->getDBHandler();

 $stmt = $dbh->query("SELECT * FROM $t LIMIT 1");
 $res = $stmt->fetch(PDO::FETCH_ASSOC);
$colz= array();
 foreach ($res as $key => $value) {
 	$colz[] = $key;
 }
 return $colz;

	}





    public function resethostname($hostname)
    {
        $this->hostname=$hostname;
    }
    public function resetusername($username)
    {
        $this->username=$username;
    }
    public function resetpassword($password)
    {
        $this->password=$password;
    }
    // public function setdbname($dbname)
    // {
    //     $this->$dbname=$dbname;
    // }

    //get
    public function gethostname()
    {
        return $this->hostname;
    }
    public function getusername()
    {
        return $this->username;
    }
    public function getpassword(){
        return $this->password;    }
    public function getdbname()
    {
        return $this->dbname;
    }







}//db











