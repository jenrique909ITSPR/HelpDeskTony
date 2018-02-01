<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Position $position  */
?>

<div class="purchaseorder view">
    <div><?php $purchaseorder->FechaSolic ?></div>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Compañia a facturar: <br><?= $purchaseorder->company->Nombre  ?> </td>
    <td>Sucursal:<br><?= $purchaseorder->branch->NOMBRE ?></td>
    <td rowspan="2">Depto. solicitante:<br><?= $purchaseorder->department->Nombre  ?></td>
    <td rowspan="2">No. y descripcion del bien: <br></td>
    <td rowspan="2">Condiciones de compra: <br></td>
  </tr>
  <tr>
    <td colspan="2">Entregar en: <br><?= $purchaseorder->branch->NOMBRE  ?></td>
  </tr>
  <tr>
    <td colspan="2">Proveedor: <br><?= $purchaseorder->supplier->Nombre  ?></td>
    <td colspan="2">Observaciones <br><?= $purchaseorder->Justificacion  ?></td>
    <td>Tiempo de entrega</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">Cant</td>
    <td align="center">Unidad</td>
    <td align="center">Descripcion</td>
    <td align="center">Rubro</td>
    <td align="center">P. Unitario</td>
    <td align="center">Total</td>
  </tr>
    <?php $subtotal = null;
          $subtotalsniva = null;
          foreach ($purchaseorder->purchasedescriptions as $purchasedescription ): ?>
    <tr>
        <td><?= $purchasedescription->Cantidad  ?></td>
        <td><?= $purchasedescription->Unidad  ?></td>
        <td><?= $purchasedescription->Descripcion  ?></td>
        <td></td>
        <td><?= $purchasedescription->precio  ?></td>
        <td><?= $purchasedescription->Cantidad*$purchasedescription->precio  ?></td>
        <?php 
        $subtotal = $subtotal+$purchasedescription->Cantidad*$purchasedescription->precio;
        $subtotalsniva = $subtotalsniva+$purchasedescription->Importe; ?>
    </tr>
    <?php endforeach ?>
  
  
  <tr>
    <td colspan="4" rowspan="4" valign="bottom"><table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td rowspan="2" valign="top">Autorizo compra</td>
        <td rowspan="2" valign="top">Autorizo compra</td>
        <td rowspan="2" valign="top">Recibi lo solicitado</td>
        <td align="center" valign="top">Fecha de recepcion</td>
        <td rowspan="2" align="center" valign="top">FOLIO <br><h4><?= $purchasedescription->CveVale  ?></h4></td>
        </tr>
      <tr>
        <td align="center" valign="bottom">Numero de entrada</td>
        </tr>
    </table></td>
    <td align="right">SubTotal </td>
    <td><?= $subtotal ?></td>
  </tr>
  <tr>
    <td align="right">IVA 16%</td>
    <td><?= $subtotal*.16 ?></td>
  </tr>
  <tr>
    <td align="right">Total</td>
    <td><?= $subtotal+($subtotal*.16) ?></td>
  </tr>
  <tr>
    <td align="right">SubTotal M.N. S/IVA</td>
    <td><?php echo $subtotalsniva;  ?></td>
  </tr>
  <!--<?php debug($purchaseorder->purchaseinvoices); ?>-->
</table>
</div>

