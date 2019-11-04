<?php 

	/**
	 * 
	 */
	class Activity
	{

		private $user;
		private $dep;
		private $dest;
		private $totaltime;
		private $steps;
		
		function __construct($dep, $dest) {
			$this->dep = $dep;
			$this->dest = $dest;
		}

		public function getUser(){
			return $this->user;
		}

		public function setUser($user){
			$this->user = $user;
		}

		public function getDep(){
			return $this->dep;
		}

		public function setDep($dep){
			$this->dep = $dep;
		}

		public function getDest(){
			return $this->dest;
		}

		public function setDest($dest){
			$this->dest = $dest;
		}

		public function getTotaltime(){
			return $this->totaltime;
		}

		public function setTotaltime($totaltime){
			$this->totaltime = $totaltime;
		}

		public function getSteps(){
			return $this->steps;
		}

		public function setSteps($steps){
			$this->steps = $steps;
		}
	}

?>