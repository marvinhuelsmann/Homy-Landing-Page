<template>
  <div>
    <div class="pt-5 home">


      <b-img rounded="circle" src="../assets/logo.png" class="img"></b-img>

      <br class="no-move"/>
      <br class="no-move"/>
      <br class="no-move"/>

      <h1 class="display-title-strong text-dark">Homy</h1>
      <h1 class="display-title-lighter text-dark">Ab dem <u>30.4.2021</u> im Apple App Store. Ab diesem Zeitpunkt kann die App jederzeit veröffentlicht werden.</h1>
      <p class="normal-text-secondary text-white-gray-color container">
        Dein Online Hausaufgaben Planer - Mit Homy ist deine Aufgaben Verwaltung kinderleicht zu bedienen. Außerdem
        wirst du erinnert wenn du deine Aufgaben abgeben musst und vieles mehr.
      </p>

      <a target="_blank" v-b-modal.modal-1>
        <b-img class="img" src="../assets/download_button.png"></b-img>
      </a>

      <b-modal id="modal-1"
               :header-bg-variant="headerBgVariant"
               :header-text-variant="headerTextVariant" title="Bald verfügbar" ok-only>
        <p class="my-4 text-dark"><strong>Die App ist noch nicht verfügbar komme bald wieder!</strong></p>
      </b-modal>


      <div class="pt-2 yellow-blass-wait">
        <div class="pb-lg-5 container">

          <h1 class="pt-1 display-title-strong text-white">Entwicklungsstand</h1>
          <p class="normal-text-secondary text-white">
            Die App ist kurz vor der Veröffentlichung, sie benötigt schätzungsweise noch {{mathWorkState}}% für die Fertigstellung der App, sie wurde bereits zu circa {{work.workState}}% entwickelt.
          </p>

          <b-progress :value="work.workState" :max="100" animated variant="dark"></b-progress>

        </div>
      </div>

    </div>

    <br class="no-move img-inv-only-handy"/>
    <br class="no-move img-inv-only-handy"/>

    <div>

      <b-img src="../assets/memoji1.png" class="img img-inv-only-handy"></b-img>
      <b-img src="../assets/memoji2.png" class="img"></b-img>

    </div>

    <div class="pb-4 pt-4 purple-black-wait">

      <h1 class="pt-1 display-title-strong text-white">Homy - Sicher und Privat</h1>
      <p class="normal-text-secondary text-white">
        Homy teilt keine Daten in Datenbanken. Sie bleiben einzig und alleine auf deinem Gerät gespeichert.
      </p>

      <b-img style="padding-right: 30px" src="../assets/iphone-1.png" class="img img-inv-only-handy"></b-img>
      <b-img style="padding-left: 30px" src="../assets/iphone-2.png" class="img img-inv-only-handy"></b-img>

      <br class="no-move img-inv-only-handy"/>
    </div>
    <br class="no-move"/>


    <div class="pt-3 pb-3 orange-blass-wait">

      <h1 class="display-title-strong text-white">Transparent und eine einfache Bedienung</h1>
      <p class="normal-text-secondary text-white ">
        Wir versuchen den Homy Benutzern eine einfache und strukturierte Benutzeroberfläche zu schaffen.
      </p>

    </div>
    <br class="no-move"/>

    <div class="container">
      <h1 class="display-title-strong text-dark">Newsletter</h1>
      <p class="normal-text-secondary text-dark">
        Behalte die neusten Informationen und den Entwicklungsstand der App immer im Auge.
      </p>

      <b-form @submit.prevent="sendEmail">
        <b-form-group
            id="input-group-1"
            label-for="input-1">

          <b-form-input
              id="input-1"
              v-model="text"
              size="lg"
              type="email"
              placeholder="Deine Email Adresse"
              style="text-align: center"
              required
          ></b-form-input>
        </b-form-group>


        <div>
          <div v-if="!sendEmail">
            <div v-if="error">
              <p style="color: red">
                Ein Fehler ist aufgetaucht. Lade die Seite neu und probiere es erneut...
              </p>
            </div>
            <div v-else-if="waiting" style="text-align: center">

              <b-skeleton class="pt-2" animation="throb" width="85%"></b-skeleton>
              <b-skeleton animation="throb" width="55%"></b-skeleton>
              <b-skeleton animation="throb" width="70%"></b-skeleton>

            </div>
            <div v-else>
              <b-button type="submit" @click="onSubmit()" size="lg" variant="dark">Abonnieren</b-button>
            </div>
          </div>


          <div v-else-if="sendEmail">
            <p style="color: green">
              Du hast den Newsletter erfolgreich abbonniert!
            </p>
          </div>
        </div>


      </b-form>
    </div>


    <div class="pt-5" style="alignment: bottom">


      <p class="smaller-end-text">
        Die  <a target="_blank" style="color: #6868b3" href="https://github.com/marvinhuelsmann/Homy">App</a> oder die  <a target="_blank" style="color: #6868b3" href="https://github.com/marvinhuelsmann/Homy-Landing-Page">Landing Page</a> auf GitHub
        ansehen.
      </p>
      <p class="smaller-end-text">© {{ new Date().getFullYear() }}
        <a style="color: #6868b3" href="https://marvhuelsmann.de">Marvin Hülsmann</a> -
        <a style="color: #6868b3" target="_blank" href="https://marvhuelsmann.de/data">Privacy Policy</a> -
        Auf <a style="color: #6868b3" target="_blank"
               href="https://twitter.com/intent/tweet?text=The 'Homy' App in Apple App Store is amazing. Learn more at: https://homy.fun">Twitter</a>
        verbreiten :3
      </p>
    </div>
  </div>

</template>

<script>
export default {
  name: 'Home',
  data() {
    return {
      work: {
        workState: null
      },
      text: '',
      sendEmail: false,
      error: false,
      show: false,
      waiting: false,
      variants: ['primary', 'secondary', 'success', 'warning', 'danger', 'info', 'light', 'dark'],
      headerBgVariant: 'dark',
      headerTextVariant: 'light',
    }
  },
  mounted() {
    fetch('https://marv.link/workState').then(result => {
      result.json().then(result => {
        this.work = result
      })
    }).catch(error => {
      console.error(error)
    })
  },
  computed: {
    mathWorkState() {
      const currentValue = this.work.workState - 100;
      return currentValue + currentValue * -2;
    }
  },
  methods: {
    onSubmit() {
      this.sendEmailData()
    },
    sendEmailData() {
      if (this.text === '' || !this.text.includes("@")) {
        this.error = true
        return;
      }
      this.waiting = true;

      fetch('https://marv.link/addMail?mail=' + this.text).then(response => {
        response.json().then(() => {
          if (response.ok) {
            this.sendEmail = true
          } else {
            this.error = true
          }
        })
      }).finally(() => this.waiting = false)
    }
  }
}
</script>
