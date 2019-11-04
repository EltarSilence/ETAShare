<?php 

	/**
	 * 
	 */
	class Step
	{
		
		private $name;
		private $lat;
		private $long;
		private $eta;
		private $actualTime;
		private $diffTime;

		function __construct($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getLat(){
			return $this->lat;
		}

		public function setLat($lat){
			$this->lat = $lat;
		}

		public function getLong(){
			return $this->long;
		}

		public function setLong($long){
			$this->long = $long;
		}

		public function getEta(){
			return $this->eta;
		}

		public function setEta($eta){
			$this->eta = $eta;
		}

		public function getActualTime(){
			return $this->actualTime;
		}

		public function setActualTime($actualTime){
			$this->actualTime = $actualTime;
		}

		public function getDiffTime(){
			return $this->diffTime;
		}

		public function setDiffTime($diffTime){
			$this->diffTime = $diffTime;
		}
	}

?>