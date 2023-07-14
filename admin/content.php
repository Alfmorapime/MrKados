<?php
$idT = $row['id_tienda'];
                                    $idU = $row['id_user']; ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["id"]; ?></th>

                                        <?php $query_tien = "SELECT * FROM tiendas where id = $idT";
                                        $result_tien = mysqli_query($conection,$query_tien);
                                        while ($rowT = mysqli_fetch_assoc($result_tien)) { ?>

                                        <td><?php echo $rowT["nombreTienda"]; ?></td> <?php } ?>

                                        <?php $query_usu = "SELECT * FROM usuarios where id = $idU";
                                        $result_usu = mysqli_query($conection,$query_usu);
                                        while ($rowU = mysqli_fetch_assoc($result_usu)) { ?>

                                        <td><?php echo $rowU["nombre"]." ".$rowU["apellidos"]; ?></td> <?php } ?>
                                        
                                        <td><?php echo $row["plan"]; ?></td>
                                        <td><?php echo $row["precio"]." MXN"; ?></td>

                                        <?php $fechaDesdeArray = explode("/", $row["desde"]); ?>
                                        <td><?php echo $fechaDesdeArray[2]."-"."$fechaDesdeArray[1]"."-".$fechaDesdeArray[0]; ?></td>
                                        
                                        <?php $fechaHastaArray = explode("/", $row["hasta"]); ?>
                                        <td><?php echo $fechaHastaArray[2]."-"."$fechaHastaArray[1]"."-".$fechaHastaArray[0]; ?></td>

                                        <?php if($row["active"] == 1){ ?>
                                            <td>Activo</td> <?php } else if($row["active"] == 2){ ?>
                                            <td>Pendiente</td> <?php } else { ?> <td>Desactivado</td> <?php }?>
                                        <td>
                                    <!-- <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=colonias&action=delete"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; border:1px solid; border-color:#ffa300;" type="button"></a> -->
                                    <a href="moduloDetalle.php?semd=<?php echo $row['id']; ?>&semdid=<?php echo $row['id_tienda']; ?>&correo=<?php echo $user; ?>&key=Suscripciones&action=delete"><input class="btn btn-b" value="Eliminar" style="background:#ffa300; width:90%; border:1px solid; border-color:#ffa300;" type="button"></a>
                                    <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=Suscripciones&sus=<?php echo $row['id']; ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; width:90%; color:white;">Editar</a>
                                        <?php if($row['formulario'] == 1)
                                        { ?>
                                            <a href="moduloDetalle.php?correo=<?php echo $user; ?>&key=formulario&sus=<?php echo $row['id']; ?>" class="btn" style="background:#ffa300; border:1px solid; border-color:#ffa300; width:90%; color:white;">Ver Formulario</a>
                                    <?php } ?>
                                        
                                        </td>
                                    </tr>