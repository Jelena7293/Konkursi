
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- moje skripte-->

    <script src="/projekat/js/bootstrap-select.min.js"></script>
    <script src="/projekat/js/slick.min.js"></script>
    <script src="/projekat/js/wow.min.js"></script>

    <script src="Assets/script.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/myStyle.css">

    <!--For product box-->
    <!--fontawesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="css/animate-wow.css">
    <!--main css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/slick.min.css">
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

    <title>Konkursi</title>
</head>
<body style="background-color: #0a264b">
<?php
include 'Views/Default/head.php';
include 'Views/Default/body.php';
include 'config/loader.php';
include 'config/loader_models.php';
//$usersModel = new usersModel;

if (isset($_POST['login']))
{
    $usersModel = new usersModel();
    $check = $usersModel -> login($_POST);

    if ($check == true)
    {
        echo "usla";
    }
}




?>

</body>
</html>
