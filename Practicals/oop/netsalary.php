<?php
	require("Employee.php");
	$emp = new Employee();
	if( isset($_REQUEST['btnSubmit']))
	{
		$emp->setEmpId( $_POST['txtEid'] );
		$emp->setEmpName( $_POST['txtName'] );
		$emp->setDepartment( $_POST['cmbDept'] );
		$emp->setDesignation($_POST['cmbDesign'] );
		$emp->setSalary($_POST['txtSalary'] );
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="500" border="1" align="center">
  <caption>
    Salary Slip
  </caption>
  <tr>
    <td>Employee Id</td>
    <td><?php echo $emp->getEmpId(); ?></td>
    <td>Department</td>
    <td><?php echo $emp->getDepartment(); ?></td>
  </tr>
  <tr>
    <td>Employee Name</td>
    <td><?php echo $emp->getEmpName(); ?></td>
    <td>Designation</td>
    <td><?php echo $emp->getDesignation(); ?></td>
  </tr>
  <tr>
    <td colspan="2">Basic Salary</td>
    <td colspan="2"><?php echo $emp->getSalary(); ?></td>
  </tr>
  <tr>
    <td><div align="center">Allowances</div></td>
    <td>&nbsp;</td>
    <td><div align="center">Deductions</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>D.A.( 50% )</td>
    <td>&nbsp;</td>
    <td>Prof. Tax ( 5% )</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>H.R.A.( 20% )</td>
    <td>&nbsp;</td>
    <td>E.P.F. ( 12.5 % )</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Medical ( 5% )</td>
    <td>&nbsp;</td>
    <td>Insurance Premium</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Grade Pay</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Total Allowance</td>
    <td>&nbsp;</td>
    <td>Total Deduction</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Net Salary</td>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>