<?php 
require_once './app/vista/vista.empresa.php';
require 'templates/header.phtml';
 ?>
<table>
    <?php foreach($empresa as $empresas):  ?>
        <td class="list-group-item item-task">
            <?= $empresas->nombre ?>
            <?= $empresas->cotizacion ?>
            <?= $empresas->fecha_creacion ?>

        </td>
    <?php endforeach ?>
</table>
<?php

require 'templates/footer.phtml' ?>