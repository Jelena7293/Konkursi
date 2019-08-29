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

$approvedModel = new approvedModel();
$approved = $approvedModel->approved();

$activityModel = new activityModel();
//$activity = $activityModel->updateApproved();

/*if (isset($_POST['approved']))
{
    $activityModel->updateApproved($_POST);
}*/

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
                                            <a>
                                                <div class="box-img" style="text-align: center; color: azure">
                                                    <div class="container">
                                                        <h5 style="padding-top: 80px"><?= $typeComp['description']; ?></h5>
                                                        <div class="col-md-10 text-center" style="position: absolute; bottom: 10px">
                                                            <button class="btn btn-secondary" data-toggle="tooltip" title="Izbriši konkurs"><img src="img/delete2.png" ></button>
                                                            <button class="btn btn-secondary" data-toggle="tooltip" title="Prikaži konkurs"><img src="img/showCompetition2.png" ></button>
                                                            <button class="btn btn-secondary" data-toggle="tooltip" title="Izmjeni konkurs"><img src="img/editCompetition2.png" ></button>
                                                        </div>
                                                    </div>
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
                                                <div class="box-img" style="text-align: center; color: azure">
                                                    <div class="container">

                                                        <h5 style="padding-top: 80px"><?= $user['last_name']; ?> <?=$user['first_name'];?></h5>
                                                        <h5><?= $user['profession_name']; ?></h5>
                                                        <h5><?= $user['user_type']; ?></h5>
                                                        <?php if ($user['approved'] == 0): ?>
                                                        <h6 style="color: red">Nije odobren pristup!</h6>
                                                        <?php endif; ?>

                                                        <div class="col-md-10 text-center   " style="position: absolute; bottom: 10px">
                                                            <button class="btn btn-secondary" data-toggle="tooltip" title="Izbriši korisnika"><img src="img/delete2.png" ></button>
<!--                                                        <button class="btn btn-secondary view-profile" type="button" id="--><?//= $app['id_user']; ?><!--"  title="Prikaži profil korisnika"><img src="img/profile2.png" ></button>-->
                                                            <button class="btn btn-secondary view-profile" type="button" id="<?= $user['id_user']; ?>" title="Prikaži profil korisnika"><img src="img/profile2.png" ></button>
                                                            <button class="btn btn-secondary view-profile" type="button" id="<?= $user['id_user']; ?>" title="Izmjeni informacije o korisniku"><img src="img/edit2.png" ></button>
<!--                                                        <button class="btn btn-secondary" data-toggle="tooltip" title="Izmjeni informacije o korisniku"><img src="img/edit2.png" ></button>-->
                                                        </div>
                                                    </div>
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
                    <div class="page-content-product">
                        <div class="main-product">
                            <div class="container">
                                <div class="row ui-helper-clearfix">
                                    <?php foreach ($approved as $app): ?>
                                        <div class="col-lg-3 col-sm-6 col-md-3">
                                            <a>
                                                <div class="box-img" style="text-align: center; color: azure">
                                                    <div class="container">

                                                        <h5 style="padding-top: 80px"><?= $app['last_name']; ?> <?=$app['first_name'];?></h5>
<!--                                                        <h5>--><?//= $app['profession_name']; ?><!--</h5>-->
<!--                                                        <h5>--><?//= $app['user_type']; ?><!--</h5>-->
                                                        <?php if ($app['approved'] == 0): ?>
                                                            <h6 style="color: red">Nije odobren pristup!</h6>
                                                        <?php endif; ?>
                                                        <div class="col-md-10 text-center   " style="position: absolute; bottom: 10px">
                                                            <form method="post" id="rrrrr">
                                                                <button class="btn btn-secondary view-profile" type="button" id="<?= $app['id_user']; ?>"  title="Prikaži profil korisnika"><img src="img/profile2.png" ></button>
                                                                <button type="button" name="view"  id="<?= $app['id_user']; ?>" class="btn btn-secondary view_data" title="Odobri pristup korisniku"><img src="img/verified2.png" ></button>
                                                            </form>
                                                        </div>
                                                    </div>
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
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <h1 class="textHeader">Administrator!</h1>
                </div>
            </div>

        </div>
    </div>
</div>

<!--<div id="dataModal" class="modal fade">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                <h4 class="modal-title">Employee Details</h4>-->
<!--            </div>-->
<!--            <div class="modal-body" id="user_detail">-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- -------------------------------------------------------- -->
<?php
include_once 'modals/approved.php';
include_once 'modals/userProfile.php';
?>


</body>



