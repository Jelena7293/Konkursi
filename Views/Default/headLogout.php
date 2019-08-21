<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-6 textHeader" style="margin-bottom: 10px; margin-top: -45px; text-align: end">
        <?php
        if (isset($_SESSION['username']))
        {
            echo $_SESSION["first_name"] . " " . $_SESSION["last_name"];
        }
        ?>
    </div>
    <div class="col-sm-1 " style=" margin-bottom: 10px; margin-top: -50px">
        <a id="logoutBtn" type="button" class="btn btn-secondary" href="index.php?logout=true">Logout</a>
    </div>
</div>