<template>
  <div>
    <div class="home">

      <br class="no-move"/>
      <br class="no-move"/>

      <b-img rounded="circle" src="../assets/logo.png" class="img"></b-img>

      <br class="no-move"/>
      <br class="no-move"/>
      <br class="no-move"/>

      <h1 class="display-title-strong text-dark">Homy</h1>
      <h1 class="display-title-lighter text-dark">Ab dem <u>30.4.2021</u> im Apple App Store</h1>
      <p class="normal-text-secondary text-white-gray-color container">
        Dein Online Hausaufgaben Planer - Mit Homy ist deine Aufgaben Verwaltung kinderleicht zu bedienen. Außerdem
        wirst du erinnert wenn du deine Aufgaben abgeben musst und mehr.
      </p>

      <a target="_blank"  v-b-modal.modal-1>
        <b-img class="no-move img" src="../assets/download_button.png"></b-img>
      </a>

      <b-modal id="modal-1"
               :header-bg-variant="headerBgVariant"
               :header-text-variant="headerTextVariant" title="Bald verfügbar" ok-only>
        <p class="my-4 text-dark"><strong>Die App ist noch nicht verfügbar komme bald wieder!</strong></p>
      </b-modal>

    </div>

    <br class="no-move img-inv-only-handy"/>
    <br class="no-move img-inv-only-handy"/>

    <div>

      <b-img src="../assets/memoji1.png" class="img img-inv-only-handy"></b-img>
      <b-img src="../assets/memoji2.png" class="img"></b-img>

    </div>

    <div class="purple-black-wait">

      <br class="no-move"/>


      <h1 class="display-title-strong text-white">Homy - In benutzung</h1>
      <p class="normal-text-secondary text-white">
        Homy teilt keine Daten in Datenbanken. Sie bleiben einzig und alleine auf deinem Gerät gespeichert.
      </p>

      <b-img style="padding-right: 30px" src="../assets/iphone-1.png" class="img img-inv-only-handy"></b-img>
      <b-img style="padding-left: 30px" src="../assets/iphone-2.png" class="img img-inv-only-handy"></b-img>

      <br class="no-move img-inv-only-handy"/>
      <br class="no-move"/>
    </div>

    <br class="no-move"/>

    <div class="" style="alignment: bottom">



      <p class="smaller-end-text">© {{ new Date().getFullYear() }}
        <a style="color: #6868b3" href="https://marvhuelsmann.de">Marvin Hülsmann</a> -
        <a style="color: #6868b3" target="_blank" href="https://marvhuelsmann.de/data">Privacy Policy</a> -
        Auf <a style="color: #6868b3" target="_blank"
           href="https://twitter.com/intent/tweet?text=New App: Homy is amazing!">Twitter</a> verbreiten :3
      </p>
    </div>

  </div>

</template>

<script>
// @ is an alias to /src

export default {
  name: 'Home',
  data() {
    return {
      show: false,
      variants: ['primary', 'secondary', 'success', 'warning', 'danger', 'info', 'light', 'dark'],
      headerBgVariant: 'dark',
      headerTextVariant: 'light',
    }
  }
}
</script>
