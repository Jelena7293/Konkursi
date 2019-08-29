<?php
include_once "C:/xampp/htdocs/projekat/config/loader_models.php";
$approvedModel = new approvedModel();

if(isset($_POST['approvedBtn']))
{
    $update = $approvedModel->updateApproved($_POST['idUser']);
}

?>

<div class="modal" id="approvedModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #0a264b">
            <div class="modal-header">
                <h1 class="modal-title"  style="font: italic bold 48px Georgia serif; color: azure; text-shadow: 3px 3px black; ">Odobri nalog</h1>
                <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
            <form action="" method="post" autocomplete="off">
                <div class="alert alert-warning" role="alert" id="approvedMessage" hidden="true"></div>
                <div class="modal-body" id="user_detail" style="font: italic bold 22px Georgia serif; color: azure; text-shadow: 1px 1px black; ">


                </div>
                <div class="col-lg-12">
                    <div class="modal-footer row">
                        <button type="submit" class="btn btn-info" name="approvedBtn" ">Odobri</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Odustani</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
