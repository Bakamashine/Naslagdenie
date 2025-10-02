<!-- Модальное окно регистрации -->
<div class="modal fade" id="registrationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="registrationModalLabel">Регистрация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
          <div class="mb-3">
            <label for="fio" class="form-label">Введите ФИО</label>
            <input type="text" class="form-control" id="fio" name="fio_r" required>
          </div>
          <div class="mb-3">
            <label for="tel" class="form-label">Номер телефона</label>
            <input type="text" class="form-control" id="tel" name="tel_r" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Эл. почта</label>
            <input type="email" class="form-control" id="email" placeholder="user@example.com" name="email_r" required>
          </div>
          <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="login" placeholder="" name="login_r" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" placeholder="" name="password_r" required>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="terms" required>
              <label class="form-check-label" for="terms">Примите условия и соглашения</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
