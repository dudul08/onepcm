<template>
    <div>

        <input type="text" name="nom"  v-model="objet1.prenom"  >
        <input type="text" name="prenom"  v-model="objet1.nom"  >
        <input type="checkbox" v-model="objet1.actif">
        <select v-model="objet1.niveau" name="" id="">
            <option value="Test1">Test1</option>
            <option value="Test2">Test2</option>
            <option value="Test3">Test3</option>
        </select>
        <div class="btn btn-danger col-2" v-on:click="supprimerFruit(index)">Supprimer {{ t.age }}</div>

    </div>
    <!--    <div class="col-2 mr-3"> test</div>
        <input class="col-2 mr-3" type="text" v-model="code" name="" id="">-->
    <!--    <div class="btn btn-danger col-2" v-on:click="supprimerFruit(index)">Supprimer</div>-->
    <!--    <h1>{{ + ' ' + }}</h1>-->




</template>

<script>


    export default {
        props: ['objet1','listLibelleReference','index','t'],
        methods: {
            supprimerFruit: function (index) {
                let vm = this;
                let txt = this.txt;
                this.listLibelleReference.splice(index, 1);

            }
        }
    };
</script>
