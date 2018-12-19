<?php  
	namespace App\Http\Controllers;
	use DB;
	use App\Models\Post;
	use Illuminate\Http\Request;
	class PostController extends Controller
	{
		public function post(Request $request)
		{
			$posts = Post::paginate(6);
			if($request->ajax()){
				$view = view('posts._list', compact('posts'))->render();
				return response()->json(['html'=>$view, 'hasMore'=>$posts->hasMorePages(), 'url'=>$posts->nextPageUrl()]);
			}
			return view('posts.index',compact('posts'));
		}

		public function show($id){
			$post = Post::find($id);
			return view("posts.show", compact('post'));
		}

	}
?>