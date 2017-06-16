<!--//////////////////////////////////////////////////////////
                CONTENIDO
///////////////////////////////////////////////////////////-->
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="contenedor">
       
        <!--/////////////////////////////////////////////////////////////////////////////////////////
                                       BOTONES
        //////////////////////////////////////////////////////////////////////////////////////////-->
         <br><br>
        <div class="right row">
            <div id="crearT" class="col s1 m1 l1">
                <a data-tooltip='CREAR TRABAJADOR' class="tooltipped">
                    <i style='font-size:40px;' class="waves-effect waves-purple material-icons">recent_actors</i>
                </a>
            </div>
            <div class="col s1 m1 l1"><p></p></div><div class="col s1 m1 l1"><p></p></div>
            <div class="col s1 m1 l1">
                <a data-tooltip='CERRAR' href="<?php echo base_url('index.php/Reportes')?>" class="tooltipped">
                    <i style='font-size:35px;' class="waves-effect waves-red material-icons">highlight_off</i>
                </a>
            </div>
        </div>
        <br><br>
        <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
        
        <table id="TblMaster" class="striped">
            <caption style="border-radius: 20px 20px 0px 0px; background: #233778; color: white">
                <aside style="color: #233778">UP</aside>
                <aside style="text-align: left">
                    <span style="padding:20px">TRABAJADOR</span>
                    <span style="padding:50px">LUNES</span>
                    <span style="padding:55px">MARTES</span>
                    <span style="padding:20px">MIERCOLES</span>
                    <span style="padding:60px">JUEVES</span>
                    <span style="padding:40px">VIERNES</span>
                    <span style="padding:40px">SABADO</span>
                    <span style="padding:80px">PROMEDIO</span>
                </aside>
            </caption>
            <thead>
                <tr class="tblcabecera">
                    <th style="border-radius: 0px 0px 0px 20px;">Factor de <br>Evaluación</th>
                    <th>resul<br>tado</th>
                    <th>puntos</th>
                    <th>resul<br>tado</th>
                    <th>puntos</th>
                    <th>resul<br>tado</th>
                    <th>puntos</th>
                    <th>resul<br>tado</th>
                    <th>puntos</th>
                    <th>resul<br>tado</th>
                    <th>puntos</th>
                    <th>resul<br>tado</th>
                    <th>puntos</th>
                    <th>semana<br>actual</th>
                    <th>semana<br>pasada</th>
                    <th style="border-radius: 0px 0px 20px 0px;">acumulado X mes</th>
                </tr>
            </thead>
            <tbody>
                <?PHP
                    if(!($RWS)){
                    } else {
                        $c=1;
                       /* foreach ($RWS as $key) {
                            if($key['Activo'] == 0){
                                $activo ="<td><a data-tooltip='CAMBIAR A INACTIVO' class='btn-flat tooltipped noHover' onclick='BorrarTrabajador(".'"'.$key['IdTb'].'"'.", 1)'><i style='color:green; font-size:30px;' class='material-icons'>done</i></a></td>";
                            }else{
                                $activo ="<td><a data-tooltip='CAMBIAR A ACTIVO' class='btn-flat tooltipped noHover' onclick='BorrarTrabajador(".'"'.$key['IdTb'].'"'.", 0)'><i style='color:red; font-size:30px;' class='material-icons'>close</i></a></td>";
                            }
                                
                            echo "<tr>                                    
                                    <td class='regular'>".$c."</td>
                                    <td class='bold'>".$key['NombreC']."</td>
                                    <td>".$key['Cargo']."</td>
                                    <td>".$key['Horario']."</td>"
                                    .$activo.
                                    "<td><a data-tooltip='CAMBIAR' class='btn-flat tooltipped noHover' onClick='CalendarWK(".'"'.$key['IdTb'].'",'.'"'.$key['NombreC'].'"'.")'><i style='color:blue; font-size:30px;' class='material-icons'>today</i></a></td>
                                  </tr>";
                            $c++;
                        }*/
                    }
                ?>
            </tbody>
        </table>
    </div>
</main>