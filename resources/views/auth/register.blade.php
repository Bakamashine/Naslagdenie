@extends("layouts.basic")

@section("title", "Регистрация")

@section("content")



        <form action="{{ route('register.store') }}" method="POST">
            @csrf

          <div class="mb-3">
            <label for="fio" class="form-label">Введите ФИО</label>
            <input type="text" class="form-control" id="fio" name="fio" required>
            @error("fio")
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="tel" class="form-label">Номер телефона</label>
            <input type="text" class="form-control" id="tel" name="phone" required>
            @error("phone")
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Эл. почта</label>
            <input type="email" class="form-control" id="email" placeholder="user@example.com" name="email" required>
            @error("email")
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="login" placeholder="" name="login" required>
            @error("login")
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" placeholder="" name="password" required>
            @error("password")
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" placeholder="" name="password_confirmation" required>
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


@endsection
