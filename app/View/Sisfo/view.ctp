<?php   
    //Datatables
    echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css');
    echo $this->Html->css('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css');            
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<div class="container">
    <table id="Tabla" class="table-sm table-hover table-light">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Proyecto</th>
                <th>Usuario</th>
                <th>Fecha</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
        <?php 

            foreach($changeControls as $ChangeControl): ?>
            
                <tr>
                    <td><?php echo $ChangeControl['ChangeControl']['id']; ?></td>
                    <td>
                        <?php echo $this->Html->link($ChangeControl['ChangeControl']['product'], array('controller' => 'Sisfo', 'action' => 'complete', $ChangeControl['ChangeControl']['id'])); ?>
                    </td>
                    <td><?php echo $users[$ChangeControl['ChangeControl']['user_id']]; ?></td>
                    <td><?php echo $ChangeControl['ChangeControl']['date']; ?></td>
                    <td><?php echo $ChangeControl['ChangeControl']['description']; ?></td>
                </tr>
            
        <?php endforeach; ?>
        </tbody>
        <tfooter class="thead-light">
            <tr>
                <th>Id</th>
                <th>Proyecto</th>
                <th>Usuario</th>
                <th>Fecha</th>
                <th>Descripción</th>
            </tr>
        </tfooter>
    </table>
</div>
<!--<a href="complete?id=<?php //echo $ChangeControl['ChangeControl']['id']; ?>"><?php //echo $ChangeControl['ChangeControl']['product']; ?></a>-->

<!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../datatables/jquery/jquery-3.3.1.min.js"></script>
    <script src="../datatables/popper/popper.min.js"></script>
    <script src="../datatables/bootstrap/js/bootstrap.min.js"></script>

<!-- para usar botones en datatables JS -->  
    <script src="../datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="../datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="../datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>

<!-- Script para el id del framework DataTable -->
    <script src="../datatables/main.js"></script>