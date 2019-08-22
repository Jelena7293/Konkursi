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
$competitions = $competitionModel->studentCompetition();

?>
<body>
<?php
include_once "Views/Default/headLogout.php";
//include_once "Views/Default/body2.php";
?>
<div class="container" >
    <div class="row">
        <div class="col-sm-12 ">
            <nav>
                <div class="nav nav-tabs " id="nav-tab" role="tablist" style="font: italic bold 24px serif; color: azure; ">
                    <a class="nav-item nav-link active" id="nav-competition-tab" data-toggle="tab" href="#nav-competition" role="tab" aria-controls="nav-competition" aria-selected="true">Konkursi</a>
                    <a class="nav-item nav-link" id="nav-app-tab" data-toggle="tab" href="#nav-app" role="tab" aria-controls="nav-app" aria-selected="false">Prijave</a>
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
                                    <?php foreach ($competitions as $competition): ?>
                                        <div class="col-lg-3 col-sm-6 col-md-3">
                                            <a>
                                                <div class="box-img" style="text-align: center; color: azure">
                                                    <div class="container">
                                                        <h5 style="padding-top: 80px"><?= $competition['description']; ?></h5>
                                                        <div class="col-md-10 text-center" style="position: absolute; bottom: 10px">
                                                            <button class="btn btn-secondary" data-toggle="tooltip" title="Prijavi se na konkurs"><img src="img/app2.png" ></button>
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

                <div class="tab-pane fade" id="nav-app" role="tabpanel" aria-labelledby="nav-app-tab">
                    <h2 class="textHeader">Nemate još prijava!</h2>
                </div>
                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <h1 class="textHeader">Student!</h1>
                </div>
            </div>

        </div>
    </div>
</div>

</body>



