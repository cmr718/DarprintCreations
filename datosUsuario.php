<?php

                     include_once 'database.php';

                     session_start();

                     $correo = $_SESSION['correo'];

                     $db = new Database();
                     $query = $db->connect()->prepare ('SELECT * FROM usuario WHERE correo = :correo');
                     $query->execute(['correo' => $correo]);


                     $row = $query->fetch(PDO::FETCH_LAZY);
                        if($row == true){
                        // validar rol
                            $rol = $row[4];
                            $_SESSION['correo'] = $rol;

                            $nombre = $row['nombre'];
                            $apellido = $row['apellidos'];
                            ?>
                    <div> 
                        <p> 
                            <b> Nombre: </b> <?php echo $nombre; ?><br>
                            <b> Apellidos: </b> <?php echo $apellido; ?><br>

                        </p>
                    </div> 

                    <?php

                          }
                    ?>