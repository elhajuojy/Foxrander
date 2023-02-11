<?php

define("MB", 1048576);

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}



function redirect($path)
{
    header("Location: {$path}");
    die();
}




function authorize($condition, $status = Core\Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";
    die();
}

function base_path($path)
{

    return BASE_PATH . $path;

}

function isLogedIn()
{
    return isset($_SESSION['client']);
}

function view($path, $attributes = [])
{
    // dd($attributes);
    extract($attributes);
    require base_path('views/' . $path. '.php');
}
function hashPassword($value): string
{
    return password_hash($value, PASSWORD_DEFAULT);
}


function goToPage($page)
{
    header("Location: {$page}");
    die();
}


function isLogedInAdmin()
{
    return isset($_SESSION['admin']);
}


function verifyPassword($value, $hash): bool
{
    return password_verify($value, $hash);
}


function Widget($name, $data = [])
{
    extract($data);
    require base_path("views/components/{$name}.php");
}

function isAdmin()
{
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'admin'){
            return true;
        }
    }
    return false;
}




function isClient()
{
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'client'){
            return true;
        }
    }
    return false;
}


function imageUpload($imageRequest, $imagePath = "assets/images/"): string
{
    global $msgError;
    $imagename  = rand(1000, 10000) . $_FILES[$imageRequest]['name'];
    $imagetmp   = $_FILES[$imageRequest]['tmp_name'];
    $imagesize  = $_FILES[$imageRequest]['size'];
    $allowExt   = array("jpg", "png", "gif", "mp3", "pdf");
    $strToArray = explode(".", $imagename);
    $ext        = end($strToArray);
    $ext        = strtolower($ext);

    if (!empty($imagename) && !in_array($ext, $allowExt)) {
        $msgError = "EXT";
    }
    if ($imagesize > 2 * MB) {
        $msgError = "size";
    }
    if (empty($msgError)) {
        move_uploaded_file($imagetmp,  $imagePath . $imagename);
        return $imagename;
    } else {
        return "fail";
    }
}


function get($value)
{
    if (isset($_GET[$value])) {
        return $_GET[$value];
    }
}

function post($value)
{
    if (isset($_POST[$value])) {
        return $_POST[$value];
    }
}