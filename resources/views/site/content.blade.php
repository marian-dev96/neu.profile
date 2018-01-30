<div id="#top"></div>
<section id="home">
	<div class="banner-container">
		<img src="{{ asset('assets/images/banner-bg.jpg') }}" alt="banner" />
		<div class="container banner-content">
			<div id="da-slider" class="da-slider">
					
				@foreach($sliders as $item)
					<div class="da-slide">
						<h2>{{ $item['title'] }}</h2>
						<p>{{ $item['text'] }}</p>
						<div class="da-img"></div>
					</div>
				@endforeach
				
			</div>
		</div>
	</div>
</section>






<section id="introText">
	<div class="container">
		<div class="text-center">
		  <h1>{{ $longtitle }}</h1>
		  <p>{{ $text }}</p>
		</div>
	</div>


</section>

<!--About-->
<section id="aboutUs" class="secPad">
	<div class="container">
		<div class="heading text-center">
			<!-- Heading -->
			<h2>I am Sam, a UI Designer & developer</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
		</div>
		<div class="row">
		
			@foreach($abouts as $item)
			
				<div class="col-md-4 text-center tileBox">
				   <div class="txtHead"> <i class="fa {{ $item['icon'] }}"></i>
					<h3>{!! $item['title'] !!}</h3></div>
					<p>{{ $item['text'] }}</p>
				</div>
			
			@endforeach
			
		</div>
	</div>
</section>

	
	
<!--Skills-->
<section id="skills" class="secPad white">
	<div class="container">
	<div class="heading text-center">
			<!-- Heading -->
			<h2>My Skills</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h2>Programming <strong>Skills</strong></h2>
				<p class="mrgBtm20">
					It takes knowledge, smart work, and dedication to make great ideas come to life. I have been helping make great ideas happen for the past 7 years and am always ready for new challenges.
			
				</p>

				@foreach($skills_programming as $item)

					<div class="row">
						<div class="col-md-2 skilltitle">{{ $item['title'] }}</div>
						<div class="col-md-8">
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="{{ $item['progress'] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $item['progress'] }}%;">
									<span class="sr-only">{{ $item['progress'] }}% Complete</span>
								</div>
							</div>
						</div>
					</div>  

				@endforeach

			</div>
			
			<div class="col-sm-6">
				<h2>Designing <strong>Skills</strong></h2>
				<p class="mrgBtm20">
					Problem solving is not always about sitting in a board room talking about the way things should be done. I have a strong background in UI design which allows me to think on my feet and act upon it.
			
				</p>
				
				@foreach($skills_designing as $item)
					
					<div class="row">
						<div class="col-md-2 skilltitle">{{ $item['title'] }}</div>
						<div class="col-md-8">
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="{{ $item['progress'] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $item['progress'] }}%;">
									<span class="sr-only">{{ $item['progress'] }}% Complete</span>
								</div>
							</div>
						</div>
					</div>
				
				@endforeach
				
			</div>
		</div>
	</div>        
</section>


<!--Portfolio-->
<section id="portfolio" class="page-section section appear clearfix secPad">
	<div class="container">

		<div class="heading text-center">
			<!-- Heading -->
			<h2>Portfolio</h2>
			<p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
		</div>

		<div class="row">
			<nav id="filter" class="col-md-12 text-center">
				<ul>
					<li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>

					@foreach($tags as $item)
						<li><a href="#" class="btn-theme btn-small" data-filter=".{{ $item }}">{{ $item }}</a></li>
					@endforeach
					
					
				</ul>
			</nav>
			<div class="col-md-12">
				<div class="row">
					<div class="portfolio-items isotopeWrapper clearfix" id="3">

						@foreach($portfolios as $item)
							
							<article class="col-sm-4 isotopeItem {{ $item['filter'] }}">
								<div class="portfolio-item">
									{!! Html::image('assets/images/portfolio/'.$item->images,'') !!}
									<div class="portfolio-desc align-center">
										<div class="folio-info">
											<a href="assets/images/portfolio/{{ $item['images'] }}" class="fancybox">
												<h5>{{ $item['name'] }}</h5>
												<i class="fa fa-arrows-alt fa-2x"></i>
											</a>
										</div>
									</div>
								</div>
							</article>

						@endforeach
						
					</div>

				</div>


			</div>
		</div>

	</div>
</section>






<!--Contact -->
<section id="contactUs" class="page-section secPad">
	<div class="container">

		<div class="row">
			<div class="heading text-center">
				<!-- Heading -->
				<h2>Let's Keep In Touch!</h2>
				<p>Thank you for visiting out my profile. If you would like to get into contact with me, please fill out the form below.</p>
			</div>
		</div>

		<div class="row mrgn30">
			<!--
			<form method="post" action="" id="contactfrm" role="form">

				<div class="col-sm-4">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="comments">Comments</label>
						<textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
					</div>
					<button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
					<div class="result"></div>
				</div>
			</form>
			-->
			
			{!! Form::open(['url' => route('home'),'method'=>'POST']) !!}
				
				<div class="col-sm-4">
					<div class="form-group">
						{!! Form::label('name','Name:') !!}
						{!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Please enter your name (at least 2 characters)']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('email','Email:') !!}
						{!! Form::text('email',old('email'),['class'=>'form-control','placeholder'=>'Please enter a valid email address']) !!}
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="form-group">
						{!! Form::label('text','Comments:') !!}
						{!! Form::textarea('text',old('text'),['id'=>'editor','class'=>'form-control','cols'=>'3','rows'=>'5','placeholder'=>'Enter your message…']) !!}
					</div>
					{!! Form::button('Submit',['class'=>'btn btn-lg btn-primary','type'=>'submit']) !!}
					<div class="result"></div>
				</div>
			
		    {!! Form::close() !!}
			
			
			
			
			<div class="col-sm-4">
				<h4>Address:</h4>
				<address>
					{!! $adress !!}
				</address>
				<h4>Phone:</h4>
				<address>
					{{ $phone }}<br>
				</address>
			</div>
		</div>
	</div>
	<!--/.container-->
</section>
