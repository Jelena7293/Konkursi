<?php
/*
if (isset($_GET['logout']))
{
    $usersModel -> logout();
}
*/
?>
<?php
include_once "config/loader_models.php";
$competitionModel = new competitionModel();
$typeCompetition = $competitionModel->competitionList();

$usersModel = new usersModel();
$users = $usersModel->usersList();
?>
<body>
<!--<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" style="background-color: azure; align-items: center; margin-bottom: 10px; margin-top: -50px">-->
        <?php/*
        if (isset($_SESSION['username']))
            echo "Welcome ". $_SESSION['user_type'] ." ". $_SESSION['username'] ." back";*/
        ?>
<!--</div>
<div class="col-sm-2 row" style="align-items: center; margin-bottom: 10px; margin-top: -50px">
    <a id="logoutBtn" type="button" class="btn btn-secondary" href="index.php?logout=true">Logout</a>
</div>
</div>-->
<?php
include_once "Views/Default/headLogout.php";
//include_once "Views/Default/body2.php";
?>
<!-- -------------------------------------------------------- -->
<div class="container" >
    <div class="row">
        <div class="col-sm-12 ">
            <nav>
                <div class="nav nav-tabs " id="nav-tab" role="tablist" style="font: italic bold 24px serif; color: azure; ">
                    <a class="nav-item nav-link active" id="nav-competition-tab" data-toggle="tab" href="#nav-competition" role="tab" aria-controls="nav-competition" aria-selected="true">Konkursi</a>
                    <a class="nav-item nav-link" id="nav-users-tab" data-toggle="tab" href="#nav-users" role="tab" aria-controls="nav-users" aria-selected="false">Korisnici</a>
                    <a class="nav-item nav-link" id="nav-request-tab" data-toggle="tab" href="#nav-request" role="tab" aria-controls="nav-request" aria-selected="false">Zahtjevi</a>
                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-competition" role="tabpanel" aria-labelledby="nav-competition-tab" >
                    <!-- konkurs -->
                    <div class="page-content-product">
                        <div class="main-product">
                            <div class="container">
                                <div class="row ui-helper-clearfix">
                                    <?php foreach ($typeCompetition as $typeComp): ?>
                                        <div class="col-lg-3 col-sm-6 col-md-3">
                                            <a href="">
                                                <div class="box-img">
                                                    <h4><?= $typeComp['description']; ?></h4>
                                                    <img src="" alt="" />
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-users" role="tabpanel" aria-labelledby="nav-users-tab">
                    <div class="page-content-product">
                        <div class="main-product">
                            <div class="container">
                                <div class="row ui-helper-clearfix">
                                    <?php foreach ($users as $user): ?>
                                        <div class="col-lg-3 col-sm-6 col-md-3">
                                            <a>
                                                <div class="box-img">
                                                    <h4> <?= $user['last_name']; ?> <?=$user['first_name'];?></h4>
                                                    <h5><?= $user['profession_name']; ?></h5>


                                                    <img src="" alt="" />
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-request" role="tabpanel" aria-labelledby="nav-request-tab">
                    <h2 class="textHeader">Nema zahtjeva za registraciju!</h2>
                </div>
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                </div>
            </div>

        </div>
    </div>
</div>

<!-- -------------------------------------------------------- -->




</body>



