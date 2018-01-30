<div class="container">
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand scroll-top logo"><b>Neu Profile</b></a>
		</div>
		<!--/.navbar-header-->
		
		
		@if(isset($menu))
		
		<div id="main-nav" class="collapse navbar-collapse">
			<ul class="nav navbar-nav" id="mainNav">
				
				@foreach($menu as $item)
					<li {{ $item['atributes'] }}><a href="#{{ $item['alias'] }}" class="scroll-link">{{ $item['title'] }}</a></li>
				@endforeach

			</ul>
		</div>
		<!--/.navbar-collapse-->
		
		@endif
		
		
	</nav>
	<!--/.navbar-->
</div>
<!--/.container-->

@if(session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
@endif

@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif