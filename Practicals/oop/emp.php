<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Employee</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="netsalary.php">
  <table width="500" border="1" align="center">
    <caption>
      Employee Information
    </caption>
    <tr>
      <th scope="row">EId</th>
      <td><input type="text" name="txtEid" id="txtEid"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">Name</th>
      <td><input name="txtName" type="text" id="txtName" size="40"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">Department</th>
      <td><select name="cmbDept" id="cmbDept">
        <option>-- Select --</option>
        <option value="Sales">Sales</option>
        <option value="Purchase">Purchase</option>
        <option value="Account">Account</option>
        <option value="R &amp; D">R &amp; D</option>
        <option value="Marketing">Marketing</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">Designation</th>
      <td><select name="cmbDesign" id="cmbDesign">
        <option>-- Select --</option>
        <option value="Peon">Peon</option>
        <option value="Clerk">Clerk</option>
        <option value="Executive">Executive</option>
        <option value="Manager">Manager</option>
      </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">Basic Salary</th>
      <td><input type="text" name="txtSalary" id="txtSalary"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>