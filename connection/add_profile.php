<?php
class add_profile
{
    private $file_name, $allowed_ext, $result, $uid, $file_ext, $file, $tmp_name, $filename;
    public function __construct($conn, $file_name, $uid)
    {
        $conn->mysqli->autocommit(FALSE);
        $this->allowed_ext = array('jpg', 'jpeg', 'png');
        $this->file_name = $conn->mysqli->real_escape_string($file_name['name']);
        $this->uid = $conn->mysqli->real_escape_string($uid);
        $this->file_ext =  basename(pathinfo($this->file_name, PATHINFO_EXTENSION));
        $this->filename =  basename(pathinfo($this->file_name, PATHINFO_FILENAME));
        if (!file_exists('../images/profile_pic/' . $this->filename)) {
            if (in_array($this->file_ext, $this->allowed_ext)) {
                $this->result = $conn->update('users', ['profile_pic' => $this->filename], 'user_id=' . $this->uid);
                if ($this->result > 0) {

                    if (!is_dir('../images/profile_pic')) {
                        if (mkdir('../images/profile_pic')) {
                            if (move_uploaded_file($file_name['tmp_name'], '../images/profile_pic/' . $this->filename)) {
                                $_SESSION['image_name'] = $this->filename;
                                echo 'status 200';
                            } else {
                                $conn->mysqli->rollback();
                                echo 'status 500';
                            }
                        } else {
                            $conn->mysqli->rollback();
                            echo 'status 600';
                        }
                    } else {
                        if (move_uploaded_file($file_name['tmp_name'], '../images/profile_pic/' . $this->filename)) {
                            $_SESSION['image_name'] = $this->filename;
                            echo 'status 200';
                        } else {
                            $conn->mysqli->rollback();
                            echo 'status 500';
                        }
                    }
                    $conn->mysqli->autocommit(True);
                } else {
                    $conn->mysqli->rollback();
                    $conn->mysqli->autocommit(True);
                    echo 'status 400';
                }
            } else {
                echo 'Unsupported Image Type';
            }
        } else {
            echo 'status 200';
        }
    }
}
