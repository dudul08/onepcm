<template>
    <div>

        <div class="form-inline">
           <champs-component v-bind:responsables="responsables" v-bind:taches="taches" v-bind:enfants="enfants"
                             v-bind:user-id="userId" v-bind:bon-point="bonPoint"></champs-component>

            <button class="btn btn-primary" v-on:click="ajouterBonPoint()"><i class="ri-add-line"></i></button>

        </div>
    </div>
</template>

<script>
    import Champs from "./ChampsComponent";
    export default {
        components: {Champs},
        data() {
            return {


            }
        },
        props: ['responsables','enfants','taches','userId','bonsPoints','bonPoint','creerBonPoint'],
        mounted() {

        },
        created() {


        },
        methods: {ajouterBonPoint : function () {
                let bonPointNouveau = this.creerBonPoint.get(this.bonPoint);

                this.bonsPoints.push(bonPointNouveau);
            }

        }
    }
</script>
