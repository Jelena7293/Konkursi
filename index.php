<?php
//include_once 'Views/Default/head.php';
include 'config/loader.php';
include 'config/loader_models.php';

?>

<!doctype html>
<html lang="en">

<!--<body style="background-color: #0a264b">-->
<?php
include 'Views/Default/head.php';

?>
    <body style="background-color: #0a264b">
        <div class="container">
        <?php
        if (isset($_GET['logout']))
        {
            $usersModel -> logout();

        }
        if (isset($_SESSION["is_logged"]))
        {
            if ($_SESSION["approved"] == 0)
            {
                include_once 'Views/notApproved.php';
            }
            elseif ($_SESSION["user_type"] == "Administrator")
            {
                include_once "Views/adminPage.php";

            }
            elseif ($_SESSION["user_type"] == "profesor")
            {
                include_once "Views/professorPage.php";
            }
            else
            {
                include_once "Views/studentPage.php";
            }
        }
        else
        {
            include 'Views/Default/body.php';
            include 'Views/welcome.php';
        }


        ?>
        </div>
    </body>
</html>
