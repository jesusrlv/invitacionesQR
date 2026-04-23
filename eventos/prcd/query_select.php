<?php
                          include('qc.php');
                          // include('prcd/query_eventos.php');
                          $evento = "SELECT * FROM eventos";
                          $resultadoEvento = $conn->query($evento);
                          while($rowEventos = $resultadoEvento->fetch_assoc()){
                            echo'
                            <option value="'.$rowEventos['id'].'">💻 '.$rowEventos['nombre'].'</option>
                            ';
                          }
                        ?>