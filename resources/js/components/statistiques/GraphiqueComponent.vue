<script>
    import {Bar} from 'vue-chartjs'

    export default {
        extends: Bar,
        data() {
            return {}
        },
        props: ['chartdata','options'],
        mounted() {
            this.renderChart(this.chartdata, this.options)
        }
    }
</script>

