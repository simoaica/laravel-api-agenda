<template>
<v-app>
    <!-- Bootstrap style alerts -->

<v-container fluid grid-list-md>
    <v-layout column justify-center >
        <v-flex>
            <div v-if="bootstrapAlert">
                <div class="alert alert-success" role="alert">
                    {{msg}}
                </div>
            </div>
        </v-flex>

        <!-- Vuetify style alert -->
        <v-flex>
            <v-alert
            v-model="vuetifyAlert"
            dismissible
            type="success"
            transition="scale-transition"
            >
                {{msg}}
            </v-alert>
        </v-flex>

         <!-- Vuetify Snackbar style alert    -->
        <v-flex>
            <v-snackbar
                v-model="snackbar"
                top
                auto-height
                >
                    {{msg}}
                <v-btn
                    color="pink"
                    flat
                    @click="snackbar = false"
                >
                    Close
                </v-btn>
                </v-snackbar>
        </v-flex>
    </v-layout>
</v-container>
</v-app>
</template>

<script>
  export default {
    data: () => ({
        vuetifyAlert: false,
        snackbar: false,
        bootstrapAlert: false
    }),
    props: [
        'msg',
        'snack',
        'bootstrap',
        'vuetify',
    ],
    mounted() {
        this.snackbar = this.snack;
        this.bootstrapAlert = this.bootstrap;
        this.vuetifyAlert = this.vuetify;
    },
}
</script>
