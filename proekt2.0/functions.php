<?php
function display_flash_message($name){
    if(isset($_SESSION[$name])){
        echo "<div class=\"alert alert-{$name} text-dark\" role=\"alert\">{$_SESSION[$name]}</div>>";
        unset($_SESSION[$name]);
    }
}
function get_user_by_email($email) {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");

    $sql = "SELECT * FROM users WHERE email=:email";

    $statement = $pdo->prepare($sql);
    $statement->execute(["email"  =>  $email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}
function set_flach_message($name, $message){
    $_SESSION[$name] = $message;
}
function add_user($email, $password) {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";

    $statement = $pdo->prepare($sql);
    $result = $statement->execute([
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT)
    ]);
    return $pdo->lastInsertId();
}
function login($email, $password) {
    $user = [
      "id"  =>  1,
      "email"  =>  "john@example.com",
      "role"  =>  "admin"
    ];
    $_SESSION['user'] = $user;
}

function is_logged_in() {
    if (isset($_SESSION['user'])) {
        return true;
    }
    return false;
}

function is_not_logged_in() {
    return !is_logged_in();
}

function redirect_to($path) {
    header("Location:{$path}");
    exit;
}

function get_users() {
    $pdo = new PDO("mysql:host=localhost;dbname=my_project", "root", "");
    $statement = $pdo->query("SELECT * FROM users");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function get_authenticated_user() {
    if (is_logged_in()) {
        return $_SESSION['user'];
    }
        return false;
}

function is_admin($user) {
    if(is_logged_in()) {
        if($user["role"] === "admin") {
            return true;
        }
        return false;
    }
}

function is_equal($user, $current_user){
    if($user["id"] === $current_user["id"]) {
        return true;
    }
    return false;
}
?>