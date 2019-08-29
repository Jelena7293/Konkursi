<?php
include_once "C:/xampp/htdocs/projekat/config/loader_models.php";

//$approvedModel = new approvedModel();
$userModel = new usersModel();
$professionModel = new professionModel();
$profession = $professionModel->typeProfession();

if(isset($_POST['changeProfileBtn']))
{
    //$update = $approvedModel->updateApproved($_POST['idUser']);
    $update = $userModel->updateUser($_POST, $_POST['idUser']);
}
?>

<div class="modal" id="profileModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #0a264b">
            <div class="modal-header">
                <h1 class="modal-title"  style="font: italic bold 48px Georgia serif; color: azure; text-shadow: 3px 3px black; ">Pregled profila</h1>
                <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
            <form action="" method="post" autocomplete="off">
                <div class="alert alert-warning" role="alert" id="profileMessage" hidden="true"></div>
                <div class="modal-body" id="profileData" style="font: italic bold 22px Georgia serif; color: azure; text-shadow: 1px 1px black; ">


                </div>
                <div class="col-lg-12">
                    <div class="modal-footer row">
                        <button type="submit" class="btn btn-secondary" id="changeProfile" title="Sačuvaj izmjene" name="changeProfileBtn"><img src="img/save2.png" ></button>
<!--                        <button type="button" class="btn btn-primary" id="enableChange" name="enableChangeBtn">Enable</button>-->
                        <button type="button" class="btn btn-danger" title="Zatvori" data-dismiss="modal"><img src="img/close2.png" ></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
