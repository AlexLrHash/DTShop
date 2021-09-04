<template>
  <div class="">

    <Header></Header>

    <div class="text-center mt-5">
      <form class="form-signin" style="margin: 0 auto; max-width: 500px;">
        <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input v-model="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input v-model="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Запомнить меня
          </label>
        </div>
        <a href="" class="mt-5 mb-3 text-muted">Забыли пароль?</a>
        <button class="btn btn-lg btn-primary btn-block" @click="loginUser()" type="button">Войти</button>
        <div class="mt-5 mb-3 text-muted">Впервые на сайте?. Перейдите на форму с
          <NuxtLink to="register"> регистрацией</NuxtLink>
        </div>
      </form>
    </div>

  </div>
</template>

<script>
export default {
  name: "login",
  data() {
    return {
      'email': '',
      'password': ""
    }
  },
  methods: {
    async loginUser() {
      const res = await fetch('https://localhost:8000/api/login', {
        method: "POST",
        body: JSON.stringify({
          'email': this.email,
          'password': this.password
        })
      }).then(res => res.json()).catch(e => { console.log(e) })
    }
  }
}
</script>

<style scoped>

</style>
