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
                        const responseData = response.data;
                        var dynamicColors = function() {
                            var r = Math.floor(Math.random() * 255);
                            var g = Math.floor(Math.random() * 255);
                            var b = Math.floor(Math.random() * 255);
                            return "rgb(" + r + "," + g + "," + b + ")";
                        };
                        this.chartData = {
                            labels: ['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novemnbre','décembre'],
                            datasets: []
                        };
                        responseData.forEach((dataEnfant) => {

                            this.chartData.datasets.push({
                                label: dataEnfant.enfant,
                                backgroundColor: dynamicColors(),
                                data: dataEnfant.donnees.map(item => item.total)
                            });
                        });



                    })

                    .catch(error => console.log(error));

            },
            test: function () {
                // console.log(this.dataStat[0]);
            }
        }
    }
</script>
