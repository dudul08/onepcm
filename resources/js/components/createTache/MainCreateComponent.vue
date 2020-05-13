<template>
    <div>
        <!--<ligne v-bind:responsables="responsables" v-bind:taches="taches" v-bind:enfants="enfants"
               v-bind:user-id="userId" v-bind:bons-points="bonsPoints" v-bind:bon-point="bonPoint" v-bind:creer-bon-point="creerBonPoint"></ligne>-->


       <button class="btn btn-primary" v-on:click="ajouterBonPoint()"><i class="ri-add-line"></i>Ajouter un bon point</button>

        <div class="table-responsive pt-2">
            <table class="table tabletable-hover table-bordered ">

                <tbody>


                <tr class="pb-2"  v-for="(bonPoint, index) in bonsPoints" :key="index">
                    <td>
                        <div class="form-inline">
                            <champs-component v-bind:responsables="responsables" v-bind:taches="taches"
                                              v-bind:enfants="enfants"
                                              v-bind:user-id="userId" v-bind:bon-point="bonPoint"></champs-component>
                            <button class="btn btn-danger mb-1"><i
                                class="ri-delete-bin-7-line"></i></button>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>


    </div>
</template>

<script>

    import Ligne from "./LigneCreateComponent";

    export default {
        components: {Ligne},
        data() {
            return {
                responsables: [],
                enfants: [],
                taches: [],
                bonsPoints: [],
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

            },
            ajouterBonPoint : function () {
                let bonPoint =  {
                    dateBonPoint:"",
                    responsable:this.userId,
                    enfant:"",
                    tache:"",
                    isBonus:false
                };

                this.bonsPoints.push(bonPoint);
            }
        }
    }
</script>
