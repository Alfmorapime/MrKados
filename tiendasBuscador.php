
    <?php
    $result_tiendas = mysqli_query($conection,$query_tiendas);
    while ($row = mysqli_fetch_assoc($result_tiendas)) 
    { 
        $logo = $row['logo'];
                                 $id = $row['id'];
                                 $web = $row['paginaWeb'];
                                 $direccion = $row['direccion'];
                                 $whatsaap = $row['whatsaap'];
                                 $facebook = $row['linkFacebook'];
                                 $telefono = $row['telefono'];
        ?>

<div class="product" style="box-shadow:2px 2px 2px 2px #888888; background:white;">
                                        <div class="product-image">
                                            <div style="width:100%; height:60px;">
                                                <!-- Lugar Estrellas  -->
                                                <?php if($row['correo'] > "0" && $row['correo'] < "1.5") { ?>
                                                        <div style="width:100%; height:25px; margin-left:90%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                    
                                                    <?php }
                                                    
                                                    
                                                     else if($row['correo'] >= "1.5" && $row['correo'] < "2.5") {
                                                     ?> 
                                                        <div style="width:100%; height:25px; margin-left:80%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 

                                                     else if($row['correo'] >= "2.5" && $row['correo'] < "3.5") {
                                                     ?> 
                                                       <div style="width:100%; height:25px; margin-left:70%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 
                                                    
                                                     else if($row['correo'] >= "3.5" && $row['correo'] < "4.5") {
                                                     ?> 
                                                        <div style="width:100%; height:25px; margin-left:60%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } 
                                                      
                                                      else if($row['correo'] >= "4.5") {
                                                     ?> 
                                                         <div style="width:100%; height:25px; margin-left:55%;">
                                                            <div class="product-rate">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                            </div>
                                                        </div>    
                                                      <?php } ?>
                                                      <!-- FIn Estrellas -->
                                            </div>
                                            <div style="width:100%; height:150px;">
                                                <?php if($logo == "") {?>
                                                <img src="images/img-negocio-sin-imagen.png">
                                                <?php } else { ?>
                                                <img src="images/Logos/<?php echo $logo; ?>"> 
                                                <?php } ?>
                                            </div>
                                            <div style="width:100%; height:25px; ">
                                            <?php if(strlen($categoria) <= 25) 
                                                        { ?>
                                                            <h6 style="text-align:center;"><?php echo $categoria; ?></h6>
                                                      <?php  }
                                                        else
                                                        { $valcat = substr($categoria,0,20);
                                                          $valCatToShow = $valcat." ..."?>
                                                            <h6 style="text-align:center;"><?php echo $valCatToShow; ?></h6>
                                                       <?php }
                                                    ?>
                                            </div>
                                            <div style="width:100%; height:40px;">
                                                <div style="background:#ffa000; float:left; width:100%;">
                                                <?php if(strlen($row['nombreTienda']) <= 25) 
                                                        { ?>
                                                            <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $row['nombreTienda']; ?></h5>
                                                      <?php  }
                                                        else
                                                        { $valNombre = substr($row['nombreTienda'],0,20);
                                                          $valNomToShow = $valNombre." ..."?>
                                                            <h5 style="text-align:center; font-weight:bold; color:white;"><?php echo $valNomToShow; ?></h5>
                                                       <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="width:100%; height: 20px;">
                                                <div style="float:left; width:100%;">
                                                    <div style="float:left; font-size: 12px"><span>Direccion: </span></div>
                                                    <?php if(strlen($direccion) <= 35) 
                                                        { ?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $direccion; ?></span></div>
                                                      <?php  }
                                                        else
                                                        { $valDir = substr($direccion,0,20);
                                                          $valDirToShow = $valDir." ..."?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $valDirToShow; ?></span></div>
                                                       <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="width:100%; height:20px;">
                                                <div style="float:left; width:100%;">
                                                    <div style="float:left; font-size: 12px"><span>Telefono: </span></div>
                                                    <?php if(strlen($telefono) <= 35) 
                                                        { ?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $telefono; ?></span></div>
                                                      <?php  }
                                                        else
                                                        { $valTel = substr($telefono,0,20);
                                                          $valTelToShow = $valTel." ..."?>
                                                            <div style="float:left; font-size: 10px;"><span style="text-align:center; font-weight:bold; color:black; margin-left:2px;"><?php echo $valTelToShow; ?></span></div>
                                                       <?php }
                                                    ?>
                                                </div>
                                            </div>
                                            <div style="width:100%;">
                                                <div style="float:left; width:100%;">
                                                <a href="detalleTienda.php?id=<?php echo $id; ?>&correo=<?php echo $user; ?>&type=<?php echo $usuarioTipo ?>"><div><input type="submit" value="Ver mas" style="background:#ffa300; margin-top:5%; color:white; border:1px solid; border-color:#ffa300; width:100%;"/></div></a>
                                                </div>
                                            </div>
                                            
                                            <div style="width:50%; float:left;">
                                                    <form method="POST">
                                                        <input type="text" value="<?php echo $id; ?>" style="display:none;" name="idTiendaContactoFacebook" />
                                                        
                                                            <?php  if($user == "" || $user == "na") { ?>
                                                            <div style="float:left; width:100%;">
                                                                <a href="inicioSession.php?error=0"><input type="button" value="Facebook" style="margin-top:5%; width:100%; background:#395693; color:white; font-weight:bold; border:1px solid; border-color:#007366;"></a>
                                                            </div>
                                                            <?php } else  if($facebook != "") {?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="submit" value="Facebook" style="margin-top:5%; width:100%; background:#007366;  color:white; font-weight:bold; border:1px solid; border-color:#007366;">
                                                                </div>
                                                            <?php } else { ?>
                                                                <div style="float:left; width:100%;">
                                                                    <input type="button" disabled value="facebook" style="margin-top:5%; background:grey; width:100%; color:white; font-weight:bold; border:1px solid; border-color:grey;">
                                                                </div>
                                                            <?php } ?>
                                                        
                                                    </form>
                                            </div>

                                            <div style="width:100%;">
                                                <form method="POST">
                                                    <input type="text" value="<?php echo $id; ?>" style="display:none;" name="idTiendaContacto" />
                                                    <div style="width:50%; float:left;">
                                                        <?php  if($user == "" || $user == "na") { ?>
                                                        <div style="float:left; width:100%;">
                                                            <a href="inicioSession.php?error=0"><input type="button" value="Whatsaap" style="margin-top:5%; width:100%; background:#26cc64; color:white; font-weight:bold; border:1px solid; border-color:#26cc64;"></a>
                                                        </div>
                                                        <?php } else  if($whatsaap != "") {?>
                                                            <div style="float:left; width:100%;">
                                                                <input type="submit" value="Whatsaap" style="margin-top:5%; background:#ffa000; width:100%; color:white; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                            </div>
                                                        <?php } else { ?>
                                                            <div style="float:left; width:100%;">
                                                                <input type="button" disabled value="Whatsaap" style="margin-top:5%; background:grey; color:white; width:100%; font-weight:bold; border:1px solid; border-color:#ffa000;">
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

    <?php } ?>
