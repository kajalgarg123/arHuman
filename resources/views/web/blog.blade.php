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
						<h1>Blog</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about area-padding">
        <div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="single-blog-img">
						<a href="#">
							<img src="{{asset('img/blog/1.jpg')}}" alt="">
						</a>
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
					<div class="single-blog">
						<div class="blog-meta">
							<h4>Lorem Ipsum is simply dummy text </h4>
							<span class="date-type">
								<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
							</span>
							<span class="date-type">
								<i class="fa fa-eye" aria-hidden="true"></i>86
							</span>
							<span class="comments-type">
								<i class="fa fa-comment-o"></i>
								<a href="javascript:void(0);">11 comments</a>
							</span>
						</div>
						<div class="blog-text">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
								veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
								velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 
								laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
								accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
								quae ab illo inventore veritatis et quasi architecto beatae vitae.

								Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
								aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui 
								ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem 
								ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non 
								numquam eius modi tempora incidunt ut labore et dolore magnam aliquam 
								quaerat voluptatem.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="all-blog-text">
						<div class="blog-text">
							<h4>
								<a href="javascript:void(0);">Post my imagine Items</a>
							</h4>
							<h5>July 20, 2017 - 13:26</h5>
							<p>
								Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
							</p>
						</div>
						<div class="blog-text">
							<h4>
								<a href="javascript:void(0);">Post my imagine Items</a>
							</h4>
							<h5>July 20, 2017 - 13:26</h5>
							<p>
								Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row" id="reply-form">
				<div class="comment-form">
					 @if(count($errors))
			            <div class="form-group">
			                <div class="alert alert-danger">
			                    <ul>
			                        @foreach($errors->all() as $error)
			                            <li>{{$error}}</li>
			                        @endforeach
			                    </ul>
			                </div>
			            </div>
			        @endif
					<div class="col-md-12">
						<h2>LEAVE A REPLY</h2>
					</div>
				<form method="POST" action="{{route('add.comment')}}">
					@csrf
					<div class="col-md-6">
						<div class="controls controls-row">
							<input type="text" name="name" value="{{ old('name') }}" placeholder="Name"> 
						</div>
					</div>
					<div class="col-md-6">
						<div class="controls controls-row">
							<input type="text" name="email" value="{{ old('email') }}" placeholder="Email address">
						</div>
					</div>
					<div class="col-md-12">
						<div class="controls">
							<textarea type="message" name="comment" placeholder="Comment" rows="5">{{ old('comment') }}</textarea>
						</div>
					</div>
					<div class="col-md-12">
						<div class="controls">
							<button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">POST</button>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection