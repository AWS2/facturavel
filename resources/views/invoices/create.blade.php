<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>

	<h1>Create factura</h1>
	<form method="post" action="/invoice">
		{{csrf_field()}}
		<input type="text" name="number" placeholder="number"><br>
		<input type="text" name="name" placeholder="name"><br>
		<input type="text" name="address" placeholder="address"><br>
		<input type="text" name="address2" placeholder="address2"><br>
		<input type="text" name="city" placeholder="city" ><br>
		<input type="text" name="zipcode" placeholder="zipcode"><br>
		<input type="text" name="country" placeholder="country"><br>
		<input type="decimal" name="total" placeholder="total">€<br>
		<input type="decimal" name="vat" placeholder="vat">%<br>

		<input type="submit"/>
	</form>

</body>
</html>