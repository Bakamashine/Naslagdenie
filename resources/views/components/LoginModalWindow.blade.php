<!-- Модальное окно авторизации -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Авторизация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form action="project/login_pr.php" method="POST">
          <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Введите E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_a" required>
            <div id="emailHelp" class="form-text">Мы не сообщаем вашу почту сторонним лицам.</div>
          </div>
          <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_a"required>
          </div>
          <div class="mb-2 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Я согласен войти</label>
          </div>
          <a href="#" data-bs-toggle="modal" data-bs-target="#registrationModal" data-bs-dismiss="modal">Регистрация</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Войти</button>
      </div>
        </form>
    </div>
  </div>
</div>
