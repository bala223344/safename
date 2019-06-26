

<script>
import { Doughnut } from 'vue-chartjs'
import { log } from 'util';

export default {
  extends: Doughnut,
  props: ['score'],
  data: () => ({
  
    chartdata: {
      labels: ['January', 'February'],
      datasets: [
         {
                data: [],
                backgroundColor: [
                    "#4168e4",
                ],
                borderWidth: 0, //this will hide border

                
            }
      ]
    },
     options: {
            segmentShowStroke: false,

    height:200,
      width:200,
            events: [],
            legend: {
                display: false,
            },
         
            rotation: 1 * Math.PI,
          circumference: 1 * Math.PI,
          cutoutPercentage:80
        }
  }),

  mounted () {


    this.chartdata.datasets[0].data = [this.score, 100-this.score];
    this.renderChart(this.chartdata, this.options)
  }
}
</script>