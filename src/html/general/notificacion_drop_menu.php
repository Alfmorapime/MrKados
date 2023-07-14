<li class="dropdown notification-dropdown mr-n1">
                                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                                        <?php 
                                                            $chequeoValue = 0;
                                                            $queryNot = "select * from notificaciones_tienda where id_user_tienda = '$idUser';";
                                                            $NotTienda = mysqli_query($conection,$queryNot);
                                                        // var_dump($NotTienda);
                                                            if(isset($NotTienda))
                                                            {
                                                                while ($rowUsuarioID = mysqli_fetch_assoc($NotTienda)) 
                                                                {
                                                                    $chequeo = $rowUsuarioID['chequeo'];

                                                                    if($chequeo == 0)
                                                                    {
                                                                        $chequeoValue = 0;
                                                                        break;
                                                                    }
                                                                    else
                                                                    {
                                                                        $chequeoValue = 1;
                                                                    }
                                                                }
                                                                
                                                                if($chequeoValue == 0)
                                                                {
                                                                    ?> 
                                                                        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    ?>
                                                                        <div><em class="icon ni ni-bell"></em></div>
                                                                    <?php
                                                                }
                                                                
                                                            }
                                                            
                                                        
                                                        ?>
                                                        
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                                        <div class="dropdown-head">
                                                            <span class="sub-title nk-dropdown-title">Notificaciones</span>
                                                            <form method="POST" enctype="multipart/form-data">
                                                                <?php 
                                                                    $usuID = "";
                                                                    $queryUsuarioID = "select * from usuarios where correo = '$correo';";
                                                                    $usuarioIDResult = mysqli_query($conection,$queryUsuarioID);
                                                                    
                                                                    while ($rowUsuarioID = mysqli_fetch_assoc($usuarioIDResult)) 
                                                                    {
                                                                        $usuID = $rowUsuarioID['id'];
                                                                    }

                                
                                                                ?>
                                                                <input type="text" name="usuID" style="display:none;" value="<?php echo $usuID; ?>">
                                                            
                                                            <?php
                                                                if($chequeoValue == 0)
                                                                {
                                                                    ?> <input type="submit" name="leidos" value="Marcar como leidos"> <?php
                                                                }
                                                                else
                                                                {

                                                                }
                                                            ?>
                                                            
                                                            </form>
                                                        </div>
                                                        <div class="dropdown-body">
                                                            <div class="nk-notification">
                                                            
                                                                        <?php
                                                                        $queryTienda = "select * from tiendas where id_usuario = '$correo';";
                                                                        $tiendaResult = mysqli_query($conection,$queryTienda);

                                                                        if(isset($tiendaResult))
                                                                        {
                                                                                $queryTienda = "select * from tiendas where id_usuario = '$correo';";
                                                                                $tiendaResult = mysqli_query($conection,$queryTienda);
                                                                                while ($row = mysqli_fetch_assoc($tiendaResult)) 
                                                                                {
                                                                                    $idTienda = $row['id'];
                                                                                    
                                                                                    $queryNot = "select * from notificaciones_tienda where id_tienda = '$idTienda';";
                                                                                    $NotTienda = mysqli_query($conection,$queryNot);
                                                                                    
                                                                                    if(isset($NotTienda))
                                                                                    {
                                                                                        $queryNot = "select * from notificaciones_tienda where id_tienda = '$idTienda';";
                                                                                        $NotTienda = mysqli_query($conection,$queryNot);

                                                                                        while ($row = mysqli_fetch_assoc($NotTienda)) 
                                                                                        {
                                                                                            $userID = $row['id_usuario'];

                                                                                            $queryTienda = "select * from tiendas where id = '$idTienda';";
                                                                                            $TiendaNot = mysqli_query($conection,$queryTienda);
                                                                                            
                                                                                            while ($rowTienda = mysqli_fetch_assoc($TiendaNot)) 
                                                                                            {
                                                                                                $tiendaNombre = $rowTienda['nombreTienda'];

                                                                                                $queryUser = "select * from usuarios where id = '$userID';";
                                                                                                $UserNot = mysqli_query($conection,$queryUser);
                
                                                                                                while ($rowUser = mysqli_fetch_assoc($UserNot)) 
                                                                                                {
                                                                                                    $nombreNot = $row['nombre'];
                                                                                                    $nombreUser = $rowUser['nombre'];
                                                                                                    $apellidoUser = $rowUser['apellidos'];
                
                                                                                                    ?>
                                                                                                    <div class="nk-notification-item dropdown-inner">
                                                                                                        <div class="nk-notification-icon">
                                                                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                                                                        </div>
                                                                                                        <div class="nk-notification-content">
                                                                                                            <div class="nk-notification-text"><?php echo $nombreUser." ".$apellidoUser." ".$nombreNot." a ".$tiendaNombre; ?></div>
                                                                                                        </div>
                                                                                                        <!-- <div class="nk-notification-time">2 hrs ago</div> -->
                                                                                                    </div>
                                                                                                    <?php
                                                                                                }
                                                                                            }

                                                                                        
                                                                                        }
                                                                                    }
                                                                                

                                                                                }
                                                                        }

                                                                        
                                                                        
                                                                        ?>

                                                                
                                                            
                                                            </div><!-- .nk-notification -->
                                                        </div><!-- .nk-dropdown-body -->
                                                    <!--    <div class="dropdown-foot center">
                                                            <a href="#">View All</a>
                                                        </div> -->
                                                    </div>
                                                </li><!-- .dropdown -->