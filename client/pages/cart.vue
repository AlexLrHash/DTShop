<template>
  <div class="">
    <Header></Header>
    <div class="mt-5 container">

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Ваша Корзина</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed" v-for="item in items">
              <div>
                <h6 class="my-0">Имя продукта</h6>
                <small class="text-muted">Описание продукта</small>
              </div>
              <span class="text-muted">цена продукта</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Скидочный код">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Расчитать скидку</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Оформление заказа</h4>
          <form class="needs-validation">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Ваше имя</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Имя должно обязательно.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Ваша Фамилия</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Фамилия обязательна.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Введите валидный email.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Адрес</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Введите валидный адрес.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Страна</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Выберите страну...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Выберите страну.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Город</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Выберите город...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Выберите город.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <h4 class="mb-3">Оплата</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""
                       required="">
                <label class="custom-control-label" for="credit">Кредитная карта</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Пользователь карты</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Введите полное имя как и написано на карте</small>
                <div class="invalid-feedback">
                  Введите валидное имя
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Номер карты</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Введите валидный номер карты
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Дата</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Введите валидную дату
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Введите валидный секретный код
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Оформить заказ</button>
          </form>
        </div>
      </div>

    </div>
    <Footer></Footer>
  </div>
</template>

<script>
export default {
  name: "cart",
  data() {
    return {
      items: []
    }
  }
}
</script>

<style scoped>

</style>
