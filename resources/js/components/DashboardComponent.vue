<template>
  <v-app id="inspire" dark>
    <v-navigation-drawer id="navi"
      v-model="drawer"
      clipped
      fixed
      app
    >
      <v-list dense>
        <v-list-tile ripple>
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Dashboard</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile @click="backToHome" ripple>
          <v-list-tile-action>
            <v-icon>settings</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Back to Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar app fixed clipped-left>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>Agenda API Admin Dashboard</v-toolbar-title>
    </v-toolbar>
    <v-content>
      <v-container fluid grid-list-md>
        <v-layout row justify-center align-center>
            <!-- <v-flex xs12>
              <successalerts :msg=wellcomeAdmin :snack="true"
                        :bootstrap="false"
                        :vuetify="false"></successalerts>
            </v-flex> -->
          <v-flex v-for="i in 4" :key="`6${i}`" xs3>
            <v-expansion-panel>
                <v-expansion-panel-content
                v-for="(item,i) in 5"
                :key="i"
                >
                <div slot="header">Item</div>
                <v-card>
                    <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</v-card-text>
                </v-card>
                </v-expansion-panel-content>
            </v-expansion-panel>
          </v-flex>
          <v-flex xs2 red>BAu Bau</v-flex>
          <v-flex xs2 yellow>BAu Bau</v-flex>
          <v-flex xs2 green>BAu Bau</v-flex>
          <v-flex xs2 blue>BAu Bau</v-flex>
          <v-flex xs2 teal>BAu Bau</v-flex>
          <v-flex xs2 pink>BAu Bau</v-flex>
        </v-layout>
      </v-container>
    </v-content>
    <v-footer app fixed justified-center>
    <v-layout
      justify-center
      row
      wrap
    >
        <span center>
          Agenda API - &copy; 2018
        </span>
    </v-layout>
    </v-footer>
  </v-app>
</template>

<script>
  export default {
    data: () => ({
      drawer: null,
      name: 'Mitica'
    }),
    props: {
      source: String
    },
    computed: {

    wellcomeAdmin: function () {

      return "Wellcome admin "+this.name+"!"
    }
  },
    methods: {
        backToHome() {
            window.location.href = './home';
        }
    }
  }
</script>
