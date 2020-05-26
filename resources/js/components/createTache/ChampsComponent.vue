<template>
    <div>

        <div class="card-body">
            <div class="form-group row">
                <label for="id_date" class="col-sm-6 col-form-label">Date : </label>
                <div class="col-sm-6">
                    <input type="date" class="form-control mr-2" id="id_date" v-model="bonPoint.dateBonPoint"
                           v-bind:class="{ 'is-invalid':bonPoint.dateTacheIsNonSaisie }">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-6 col-form-label" for="id_responsable">Responsable : </label>
                <div class="col-sm-6">
                    <select class="custom-select mr-2" id="id_responsable" name="responsable"
                            v-model="bonPoint.responsable">
                        <option v-for="responsable in responsables" :key="responsable.id" :value="responsable.id">{{
                            responsable.prenom }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-6 col-form-label" for="id_enfant">Enfant : </label>
                <div class="col-sm-6">
                    <select class="custom-select mr-2 " id="id_enfant" name="enfant" v-model="bonPoint.enfant"
                            v-bind:class="{ 'is-invalid':bonPoint.enfantIsNonSaisi }">
                        <option v-for="enfant in enfants" :key="enfant.id" :value="enfant.id">{{ enfant.prenom }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="id_tache">Tache : </label>
                <div class="col-sm-9">
                    <select class="custom-select mr-2" id="id_tache" name="tache" v-model="bonPoint.tache"
                            v-bind:class="{ 'is-invalid':bonPoint.tacheIsNonSaisie }">
                        <option v-for="tache in taches" :key="tache.id" :value="tache.id">{{ tache.libelle }}</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="checkbox" value="isBonus" id="idbonus" v-model="bonPoint.isBonus">
                    <label class="ml-1" for="idbonus">Bonus</label>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                dateTache: '2020-12-12'

            }
        },
        props: ['responsables', 'enfants', 'taches', 'userId', 'bonPoint'],
        mounted() {

        },
        created() {


        },
        methods: {}
    }
</script>
