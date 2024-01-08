<?php
class logout
{
  private $uid , $update;
  public function __construct($conn , $g_var){
    $this->uid = $conn->mysqli->real_escape_string($g_var);
    if (is_numeric($this->uid)){
        $this->update = $conn->update('users', ['status' => 'off'], "user_id=" . $this->uid);
        if(is_numeric($this->update)){
        if ($this->update > 0) {
          $_SESSION['image_name']='';
          $_SESSION['uname'] = 'Login';
          echo 'status 200';
        } else {
          echo 'status 400';
        }
      }
      else{
        echo 'status 400';
      }
      } else {
        echo 'status 400';
      }
  }
}
?>