<template>
  <div class="">
  <Header></Header>

  <div class="text-center mt-5">
    <form class="form-signin" style="margin: 0 auto; max-width: 500px;">
      <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
      <label for="inputPassword" class="sr-only">Имя</label>
      <input type="password" id="" class="form-control" placeholder="Имя" required="">
      <label for="inputPassword" class="sr-only">Телефон</label>
      <input type="password" id="phone" class="form-control" placeholder="Телефон" required="">
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email адрес" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Пароль</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
      <label for="inputPassword" class="sr-only">Подтвердение пароля</label>
      <input type="password" id="inputPasswordConfirmation" class="form-control" placeholder="Подтверждение пароля" required="">
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
      <p class="mt-5 mb-3 text-muted">Уже были на сайте. Перейдите на форму с
        <NuxtLink to="login"> авторизацией</NuxtLink>
      </p>
    </form>
  </div>

  </div>
</template>

<script>
export default {
  name: "register"
}
</script>

<style scoped>

</style>
