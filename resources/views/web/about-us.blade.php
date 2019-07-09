@extends('layouts.web')

@section('content')
<div data-spy="scroll" data-target="#navbar">
	<div class="about-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clinical-text">
						<h1>About Albumin</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container essentialFunction area-padding">
		<h2 class="text-center">ESSENTIAL FUNCTIONS AND CLINICAL USE OF HUMAN ALBUMIN</h2>
		<p class="text-center">
			An essential protein found in human plasma and accounts for about 50%-60% of plasma proteins.
		</p>
		<div class="container primaryFunc area-padding">
			<h4 class="text-center"><b>THE PRIMARY FUNCTIONS OF ALBUMIN</b></h4>
			<hr>
			<div class="container">
				<div class="col-md-4">
					<p>To maintain intravascular oncotic pressure</p>					
				</div>
				<div class="col-md-4">
					<p>To serve as a free radical scavenger</p>				
				</div>
				<div class="col-md-4">
					<p>To facilitate transportation of substances</p>				
				</div>
			</div>
		</div>
		<p class="container text-center plsVol">
			When plasma volume is drastically reduced, <b>serum albumin supplementation can help restore the losses</b>.
		</p>
		<div class="container thrSolu">
			<div class="container">
				<div class="col-md-6"><button class="btn btn-default">Solution for infusion</button></div>
			</div>
			<div class="container">
				<div class="col-md-6 col-md-offset-3"><button class="btn btn-default">Available in 50 g/l and 200 g/l</button></div>
			</div>
			<div class="container">
				<div class="col-md-6 col-md-offset-5"><button class="btn btn-default">95% human albumin</button></div>
			</div>
		</div>
	</div>
	<div class="container plasmaFinalPro">
		<img src="{{ asset('/img/banner-s.jpg')}}">
	</div>
	<div class="area-padding albuminUse">
		<div class="container">
			<h2 class="text-center">SELECT USES OF ALBUMIN<sup>1,2</sup></h2>
			<div class="table-responsive">          
				<table class="table borderless">
					<thead>
						<tr>
							<th>USES FOR ALBUMIN</th>
							<th>20% ALBUMIN</th>
							<th>5% ALBUMIN</th>
						</tr>
					</thead>
					<tbody>
						<tr class="spacer"><td></td></tr>
						<tr>
							<td>Hypovolemia</td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
						</tr>
						<tr class="spacer"><td></td></tr>
						<tr>
							<td>Hypoalbuminemia due to general causes </td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
						</tr>
						<tr class="spacer"><td></td></tr>
						<tr>
							<td>Burns</td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
						</tr>
						<tr class="spacer"><td></td></tr>
						<tr>
							<td>Adult respiratory distress syndrome</td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
							<td></td>
						</tr>
						<tr class="spacer"><td></td></tr>
						<tr>
							<td>Nephrosis</td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
						</tr>
						<tr class="spacer"><td></td></tr>
						<tr>
							<td>Cardiopulmonary bypass surgery as component of the pump prime</td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
							<td></td>
						</tr>
						<tr class="spacer"><td></td></tr>
						<tr>
							<td>Hemolytic disease of the newborn</td>
							<td><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection