@foreach($posts as $post)
<div class="post-preview">
  	<a href="{{route('post.show', ['id' => $post -> id])}}">
      <div class="index-img-list"><img src="{{$post->image_url}}"></div>
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
