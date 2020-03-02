<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group mt-3">
        <label for="login" class="mb-3">Логин:</label>
        <textarea class="form-control" id="login"
                  name="login" rows="5" cols="50" required <?=$locked??''?>>
        </textarea>
    </div>
    <div class="form-group mt-3">
        <label for="password" class="mb-3">Пароль:</label>
        <textarea class="form-control" id="password"
                  name="password" rows="5" cols="50" required <?=$locked??''?>>
        </textarea>

    <div class="row mt-3">
        <button type="submit" name="btnAuth"
                class="btn btn-outline-primary ml-3">
            <?=$btnText?>
        </button>
        <button type="submit" name="btnReg"
                class="btn btn-outline-primary ml-3">
            Регистрация
        </button>
    </div>
</form>