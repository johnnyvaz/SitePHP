@extends('layouts.app')

@section('content')
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>{!!$page->titulo!!}</h1>
							<h2>Free html5 templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
							<!-- <p><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn btn-primary popup-vimeo">Watch Our Video</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
							


@endsection

