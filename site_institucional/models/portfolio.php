1<?php
	
	class portfolio extends model{

		public function getFotos($nroFotos = ''){
			$array = array();

			$sql = "SELECT *FROM portfolio ";

			if(!empty($nroFotos)){
				$sql.="LIMIT ".$nroFotos;
			}

			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0){
				$array = $sql->fetchAll(); 				
			}

			return $array;
		}
	}
?>