<template>
    <div>

        <div class="form-inline">
            <label class="mr-2" for="id_name">Date : </label>
            <input type="date" class="form-control mr-2" id="id_name" v-model="bonPoint.dateBonPoint" v-bind:class="{ 'is-invalid':bonPoint.dateTacheIsNonSaisie }">
            <label class="mr-2" for="id_responsable">Responsable : </label>
            <select class="custom-select mr-2" id="id_responsable" name="responsable" v-model="bonPoint.responsable">

                <option v-for="responsable in responsables" :key="responsable.id" :value="responsable.id"
                        >
                    {{ responsable.prenom }}
                </option>
            </select>
            <div class="form-inline">
                <label class="mr-2" for="id_enfant">Enfant : </label>
                <select class="custom-select mr-2 " id="id_enfant" name="enfant" v-model="bonPoint.enfant" v-bind:class="{ 'is-invalid':bonPoint.enfantIsNonSaisi }">
                    <option v-for="enfant in enfants" :key="enfant.id" :value="enfant.id">{{ enfant.prenom }}</option>
                </select>
             </div>

            <label class="mr-2" for="id_tache">Tache : </label>
            <select class="custom-select mr-2" id="id_tache" name="tache" v-model="bonPoint.tache" v-bind:class="{ 'is-invalid':bonPoint.tacheIsNonSaisie }">
                <option v-for="tache in taches" :key="tache.id" :value="tache.id">{{ tache.libelle }}</option>
            </select>
            <div class="custom-control-inline  mr-2">
<!--                <input type="checkbox"  id="is_bonus"  v-model="dateTache">-->
                <input type="checkbox" value="isBonus" id="idbonus" v-model="bonPoint.isBonus">
                <label class="ml-1" for="idbonus">Bonus</label>


            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                dateTache:'2020-12-12'

            }
        },
        props: ['responsables','enfants','taches','userId','bonPoint'],
        mounted() {

        },
        created() {


        },
        methods: {

        }
    }
</script>
