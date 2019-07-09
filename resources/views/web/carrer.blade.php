@extends('layouts.web')

@section('content')
<div data-spy="scroll" data-target="#navbar">
	<div class="about-banner">
		@if(session()->has('message'))
		    <div class="alert alert-success alert-custom col-md-12">
		    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        {{ session()->get('message') }}
		    </div>
		@endif
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clinical-text">
						<h1>CAREERS</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="about" class="about area-padding">
        <div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<img src="{{asset('img/carrer-img.jpg')}}">
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="section-headline">
						<h2>Position Available</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
						laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit commodo consequat. Duis aute irure dolor in reprehenderit</p>
						<a class="apply-btn" href="#">Apply Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="your-cv">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2>Send us Your CV</h2>
					<p>Required skills</p>
					<p>Education and/or Experience</p>
				</div>
				<div class="col-md-8">
					<form class="form-horizontal" action="{{route('add.resume')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<fieldset>
							<div class="form-group">
								<label class="col-md-3 control-label" for="name">First Name*</label>
								<div class="col-md-9">
									<input id="first_name" name="first_name" type="text" placeholder="Your name" class="form-control" value="{{ old('first_name') }}">
									@if ($errors->has('first_name'))
									    <div class="text-danger">{{ $errors->first('first_name') }}</div>
									@endif
								</div>
							</div>

							<!-- Email input-->
							<div class="form-group">
								<label class="col-md-3 control-label" for="email">Last Name*</label>
								<div class="col-md-9">
									<input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control" value="{{ old('last_name') }}">
									@if ($errors->has('last_name'))
										<div class="text-danger">{{ $errors->first('last_name') }}</div>
									@endif
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="email">Contact Number*</label>
								<div class="col-md-9">
									<input id="contact" name="contact" type="text" placeholder="Contact Number" class="form-control" value="{{ old('contact') }}">
									@if ($errors->has('contact'))
										<div class="text-danger">{{ $errors->first('contact') }}</div>
									@endif
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="email">E-mail*</label>
								<div class="col-md-9">
									<input id="email" name="email" type="text" placeholder="Your email" class="form-control" value="{{ old('email') }}">
									@if ($errors->has('email'))
										<div class="text-danger">{{ $errors->first('email') }}</div>
									@endif									
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="email">Upload Your CV*</label>
								<div class="col-md-9">
									<input id="resume" name="resume" type="file" placeholder="Upload Your CV" class="form-control" value="{{ old('resume') }}">
									@if ($errors->has('resume'))
										<div class="text-danger">{{ $errors->first('resume') }}</div>
									@endif
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3"></label>
								<div class="col-md-9">
									 <input type="checkbox" name="terms" value="{{ old('terms') }}"><label> <span>I agree with the <a href="#">Terms and Conditions</a>.</span></label>
									@if ($errors->has('terms'))
										<div class="text-danger">{{ $errors->first('terms') }}</div>
									@endif
								</div>
							</div>
							<!-- Form actions -->
							<div class="form-group">
								<label class="col-md-3"></label>
								<div class="col-md-9 text-left">
									<button type="submit" class="btn btn-primary btn-lg">Submit</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection