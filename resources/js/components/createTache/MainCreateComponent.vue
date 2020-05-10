<template>
    <div>
<ligne v-bind:responsables="responsables" v-bind:taches="taches" v-bind:enfants="enfants" v-bind:user-id="userId"></ligne>

    </div>
</template>

<script>

    import Ligne from "./LigneCreateComponent";
    export default {
        components: {Ligne},
        data() {
            return {
                responsables: [],
                enfants: {},
                taches: [],
                routes: {}

            }
        },
        props: ['iconValidation', 'userId', 'tableauRoutes'],
        mounted() {

        },
        created() {
            this.initialiserRoutes(),
                this.listerResponsables(),
                this.listerEnfants(),
                this.listerTaches()

        },
        methods: {
            initialiserRoutes: function () {

                this.routes = JSON.parse(this.tableauRoutes);

            },
            listerResponsables: function () {
                axios.get(this.routes.responsablesListe)
                    .then(response => this.responsables = response.data)
                    .catch(error => console.log(error));

            },
            listerEnfants: function () {

                axios.get(this.routes.enfantsListe)
                    .then(response => this.enfants = response.data)
                    .catch(error => console.log(error));
            },
            listerTaches: function () {
                axios.get(this.routes.tachesListe)
                    .then(response => (this.taches = response.data))
                    .catch(error => console.log(error));

            }
        }
    }
</script>
