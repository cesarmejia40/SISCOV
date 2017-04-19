<?php
/**
 *
 * User: DAZONIPSE
 * Date: 23/03/2017
 * Time: 10:00 am
 */
    class Works extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function allwork(){        
            $query = $this->db->get('work');        
            
            if($query->num_rows() <> 0){            
                return $query->result_array();
            }
            return 0;
        }

        public function onework($id){        
            $this->db->where('IdTb', $id);
            $query = $this->db->get('work');
                        
            if($query->num_rows() <> 0){            
                return $query->result_array();
            }
            return 0;
        }   

        public function allCargo(){        
            $query = $this->db->get('cargo');        
            
            if($query->num_rows() <> 0){            
                return $query->result_array();
            }
            return 0;
        }

        public function allTurno(){ 
            $this->db->where('Activo', 0);     
            $query = $this->db->get('Horario');  
            
            if($query->num_rows() <> 0){
                return $query->result_array();
            }
            return 0;
        }

        public function del($id, $status){
            $this->db->where('IdTb', $id);
            $data = array('Activo' => $status);

            $this->db->update('work', $data);
        }

        public function Guardar($NombreC,$Cargo,$Horario){
            $data = array(
                'NombreC' => str_replace("%C3%B1","ñ", str_replace("%20"," ",str_replace("%C3%91","Ñ", str_replace("%20"," ",$NombreC)))),
                'Cargo' => $Cargo,
                'Horario' => str_replace("%20"," ",$Horario),
                'Activo'=> 0
            );
            
            $this->db->insert('work', $data);
        }

        public function Calendario($id){        
            $this->db->where('IdTb', $id);
            $query = $this->db->get('calendar');
                        
            if($query->num_rows() <> 0){            
                return $query->result_array();
            }
            return 0;
        }

        public function GCalendario($id,$title,$start){
            $data = array(
                'IdTb' => $id,
                'title' => $title,
                'start' => $start,
                'end'=> $start
            );
            
            $this->db->insert('calendar', $data);

            $this->TCalendario($id, $start);
        }

        public function UCalendario($Id,$IdE,$Punto,$Fecha){
            $this->db->where('Id', $IdE);
            $this->db->where('IdTb', $Id);
            $data = array('title' => $Punto);

            $this->db->update('calendar', $data);

            $this->TCalendario($Id, $Fecha);
        }
        
        function TCalendario($Id,$Fecha){
            $fechats = strtotime($Fecha); //pasamos a timestamp
            
            //el parametro w en la funcion date indica que queremos el dia de la semana
            //lo devuelve en numero 0 domingo, 1 lunes, martes....
            switch (date('w', $fechats)){
                case 0: $idia = 0; $fdia = 0; break;    /*Domingo*/
                case 1: $idia = 0; $fdia = 4; break;    /*Lunes*/
                case 2: $idia = 1; $fdia = 3; break;    /*Martes*/
                case 3: $idia = 2; $fdia = 2; break;    /*Miercoles*/
                case 4: $idia = 3; $fdia = 1; break;    /*Jueves*/
                case 5: $idia = 4; $fdia = 0; break;    /*Viernes*/
                case 6: $idia = 0; $fdia = 0; break;    /*Sabado*/
            }

            $fini = date('Y-m-d', strtotime("$Fecha - $idia day")); //Fecha del dia Lunes
            $ffin = date('Y-m-d', strtotime("$Fecha + $fdia day")); //Fecha del dia Viernes
            $fid = date('Y-m-d', strtotime("$fini - 1 day")); //Fecha donde se guarda el resultado Domingo
            
            $query = $this->db->query("SELECT SUM(title) AS TOTAL FROM calendar WHERE IdTb = ".$Id." AND start BETWEEN '".date('Y-m-d', strtotime($fini))."' AND '".date('Y-m-d', strtotime($ffin))."'");

            //Sumamos los Dias de esa semana
            $row = $query->row();
            
            $this->db->where('IdTb', $Id);
            $this->db->where('start', $fid);
            $query = $this->db->get('calendar');
                        
            if($query->num_rows() <> 0){            
                $this->db->where('IdTb', $Id);
                $this->db->where('start', $fid);
                $data = array('title' => $row->TOTAL);

                $this->db->update('calendar', $data);
            }else{
                $data = array(
                    'IdTb' => $Id,
                    'title' => $row->TOTAL,
                    'start' => $fid,
                    'end'=> $fid
                );
            
                $this->db->insert('calendar', $data); 
            }
        }

        function FEvento($Id,$Fecha){
            $this->db->where('IdTb', $Id);
            $this->db->where('start', $Fecha);
            $query = $this->db->get('calendar');

            if($query->num_rows() <> 0){            
                return 1;
            }
            return 0;
        }
    }