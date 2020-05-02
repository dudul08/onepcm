<template>


    <form class="form-inline">
        <label class="mr-2" for="id_name">Date : </label>
        <input type="date" class="form-control mr-2" id="id_name">
        <label class="mr-2" for="id_responsable">Responsable : </label>
        <select class="custom-select mr-2" id="id_responsable" name="responsable">
            <option v-for="responsable in responsables"  :key="responsable.id" value="1">{{ responsable.prenom }}</option>
        </select>
        <label class="mr-2" for="id_enfant">Enfant : </label>
        <select class="custom-select mr-2" id="id_enfant" name="enfant">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <label class="mr-2" for="id_tache">Tache : </label>
        <select class="custom-select mr-2" id="id_tache" name="tache">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
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
                responsable: {
                    id: '', name: '', prenom: ''
                },
                responsables: {}
            }
        },
        props: ['iconValidation'],
        mounted() {
            console.log('Component mounted.'),
            this.listerResponsable()
        },
        created() {

        },
        methods: {
            listerResponsable: function () {
                axios.get('http://paschezmamie.test/responsables/liste')
                    .then(response => this.responsables =response.data)
                    .catch(error => console.log(error));
            }
        }
    }
</script>
