<?php

    include 'connection.php';
    $_SESSION["loggedin"] = false;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "select * from users where username = '$username'";
        $result = mysqli_query($con,$sql);
        $num = mysqli_num_rows($result);
        if($num == 1) {
                $row = mysqli_fetch_assoc($result);
                $pwd = $row['Password'];
                $uid = $row['ID'];
                if($password == $row["Password"]) {
                    if($row["Type"] == 'Customer'){                         
                        session_regenerate_id();
                        session_start();
                        $_SESSION["loggedin"] = TRUE;
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION["id"] = $uid;
                        header("location: customer/dashboard.php");
                    }

                    else if($row["Type"] == 'Admin'){                         
                        session_regenerate_id();
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['id'] = $uid;
                        header("location: admin/profile.php");
                    }

                    else if($row["Type"] == 'Pharmacist'){                         
                        session_regenerate_id();
                        session_start();
                        $_SESSION['loggedin'] = TRUE;
                        $name = $row['Name'];
                        $_SESSION['name'] = $name;
                        $_SESSION['id'] = $uid;
                        header("location: pharmacist/index.php");
                    }

                    else if($row["Type"] == 'Doctor'){                         
                        session_regenerate_id();
                        session_start();
                        $_SESSION["loggedin"] = TRUE;
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION["id"] = $uid;
                        $fetchDr = mysqli_query($con, "SELECT doctors.ID FROM users
                        INNER JOIN doctors ON doctors.User_ID = users.ID
                        WHERE users.ID = '$uid'");
                        $ResDr = mysqli_fetch_assoc($fetchDr);
                        $_SESSION['dr_id'] = $ResDr['ID'];
                        header("location: doctor/profile.php");
                    }
                else {
                    header("location: login.php?status=1");
                }
            }
        }
        else {
            echo "No such a user!";
            header("location: login.php?status=1");
        }
    }
?>