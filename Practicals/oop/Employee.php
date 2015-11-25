<?php
	require("Person.php");
	require("Salary.php");

	class Employee extends Person implements Salary {
		private $design ;
		private $dept ;
		private $basic ;

		public function __construct(){
			$this->design = "";
			$this->dept = "";
			$this->basic = 0.0;
		}
		public function setEmpId( $eid ){
			Person::setPersonId( $eid );
		}

		public function setEmpName( $name ){
			Person::setPersonName( $name );
		}

		public function getEmpId(){
			return Person::getPersonId();
		}

		public function getEmpName(){
			return Person::getPersonName();
		}

		public function setDesignation( $design ){
			$this->design = $design ;
		}

		public function getDesignation(){
			return $this->design;
		}

		public function setDepartment( $dept ){
			$this->dept = $dept ;
		}

		public function getDepartment(){
			return $this->dept ;
		}

		public function setSalary( $salary ){
			$this->salary = $salary ;
		}

		public function getSalary(){
			return $this->salary;
		}

		public function getGs( $basic, $ga ) {
			$gs = $basic + $ga ;
			return $gs ;
		}
		public function getGa( $basic, $grade ){
			$gpay = 0.0 ;

			if ( $grade == 1 ) {
				$gpay = 15000 ;
			}elseif ( $grade == 2 ) {
					$gpay = 10000 ;
			}elseif ( $grade == 3 ) {
					$gpay = 5000 ;
			}elseif ( $grade == 4) {
					$gpay = 4500 ;
			}else{
					$gpay = 0;
			}
			$da = $basic * 0.50 ;
			$hra = $basic * 0.20 ;
			$medical = $basic * 0.05 ;

			$ga = $basic + $gpay + $da + $hra + $medical;
			return $ga ;
		}
		public function getGd( $gs, $grade ){
			$ins = 0.0;
			if ( $grade == 1 ) {
				$ins = 15000 ;
			}elseif ( $grade == 2 ) {
					$ins = 10000 ;
			}elseif ( $grade == 3 ) {
					$ins = 5000 ;
			}elseif ( $grade == 4) {
					$ins = 2500 ;
			}else{
					$ins = 0;
			}
			$ptax = $gs * 0.05 ;
			$epf = $gs * 0.125 ;
			$gd = $ins + $ptax + epf ;

			return $gd ;
		}
		public function getNetSalary( $basic, $ga, $gd ){
			$ns = $basic + $ga - $gd;
			$itax = 0 ;
			if ( $ns >= 100000 ){
				$itax = $ns * 0.10 ;
			}
			$ns = $ns - itax ;
			return $ns ;
		}
	}
?>