<template>
    <div>

        <div class="form-inline">
            <label class="mr-2" for="id_name">Date : </label>
            <input type="date" class="form-control mr-2" id="id_name">
            <label class="mr-2" for="id_responsable">Responsable : </label>
            <select class="custom-select mr-2" id="id_responsable" name="responsable">

                <option v-for="responsable in responsables" :key="responsable.id" :value="responsable.id"
                        :selected="userId == responsable.id">
                    {{ responsable.prenom }}
                </option>
            </select>
            <label class="mr-2" for="id_enfant">Enfant : </label>
            <select class="custom-select mr-2" id="id_enfant" name="enfant">
                <option v-for="enfant in enfants" :key="enfant.id" :value="enfant.id">{{ enfant.prenom }}</option>
            </select>
            <label class="mr-2" for="id_tache">Tache : </label>
            <select class="custom-select mr-2" id="id_tache" name="tache">
                <option v-for="tache in taches" :key="tache.id" :value="tache.id">{{ tache.libelle }}</option>
            </select>
            <div class="custom-control custom-checkbox mr-2">
                <input type="checkbox" class="custom-control-input" name="bonus" id="id_bonus">
                <label class="custom-control-label" for="id_bonus">Bonus</label>
            </div>

            <button class="btn btn-primary">Ajouter</button>

        </div>
    </div>
</template>

<script>
    export default {
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
