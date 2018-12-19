@extends('layouts.blog')
@section('content')
<script type="text/javascript">
	function loadMore(){
		var url = $('#load_mode_div .float-right').data('href');
		$.ajax({
			type :'GET',
			url: url,
			success : function(data){
				if(data.length ==0){
				}else{
					$('list-post').append(data.html);
					if(data.hasMore)
						var html = '<a class="btn btn-primary float-right" onclick="loadMore();" data-href="'+ data.url+'">Older Posts &rarr;</a>';
					else
						html = '';
					$('#load_mode_div').html(html);
				}
			},error: function(data){
				alert('CÓ LỖI')
			}
		});
	}
</script>
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
          	
        		@include('posts._list')

          	{{ $posts -> links() }}
          	<!-- Pager -->
          	
          	<div class="clearfix">
            	<a class="btn btn-primary float-right" onclick="loadMore();" data-href="{{$posts->nextPageUrl()}}">Older Posts &rarr;</a>
            	<a class="btn btn-primary float-letf" data-href="{{$posts->previousPageUrl()}}"> &larr; Previos Posts</a>
        	</div>
        	
        </div>
    </div>
</div>
@stop
@section('css')
<link rel="stylesheet" type="text/css" href="/css/posts.css">
@stop