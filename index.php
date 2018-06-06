<!DOCTYPE html>
<html>
	<head>
		<title>calculator</title>
	</head>
	<body>
		<form action="calc.php" method="POST">        <!-- Form for the Calculator-->
			<input type="text" name="num1"><br><br>
			<input type="text" name="num2"><br><br>
			<select name="cal">                       <!--Options to select Operation-->
				<option value="add">Add</option>
				<option value="sub">Subtract</option>
				<option value="mul">Multiply</option>
				<option value="div">Divide</option>
			</select>
			<button type="submit">Calculate</button>
		</form>
	</body>

</html>