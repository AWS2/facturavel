<!DOCTYPE html>
<html>
<head>
	<title>Invoices</title>
</head>
<body>
	<h1>Invoices</h1>

	<ul>
	@foreach( $invoices as $invoice )
		<li>
			To: {{$invoice->name}}
			<br>
			Quant: {{$invoice->total}}
		</li>
	@endforeach
	</ul>

</body>
</html>