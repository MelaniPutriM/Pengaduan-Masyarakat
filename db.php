<?php
class DB
{
    private $db_host = "localhost";
    private $db_user = "id20881644_melani";
    private $db_pass = "Melani16!";
    private $db_name = "id20881644_cbaweb";

    public $con = false;
    private $hasil = array();

    public function connect()
    {
        if (!$this->con) {
            $myconn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            mysqli_set_charset($myconn, 'utf8');
            if ($myconn) {
                $this->con = $myconn;
                return true;
            } else {
                array_push($this->hasil, mysqli_error($myconn));
                return false;
            }
        } else {
            return true;
        }
    }

    public function disconnect()
    {
        mysqli_close($this->con);
    }
}
?>
