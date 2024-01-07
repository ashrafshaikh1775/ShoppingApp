<?php
class login_page
{
    private $username , $password ,  $result , $update;
    public function __construct($conn , $username , $password)
    {
        $this->username =  $conn->mysqli->real_escape_string($username);
        $this->password =  $conn->mysqli->real_escape_string($password);
        $this->result = $conn->select('users', 'user_id , user_name , user_password', null, "user_name = " . "'$this->username'" . ' And user_password = ' . "'$this->password'", null, null);
    if (count($this->result) > 0) {
      $_SESSION['uid'] = $this->result[0][0];
      $_SESSION['uname'] = $this->result[0][1];
      $this->update = $conn->update('users', ['status' => 'on'], "user_name = " . "'$this->username'" . ' And user_password = ' . "'$this->password'");
      if (strlen($this->update) > 0) {
        echo 'status 200';
      } else {
        echo 'status 400';
      }
    } else {
      echo 'status 400';
    }

    }
}
?>