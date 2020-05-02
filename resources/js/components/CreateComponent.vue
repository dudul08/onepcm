<template>


        <form class="form-inline">
            <label class="mr-2" for="inlineFormInputName2">Date : </label>
            <input type="date" class="form-control mr-2" id="inlineFormInputName2">
            <label class="mr-2" for="inlineFormCustomSelectPref">Enfant : </label>
            <select class="custom-select mr-2" id="inlineFormCustomSelectPref">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <div class="custom-control custom-checkbox mr-2">
                <input type="checkbox" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Bonus</label>
            </div>

            <button type="submit" class="btn btn-primary ">Submit</button>
        </form>

</template>

<script>
    export default {
        data() {
            return {}
        },
        props: ['iconValidation'],
        mounted() {
            console.log('Component mounted.')
        },
        methods: {}
    }
</script>
