<template>


    <form class="form-inline">
        <label class="mr-2" for="id_name">Date : </label>
        <input type="date" class="form-control mr-2" id="id_name">
        <label class="mr-2" for="id_responsable">Responsable : </label>
        <select class="custom-select mr-2" id="id_responsable" name="responsable">
            <option v-for="responsable in responsables" :key="responsable.id" value="1">{{ responsable.prenom }}
            </option>
        </select>
        <label class="mr-2" for="id_enfant">Enfant : </label>
        <select class="custom-select mr-2" id="id_enfant" name="enfant">
            <option v-for="enfant in enfants" :key="enfant.id" value="1">{{ enfant.prenom }}</option>
        </select>
        <label class="mr-2" for="id_tache">Tache : </label>
        <select class="custom-select mr-2" id="id_tache" name="tache">
            <option v-for="tache in taches" :key="tache.id" value="1">{{ tache.libelle }}</option>
        </select>
        <div class="custom-control custom-checkbox mr-2">
            <input type="checkbox" class="custom-control-input" name="bonus" id="id_bonus">
            <label class="custom-control-label" for="id_bonus">Bonus</label>
        </div>

        <button type="submit" class="btn btn-primary ">Ajouter</button>
    </form>

</template>

<script>
    export default {
        data() {
            return {
                responsables: {},
                enfants: {},
                taches: {}
            }
        },
        props: ['iconValidation', 'urlListeResponsables', 'urlListeEnfants', 'urlListeTaches'],
        mounted() {

        },
        created() {
            this.listerResponsables(),
                this.listerEnfants(),
                this.listerTaches()
        },
        methods: {
            listerResponsables: function () {
                axios.get(this.urlListeResponsables)
                    .then(response => this.responsables = response.data)
                    .catch(error => console.log(error));
            },
            listerEnfants: function () {
                axios.get(this.urlListeEnfants)
                    .then(response => this.enfants = response.data)
                    .catch(error => console.log(error));
            },
            listerTaches: function () {
                axios.get(this.urlListeTaches)
                    .then(response => this.taches = response.data)
                    .catch(error => console.log(error));
            }
        }
    }
</script>
