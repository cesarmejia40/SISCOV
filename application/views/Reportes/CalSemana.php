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
                <aside style="border-bottom: white 2px solid; text-align: left">
                    <span style="border-right: white 1px solid; padding:20px">TRABAJADOR</span>
                    <span style="border-right: white 1px solid; padding:50px">LUNES</span>
                    <span style="border-right: white 1px solid; padding:50px">MARTES</span>
                    <span style="border-right: white 1px solid; padding:36px">MIERCOLES</span>
                    <span style="border-right: white 1px solid; padding:50px">JUEVES</span>
                    <span style="border-right: white 1px solid; padding:45px">VIERNES</span>
                    <span style="border-right: white 1px solid; padding:50px">SABADO</span>
                    <span style="padding:80px">PROMEDIO</span>
                </aside>
            </caption>
            <thead>
                <tr class="tblcabecera">
                    <th style="border-radius: 0px 0px 0px 20px;">Factor de <br>Evaluación</th>
                    <th>resul<br>tado</th><th>puntos</th>
                    <th>resul<br>tado</th><th>puntos</th>
                    <th>resul<br>tado</th><th>puntos</th>
                    <th>resul<br>tado</th><th>puntos</th>
                    <th>resul<br>tado</th><th>puntos</th>
                    <th>resul<br>tado</th><th>puntos</th>
                    <th>semana<br>actual</th>
                    <th>semana<br>pasada</th>
                    <th style="border-radius: 0px 0px 20px 0px;">acumulado <br>X mes</th>
                </tr>
            </thead>
            <tbody>
                <?PHP
                    if(!($RWS)){
                    } else {
                        foreach ($RWS as $key) {
                            echo "<tr>                                    
                                    <td class='bold'>".$key['TB']."</td>
                                    <td>".$key['LunR']."</td><td>".$key['LunP']."</td>
                                    <td>".$key['MarR']."</td><td>".$key['MarP']."</td>
                                    <td>".$key['MieR']."</td><td>".$key['MieP']."</td>
                                    <td>".$key['JueR']."</td><td>".$key['JueP']."</td>
                                    <td>".$key['VieR']."</td><td>".$key['VieP']."</td>
                                    <td>".$key['SabR']."</td><td>".$key['SabP']."</td>
                                    <td>".$key['PSAc']."</td>
                                    <td>".$key['PSAn']."</td>
                                    <td>".$key['PAM']."</td>
                                  </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</main>