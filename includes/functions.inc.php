<?php


function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
  $result;
  if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidUid($username) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
  $result;
  if ($pwd !== $pwdRepeat) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function uidExists($conn, $username, $email) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../signup.php?error=stmtfailed");
    exit(); 
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../signup.php?error=stmtfailed");
    exit(); 
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  // Obter o ID do usuário recém-criado
  $userId = mysqli_insert_id($conn);

  return $userId;
}

function emptyInputLogin($username, $pwd) {
  $result;
  if (empty($username) || empty($pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function loginUser($conn, $username, $pwd) {
  $uidExist = uidExists($conn, $username, $username);

  if ($uidExist === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  }

  $pwdHashed = $uidExist["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
  } else if ($checkPwd === true) {
    session_start();
    $_SESSION["userid"] = $uidExist["usersId"];
    $_SESSION["useruid"] = $uidExist["usersUid"];
    header("location: ../home.php");
    exit();
  }
}
