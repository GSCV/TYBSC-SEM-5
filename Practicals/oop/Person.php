<?php
	class Person {
		private $id ;
		private $name ;

		public function __construct(){
			$this->id = 0;
			$this->name = "";
		}
		protected function setPersonId( $id ){
			$this->id = $id ;
		}
		protected function setPersonName( $name ) {
			$this->name = $name ;
		}
		protected function getPersonId(){
			return $this->id ;
		}
		protected function getPersonName() {
			return $this->name ;
		}

	}
?>