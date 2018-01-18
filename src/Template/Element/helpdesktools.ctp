<div class="right">
  	<ul class="topnavPageR">
   		  <!--<li><a href="" title="Convertir en Incidente"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>-->
        <li>
          <?php echo "<a href='". $this->Url->build([
            "controller" => "Tickets",
            "action" => "changueStateTicket",
            $ticket->id
          ]) ."'><i class='fa fa-exchange' aria-hidden='true'></a></i>" ?>
        </li>
        <li><a href="" title="Alertar"><i class="fa fa-flag-o" aria-hidden="true"></i></a></li>
        <li>
          <?php echo "<a href='". $this->Url->build([
            "controller" => "Tickets",
            "action" => "favorite",
            $ticket->id

          ]) ."'><i class='fa fa-thumb-tack' aria-hidden='true'></a></i>" ?>
        </li>
        <li>
          <!--<?php echo "<a href='". $this->Url->build([
            "controller" => "Tickets",
            "action" => "print",
            $ticket->id
          ]) ."'><i class='fa fa-print' aria-hidden='true'></a></i>" ?> -->
          <a href="" title="Print"><i class="fa fa-print" aria-hidden="true"></i></a>
        </li>
        <li>
          <?php echo "<a href='". $this->Url->build([
            "controller" => "Tickets",
            "action" => "clonar",
            $ticket->id
          ]) ."'><i class='fa fa-clone' aria-hidden='true'></a></i>" ?>
    </li>
        <li><a href=""  title="Enlazar"><i class="fa fa-link" aria-hidden="true"></i></a></li>
   	</ul>
</div>
