<!DOCTYPE html>
<html>
<head>
	<title>ysfashidicki</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Code</th>
							<th width="1%">Price</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $a)
						<tr>
							<td>{{ $a->Id }}</td>
							<td>
								<ul>
									@foreach($a->distributors as $h)
									<li> {{ $h->distributor_id }} </li>
									@endforeach
								</ul>
							</td>
							<td class="text-center">{{ $a->distributors->count() }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>