<?php
class signup_page
{
    private $username, $password, $filter_email, $mobile_number, $address , $gender;
    public function __construct($conn, $username, $password, $filter_email, $mobile_number, $address , $gender)
    {
        $this->username =  $conn->mysqli->real_escape_string($username);
        $this->password =  $conn->mysqli->real_escape_string($password);
        $this->filter_email = $conn->mysqli->real_escape_string($filter_email);
        $this->mobile_number = $conn->mysqli->real_escape_string($mobile_number);
        $this->address = $conn->mysqli->real_escape_string($address);
        $this->gender = $conn->mysqli->real_escape_string($gender);
        if (!filter_var($filter_email, FILTER_VALIDATE_EMAIL)) {
            echo 'Invalid Email';
        } elseif (strlen($mobile_number) != 10) {
            echo 'Invalid Mobile Number';
        } else {
            echo $conn->insert("users", ['user_name' => $this->username, 'user_password' => $this->password, 'user_email' => $this->filter_email, 'user_mobile' => $this->mobile_number, 'user_address' => $this->address, 'user_gender' => $this->gender], null);
        }
    }
}
?>
