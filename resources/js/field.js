Nova.booting((Vue, router, store) => {
  Vue.component('index-simple-button', require('./components/IndexField'))
  Vue.component('detail-simple-button', require('./components/DetailField'))
  Vue.component('form-simple-button', require('./components/FormField'))
})
