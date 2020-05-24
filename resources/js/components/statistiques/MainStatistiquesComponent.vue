<!--<template>
    <div>
       <graphique-component v-bind:chartdata="this.chartData" v-bind:options="options"></graphique-component>

    </div>
</template>-->

<script>
    import {Bar, mixins} from 'vue-chartjs';

    const {reactiveData} = mixins;
    export default {
        mixins: [reactiveData],
        extends: Bar,
        data() {
            return {
                chartData: {},
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            }
        },
        props: [],
        mounted() {
            this.recupererData();
            this.renderChart(this.chartData, this.options)

        },

        created() {


        },
        methods: {
            recupererData: function () {

                axios.get('http://paschezmamie.test/bonspoints/statistiques/calcul')
                    .then(response => {
                        // JSON responses are automatically parsed.
                        const responseData = response.data
                        this.chartData = {
                            labels: responseData.donnees.map(item => item.mois),
                            datasets: [{
                                label: responseData.enfant,
                                backgroundColor: '#f87979',
                                data: responseData.donnees.map(item => item.total)
                            }]
                        }
                    })

                    .catch(error => console.log(error));

            },
            test: function () {
                // console.log(this.dataStat[0]);
            }
        }
    }
</script>
