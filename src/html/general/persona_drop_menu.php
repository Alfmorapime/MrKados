<div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                            <div class="user-card">
                                                                <div class="user-avatar">
                                                                    <em><img src="../images/iconom.png"/></em>
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="lead-text"><?php echo $name." ".$apellido; ?></span>
                                                                    <span class="sub-text"><?php echo $correo; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-inner">
                                                            <ul class="link-list">
                                                                <li><a href="html/general/index.php?user=<?php echo $correo; ?>&type=<?php echo $usuarioTipo; ?>&op=config"><em class="icon ni ni-user-alt"></em><span>Ver Perfil</span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="dropdown-inner">
                                                            <ul class="link-list">
                                                                <li><a href="../index2-2.php"><em class="icon ni ni-signout"></em><span>Cerrar Sesión</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>