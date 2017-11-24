<script>
$(document).ready(function(){
var data = <?php  echo $dataChartJson ?>;
/*[
  ['Test', 12],['Retail', 9], ['Light Industry', 14],
  ['Out of home', 16],['Commuting', 7], ['Orientation', 9]
];*/

var plot1 = jQuery.jqplot ('chart1', [data],
  {
    seriesDefaults: {
      // Make this a pie chart.
      renderer: jQuery.jqplot.PieRenderer,
      rendererOptions: {
        // Put data labels on the pie slices.
        // By default, labels show the percentage of the slice.
        showDataLabels: true
      }
    },
    legend: { show:true, location: 'e' }
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

  <div class="boxContainer center">
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
<div id="chart1" style=" float: right;margin-top: -90px; height:400px; width:400px; ">

</div>
