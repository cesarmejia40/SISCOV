<?php
/**
 *
 * User: DAZONIPSE
 * Date: 23/03/2017
 * Time: 10:00 am
 */
    class Reports extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function allwork(){        
            $query = $this->db->get('rptSemana');        
            
            if($query->num_rows() <> 0){            
                return $query->result_array();
            }
            return 0;
        }
        
        public function Guardar($Cargo,$Horario){
             
            //$this->db->insert('work', $data);
            $Cargo = str_replace("%22","",$Cargo);
            $Horario = str_replace("%22", "", str_replace("%20"," ",$Horario));

            $this->db->query("CALL pc_Puntos_Semana('$Cargo','$Horario')"); 
        }
    }