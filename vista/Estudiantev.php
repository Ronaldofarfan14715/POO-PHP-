<?php 

require_once('../controlador/Estudiantec.php');



$estudiante = new EstudianteController();

$estudiante_data = $estudiante->read();


echo '<tabla>

        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>';

        for($n=0;$n< count($estudiante_data); $n++){

            echo '<tr>


                        <td>'.$estudiante_data[$n]['id'].'</td>
                        <td>'.$estudiante_data[$n]['nombre'].'</td>
                        <td>'.$estudiante_data[$n]['edad'].'</td>
                  
            
            
                  </tr>';
        }

        echo '</table>';

        











?>