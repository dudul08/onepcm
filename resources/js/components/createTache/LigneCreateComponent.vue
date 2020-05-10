<template>
    <div>

        <div class="form-inline">
           <champs-component v-bind:responsables="responsables" v-bind:taches="taches" v-bind:enfants="enfants"
                             v-bind:user-id="userId"></champs-component>

            <button class="btn btn-primary"><i class="ri-add-line"></i></button>

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
        props: ['responsables','enfants','taches','userId'],
        mounted() {

        },
        created() {


        },
        methods: {

        }
    }
</script>
