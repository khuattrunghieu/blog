@extends('layouts.blog')
@section('content')
<header class="masthead" style="background-image: url('img/post-bg.jpg')">
  	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="post-heading">
			  		<h1>Man must explore, and this is exploration at its greatest</h1>
			  		<h2 class="subheading">Problems look mighty small from 150 miles up</h2>
			  		<span class="meta">Posted by
			   		 <a href="#">Start Bootstrap</a>
			   		on August 24, 2018</span>
				</div>
			</div>
		</div>
  	</div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($posts as $post)
        	<div class="post-preview">
            	<a href="post.html">
             		<h2 class="post-title">
            			{{ $post -> title }}
              		</h2>
              		<h3 class="post-subtitle">
               			{{ $post -> content }}
              		</h3>
            	</a>
            	<p class="post-meta">Posted by
              	<a href="#">KtH</a>
          	</div>
        	<hr>
        	@endforeach

          	{{ $posts -> links() }}
          	<!-- Pager -->
          	<div class="clearfix">
            	<a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        	</div>
        </div>
    </div>
</div>
@stop