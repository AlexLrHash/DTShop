<template>
  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">DTShop</h1>
        <p class="lead text-muted">Интернет площадка где пользователи размещают свои скины, арканы, предметы и тд. на продажу. Если вы не авторизированны, нажмите сюда чтобы <NuxtLink to="login">войти</NuxtLink>. Если впервые на сайте, нажмите <NuxtLink to="register">сдесь</NuxtLink>.Чтобы перейти к покупке продукта, нужно либо нажать на кнопку "В корзину" ниже.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Подробнее</a>
          <NuxtLink to="cart" class="btn btn-secondary my-2">В Корзину</NuxtLink>
        </p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row" v-if="products">
          <div class="col-md-4" v-for="product in products">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div v-else>Пока нету продуктов</div>
      </div>
    </div>

  </main>
</template>

<script>
export default {
  name: "Main",
  data() {
    return {
      'products': []
    }
  },
  async mounted() {
      this.products = await fetch(
        'http://localhost:8000/api/dota/items'
      ).then(res => res.json()).catch(e => {console.log(e)})
  }
}
</script>

<style scoped>

</style>
