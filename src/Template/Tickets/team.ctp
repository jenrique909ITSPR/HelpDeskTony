<script>
$(document).ready(function(){
var data = <?php  echo $dataChartJson ?>;
var plot1 = jQuery.jqplot ('chart1', [data],
  {
    grid: {
            drawBorder: false,
            drawGridlines: false,
            background: '#ffffff',
            shadow:false
        },
    seriesDefaults: {
      // Make this a pie chart.
      renderer: jQuery.jqplot.PieRenderer,
      rendererOptions: {
        // Put data labels on the pie slices.
        // By default, labels show the percentage of the slice.
        sliceMargin: 7,
        showDataLabels: true
      }
    },
    seriesColors: [ "#F39C12", "#DD4B39", "#00C0EF","#666699"],

    legend: { show:true,
      placement: 'outside',
      rendererOptions: {
               numberRows: 1
           },
      location: 's'
    }
  }
);
});

</script>
<div class="tickets index">
  <div class="boxContainer center">
    <ul class="myfilter">
      <li><?= $this->Html->link(__('My Ticket'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
      <li class="myfilterActive"><?= $this->Html->link(__('My Group'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('All Ticket'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
    </ul>
  </div>

  <!--<div class="boxContainer center">
    <div class="ticketsBox" style="background: #F39C12;">
      <div class="ticketsBoxTitle">Incidentes</div>

    </div>
    <div class="ticketsBox" style="background: #F39C12;">
      <div class="ticketsBoxTitle">Incidentes</div>

    </div>
    <div class="ticketsBox" style="background: #F39C12;">
      <div class="ticketsBoxTitle">Incidentes</div>

    </div>
    <div class="ticketsBox" style="background: #F39C12;">
      <div class="ticketsBoxTitle">Incidentes</div>

    </div>
  </div>
-->

  <h3><?= __('My Team') ?></h3>
  <div class="boxContainer center">
    <div class="column2">
      <table>
        <tr>
          <td><?= __('Users') ?></td>
          <td>I</td>
          <td>P</td>
          <td>S</td>
          <td>C</td>
        </tr>
      </table>
    </div>
    <div class="column2">
      <table>
        <tr>
          <td><?= __('Branches') ?></td>
          <td>I</td>
          <td>P</td>
          <td>S</td>
          <td>C</td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div id="chart1" style=" float: right; margin: -90px 70px 10px; height:350px; width:350px; position: static;">
</div>
