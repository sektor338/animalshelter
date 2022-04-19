<?php

session_start();

      if (isset($_POST['login'])) {
            include 'dbh.inc.php';

            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            if (empty($username) || empty($password)) {
                  header("Location: ../login.php?login=erroremp");
                  exit();
            }
            else {
                  $sql = "SELECT * FROM users WHERE name = '$username'";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);
                  if ($resultCheck < 1) {
                        header("Location: ../login.php?login=erroruser");
                        exit();
                  }
                  else {
                        if ($row = mysqli_fetch_assoc($result)) {
                              $hashedPwdCheck = password_verify($password, $row['pwd']);
                              if ($hashedPwdCheck == false) {
                                    header("Location: ../login.php?login=errorpwd");
                                    exit();
                              }
                              elseif ($hashedPwdCheck == true) {
                                    $_SESSION['userid'] = $row['id'];
                                    $_SESSION['username'] = $row['name'];
                                    $_SESSION['email'] = $row['email'];
                                    $_SESSION['country'] = $row['country'];
                                    $_SESSION['telepules'] = $row['telepules'];
                                    $_SESSION['telefon'] = $row['telefon'];
                                    $_SESSION['userdesc'] = $row['user_desc'];
                                    $_SESSION['profpic'] = $row['profile_pic'];
                                    $sql = "UPDATE users SET userstatus='1' WHERE name='".$_SESSION['username']."'";
                                    $sqlr = mysqli_query($conn,$sql);



                                  header("Location: ../index.php?login=success");
                                    exit();
                              }
                        }
                  }
            }
      }
      else {
            header("Location: ../login.php?login=error");
            exit();
      }
