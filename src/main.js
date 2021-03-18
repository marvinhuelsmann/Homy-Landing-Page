import '@babel/polyfill'
import 'mutationobserver-shim'
import Vue from 'vue'
import './plugins/fontawesome'
import {library} from '@fortawesome/fontawesome-svg-core'
import {
  faAngleDoubleDown,
  faEnvelope,
  faMapMarked,
  faSignature,
  faShare,
  faCommentAlt,
  faSave,
  faPhone,
  faShoppingBag,
  faCheck,
  faDownload,
  faAngleDoubleRight,
  faQuestionCircle,
  faGamepad,
  faAddressBook,
  faRocket,
  faLock
} from '@fortawesome/free-solid-svg-icons'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'
import './plugins/bootstrap-vue'
import App from './App.vue'
import router from './router'


library.add(faLock, faAngleDoubleDown, faEnvelope, faMapMarked, faSignature, faShare, faCommentAlt, faSave, faPhone, faCheck, faShoppingBag, faDownload, faQuestionCircle, faGamepad, faAddressBook, faAngleDoubleRight, faRocket)


Vue.component('fai', FontAwesomeIcon)

Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
