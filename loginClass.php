<?php
include './config/database.php';
class Login extends Database
{
    public function login($email)
    {
        $query = "SELECT * FROM adminregister WHERE email = '$email'";
        $login = mysqli_query($this->connect(), $query)->fetch_assoc();

        return $login;
    }

    public function TotalAdmin()
    {
        $query = "SELECT COUNT(id) FROM adminregister;";
        $query = mysqli_query($this->connect(), $query);

        return $query;
    }

    public function admin($email, $pass)
    {
        $query = "SELECT * FROM adminmaster WHERE email = '$email' AND pass='$pass'";
        $admin = mysqli_query($this->connect(), $query)->fetch_assoc();

        return $admin;
    }
}
