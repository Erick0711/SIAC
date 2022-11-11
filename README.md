DirectoryIndex App/vista/gasto.php index.php

       <?php foreach($gastos as $gasto){
                if($gasto['estado'] == 1){
                ?>
                <tr>
                    <td><?php echo $gasto['id']?></td>
                    <td><?php echo $gasto['nombre']?></td>
                    <td><?php echo $gasto['descripcion']?></td>
                    <td><?php echo $gasto['monto_gasto']?></td>
                    <th>BS</th>
                    <td>
                    <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModalGasto"><i class="fa fa-pencil-square"></i></a>
                    <a href="./App/Modelo/Gasto.php?eliminar=<?php echo $gasto['id'] ;?>" class="btn btn-danger" name="eliminar" ><i class="fa fa-trash fa-3x"></i></a>
                </td>
                </tr>
                <?php 
                    };
                };?>