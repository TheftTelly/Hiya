<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
    <h2 style="margin: 10px 0;> <?= $_SESSION['user']['full_name'] ?> </h2>
        <a href="#"><?= $_SESSION['user']['email']?></a>
        <a href="#" class="logout">Выход</a>
</form>