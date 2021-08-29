<template>
  <div class="container" style="margin-top: 150px">
    <div v-if="carts">
      <div class="card-deck mb-3 text-center" v-for="cart in carts">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Free</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
        </div>
      </div>
    </div>
    </div>
    <div>
      Пока нету корзин
    </div>
  </div>
</template>

<script>
export default {
  name: "AdminCarts",
  data() {
    return {
      "carts": []
    }
  }
}
</script>

<style scoped>

</style>
