<template>
  <v-app id="inspire" dark>
    <v-navigation-drawer
      v-model="drawer"
      clipped
      fixed
      app
    >
      <v-list dense>
        <v-list-tile to="home" ripple>
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
      <v-container fluid >
        <v-layout justify-center align-center>
          <v-flex shrink>

          </v-flex>
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
      drawer: null
    }),
    props: {
      source: String
    },
    methods: {
        backToHome() {
            window.location.href = './home';
        }
    }
  }
</script>
