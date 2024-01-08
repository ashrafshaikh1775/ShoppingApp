<?php
session_start();
class conn
{
  public $server = 'localhost';
  public $username = 'root';
  public $password = '';
  public $database = 'shopping_app';

  public $mysqli = '';
  public $result = [];
  public function __construct()
  {

    $this->mysqli = new mysqli($this->server, $this->username, $this->password, $this->database);

    if ($this->mysqli->connect_error) {
      echo 'Connection Failed' . $this->mysqli->connect_error;
      exit();
    }
  }

  public function select($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null)
  {
    $query = "select $rows from $table";
    if ($join != null) {
      $query .= " join $join";
    }
    if ($where != null) {
      $query .= " where $where";
    }
    if ($order != null) {
      $query .= " order by $order";
    }
    if ($limit != null) {
      $query .= " limit 0,$limit";
    }
    $execute = $this->mysqli->query($query);
    if ($execute) {
      $this->result = $execute->fetch_all(MYSQLI_NUM);
      return $this->result;
    } else {
      return 'Network issues !!!';
    }
  }

  public function insert($table, $rows = array(), $where = null)
  {
    $col = implode(', ', array_keys($rows));
    $val = implode("', '", $rows);
    $query = "insert into $table ($col) values('$val')";
    if ($where != null) {
      $query .= " where $where";
    }
    $execute = $this->mysqli->query($query);
    if ($execute) {
      return 'Registered';
    } else {
      return 'Not Registered';
    }
  }
  public function update($table, $rows = array(), $where = null)
  {

    foreach ($rows as $col => $val) {
      $args[] = "$col='$val'";
    }
    $merge = implode(', ', $args);
    $query = "update $table set $merge";
    if ($where != null) {
      $query .= " where $where";
    }
    $execute = $this->mysqli->query($query);
    if ($execute) {
      return $this->mysqli->affected_rows;
    } else {
      return 'Not Registered';
    }
  }

  public function __destruct()
  {
    $this->mysqli->close();
  }
}
class func
{
  public function call_loop($data_get)
  {
    if (count($data_get) > 0) {
      foreach ($data_get as $d) {
        echo "<div class='main_page_items' id='$d[0]' onClick='view_product(this , $d[0])'>
      <img src=$d[2] alt='no-preview'>
      <div class='main_proname_div'>$d[1] </div>
      <div class='main_original_proprice'>₹$d[4]</div>
      <div class='main_proprice_div'>₹$d[5]  <span>$d[6]% off</span></div>
      </div>";
      }
    } else {
      echo "<div class='no_result'> No Result Found !!!</div>";
    }
  }
}
$conn = new conn();
$func = new func();
if ($_POST['exe_file'] == 'submit_file' || $_POST['exe_file'] == 'load_file') {
  include('product_items.php');
  $product_items = new product_items($conn ,$func , $_POST['find'],'submit_file'); 
}
if ($_POST['exe_file'] == 'signup_file') {
  include('signup_page.php');
  $signup = new signup_page($conn, $_POST["username"], $_POST["password"], filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), $_POST['number'], $_POST['address'],$_POST['gender']);
}
if ($_POST['exe_file'] == 'signin') {
  include('login_page.php');
  $login = new login_page($conn, $_POST["username"], $_POST["password"]);
}
if ($_POST['exe_file'] == 'logout') {
  include('logout.php');
  $logout = new logout($conn, $_POST["uid"]);
}
if ($_POST['exe_file'] == 'upload_profile') {

  include('add_profile.php');
  $logout = new add_profile($conn, $_FILES['upload_profile'], $_POST["uid"]);
  //  echo  $_FILES['upload_profile']['tmp_name'];
  // echo $_POST['file_name'];
}
?>