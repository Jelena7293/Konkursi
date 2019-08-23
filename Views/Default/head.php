<?php
/*
if (!isset($_SESSION["id"])) {
    if (isset($_GET['logout'])) {
        $usersModel->logout();
    }
}
*/
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>-->
    <script src="Assets/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/myStyle.css">
    <script src="Assets/script.js"></script>


    <title>Konkursi</title>

</head>
<body>
<div class="container" style="margin-bottom: 50px">
    <div class="row fixed">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="margin-top: 20px">
            <!--<p class="textHeader">TEST</p>-->
            <div class="row">
                <div class="col-sm-3" align="right" >
                    <img class="rounded" src="/projekat/img/logo2.png" width="150">
                </div>
                <div class="col-sm-9">
                    <p class="textHeader">Универзитет у</p>
                    <p class="textHeader" style="margin-top: -20px;">Источном Сарајеву</p>
                    <p class="textHeader">University of East Sarajevo</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2 row" style="align-items: center">
            <!--<button id="loginBtn" class="btn btn-secondary" >Login</button>
            <button id="signUpBtn" class="btn btn-secondary">Sign Up</button>-->
        </div>
    </div>
</div>
<?php
include_once "modals/login.php";
include_once "modals/signUp.php";

?>
</body>
