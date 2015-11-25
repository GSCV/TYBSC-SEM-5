<?php
	interface Salary{
		public function getGs( $basic, $ga);
		public function getGa( $basic, $grade  );
		public function getGd( $gs, $grade );
		public function getNetSalary( $basic, $ga, $gd );
	}
?>