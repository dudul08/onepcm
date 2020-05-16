<template>
    <div>

        <div class="table-responsive pt-2">

            <button class="btn btn-primary mb-1 ml-1" v-on:click="store()"><i class="ri-save-line"></i>
                Sauvegarder les ajouts</button>



            <table class="table tabletable-hover table-bordered ">
                <tbody>
                <tr class="pb-2" v-for="(bonPoint, index) in bonsPoints" :key="index">
                    <td>
                        <div class="form-inline">
                            <champs-component v-bind:responsables="responsables" v-bind:taches="taches"
                                              v-bind:enfants="enfants"
                                              v-bind:user-id="userId" v-bind:bon-point="bonPoint"></champs-component>

                            <button class="btn btn-primary mb-1 mr-1" v-on:click="ajouterBonPoint()"><i
                                class="ri-add-line"></i></button>
                            <button class="btn btn-primary mb-1 mr-1" v-on:click="dupliquerBonPoint(index)"><i
                                class="ri-file-copy-line"></i></button>

                            <button v-if="testNombreBonPoint()" class="btn btn-danger mb-1 " v-on:click="supprimerBonPoint(index)"><i
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
    import {Coucou76} from "../../classes/test";

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
                this.listerTaches(),
                this.ajouterBonPoint()
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
            ajouterBonPoint: function () {
                let d = new Date();
                let jour = d.getDate();
                let mois = d.getMonth();
                let annee = d.getFullYear();
                mois = mois + 1;
                if (mois < 10) {
                    mois = "0" + mois.toString()
                } else {
                    mois = mois.toString()
                }
                if (jour < 10) {
                    jour = "0" + jour.toString()
                } else {
                    jour = jour.toString()
                }

                let dateDuJour = annee + "-" + mois + "-" + jour;

                let bonPoint = {
                    dateBonPoint: dateDuJour,
                    responsable: this.userId,
                    enfant: "",
                    tache: "",
                    isBonus: false
                };

                this.bonsPoints.push(bonPoint);
            },
            supprimerBonPoint: function (index) {

                if (this.bonsPoints.length > 1) {
                    this.bonsPoints.splice(index, 1);
                }

            },
            dupliquerBonPoint: function (index) {
                let bonPointSource = this.bonsPoints[index];

                let bonPointDuplique={
                    dateBonPoint: bonPointSource.dateBonPoint,
                    responsable: bonPointSource.responsable,
                    enfant: bonPointSource.enfant,
                    tache: bonPointSource.tache,
                    isBonus: bonPointSource.isBonus
                }
                this.bonsPoints.push(bonPointDuplique);


            },
            testNombreBonPoint: function (index) {

                if (this.bonsPoints.length > 1) {
                    return true;
                } else {
                    return false;
                }


            },
            store:function () {

                    this.bonsPoints.forEach((item)=>{
                    axios.post(this.routes.bonsPointsStore,{bonPoint :item})
                        .then(response => console.log(response))
                        .catch(error => console.log(error));
                });

                this.bonsPoints = [];
                this.ajouterBonPoint();

            }

        }
    }
</script>
