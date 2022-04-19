<?php
date_default_timezone_set('Europe/Budapest');
      if (isset($_POST['kuldes'])) {

            include_once 'dbh.inc.php';

            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['pwd1']);
            $password2 = mysqli_real_escape_string($conn, $_POST['pwd2']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $telefonszam = mysqli_real_escape_string($conn, $_POST['telefonszam']);
            $country = mysqli_real_escape_string($conn, $_POST['orszag']);
            $telepules = mysqli_real_escape_string($conn, $_POST['telepules']);
            $reg_date = date("Y-m-d H:i:s");
            $userdesc = mysqli_real_escape_string($conn, $_POST['desc']);

            if (empty($username) ||empty($password)||empty($password2) || empty($email) || empty($country) || empty($telepules) || empty($telefonszam) || empty($userdesc)) {
                                header("Location: register.php?signup=empty");
                                exit();
                            }
                  else {
                                if ($password !== $password2) {
                                    header("Location: register.php?signup=passwordsNotTheSame");
                              exit();
                        }
                        else {
                                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                          header("Location: register.php?signup=invalidemail");
                                          exit();
                                    }
                                    else {
                                          $sql = "SELECT * FROM users WHERE name = '$username'";
                                          $result = mysqli_query($conn, $sql);
                                          $resultCheck = mysqli_num_rows($result);

                                          if ($resultCheck > 0) {
                                                header("Location: register.php?signup=existinguser");
                                                exit();
                                          }
                                          else {
                                                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                                                $sql = "INSERT INTO users (name, pwd, email, country, telepules, telefon, user_desc, profile_pic)
                                                VALUES ('$username', '$hashedPwd', '$email', '$country', '$telepules', '$telefonszam', '$userdesc', '')";
                                                mysqli_query($conn, $sql);
                                                header("Location: ../login.php");
                                          }
                                    }
                        }

                  }


            /*include 'error_handler.php'*/
      }
      else {
            header("Location: register.php");
            exit();
      }
