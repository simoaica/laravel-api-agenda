<template>
<div>
    <!-- Bootstrap style alerts -->

    <div v-show="bootstrapAlert">
        <div class="alert alert-danger" role="alert">
            <ul>
                <li v-for="error in JSON.parse(errors)">
                    {{error}}
                </li>
            </ul>
        </div>
    </div>

    <v-app>
        <!-- Vuetify style alert -->

        <div>
            <v-alert
            v-model="vuetifyAlert"
            dismissible
            type="error"
            transition="scale-transition"
            >
            <div>Errors:</div>
            <ul>
                <li v-for="error in JSON.parse(errors)">
                    {{error}}
                </li>
            </ul>
            </v-alert>
        </div>
         <!-- Vuetify Snackbar style alert    -->

        <v-snackbar
            v-model="snackbar"
            top
            auto-height
            >
            <ul>
                <div>Errors:</div><br>
                <li v-for="error in JSON.parse(errors)">
                    {{error}}
                </li>
            </ul>
            <v-btn
                color="pink"
                flat
                @click="snackbar = false"
            >
                Close
            </v-btn>
            </v-snackbar>
    </v-app>
</div>
</template>

<script>
  export default {
    data: () => ({
        vuetifyAlert: false,
        snackbar: false,
        bootstrapAlert: false
    }),
    props: [
        'errors',
        'snack',
        'bootstrap',
        'vuetify'
    ],
    mounted() {
        this.snackbar = this.snack;
        this.bootstrapAlert = this.bootstrap;
        this.vuetifyAlert = this.vuetify;
    },
}
</script>
