<template>
    <div>
        <graphique-component v-bind:chartdata="this.chartdata" v-bind:options="options"></graphique-component>
    </div>
</template>

<script>
    import GraphiqueComponent from "./GraphiqueComponent";

    export default {
        components: {GraphiqueComponent},
        data() {
            return {
                chartdata: {
                    labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                    datasets: [
                        {
                            label: 'Baptiste',
                            backgroundColor: '#f87979',
                            data: [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11]
                        },
                        {

                            label: 'Elise',
                            backgroundColor: '#f87416',
                            data: [40, 20, 102, 39, 10, 10, 39, 80, 40, 20, 12, 11]
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            }


        },
        props: [],
        mounted() {

        },
        created() {


        },
        methods: {}
    }
</script>
