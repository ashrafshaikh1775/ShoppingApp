<?php
class conn{
	public $server = 'localhost';
	public $username = 'root';
	public $password = '';
	public $database = 'shopping_app';

	public $mysqli = '';
	public $result = [];
	public function __construct(){

   $this->mysqli = new mysqli($this->server,$this->username , $this->password , $this->database);

    if ($this->mysqli->connect_error){
     echo 'Connection Failed'.$this->mysqli->connect_error;
    }
	}

	public function select($table , $rows='*' , $join = null , $where = null , $order = null , $limit = null)
	{
    $query = "select $rows from $table";
     if($join != null)
    {
    	$query .= " join $join" ;
    }
     if($where != null)
    {
    	$query .= " where $where" ;
    }
     if($order != null)
    {
    	$query .= " order by $order" ;
    }
     if($limit != null)
    {
    	$query .= " limit 0,$limit" ;
    }
    $execute = $this->mysqli->query($query);
    if($execute)
    {
    	$this->result = $execute->fetch_all(MYSQLI_NUM);
    	return $this->result; 
    }
	}

  public function __destruct(){
  	$this->mysqli->close();
  }		
}
class func{
public function call_loop($data_get){
 if(count($data_get) > 0){
foreach($data_get as $d)
{
echo "<div class='main_page_items' id='$d[0]' onClick='view_product(this , $d[0])'>
      <img src=$d[2] alt='no-preview'>
      <div class='main_proname_div'>$d[1] </div>
      <div class='main_original_proprice'>₹$d[4]</div>
      <div class='main_proprice_div'>₹$d[5]  <span>$d[6]% off</span></div>
      </div>";
}
}
else
{
    echo "<div class='no_result'> No Result Found !!!</div>";
}
}
}
$conn = new conn();
$func = new func();
if($_POST['select_exe'] == 'true')
{
    if(is_numeric($_POST['find'])){
       $find = $_POST['find'];
    }
    else
    {
         $find = 0;
    }
 $search = $_POST['find'];
 $data_get = $conn->select('main_page' ,'*', null ,"product_price <= ".$find ." Or product_name LIKE '%".$search."%'" ,null ,null);
 $func->call_loop($data_get);
}
if($_POST['select_exe'] == 'false')
{
$data_get = $conn->select('main_page' ,'*', null ,$_POST['find'],null ,null);
$func->call_loop($data_get);
}



?>