<?php

namespace App\Http\Controllers;
use App\Helpers\helper;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\PostView;
use App\Models\PostFav;
use App\Repositories\Posts\PostInterface;
use App\Repositories\PostFavs\PostFavInterface;
class PostController extends Controller
{
    //
protected $post;
protected $postfav;
    public function __construct(PostInterface $post,PostFavInterface $postfav)
    {
        
        $this->middleware('admin', ['only' => ['create', 'store', 'edit', 'delete']]);
        $this->post=$post;
        $this->postfav=$postfav; 
    }
   
    public function index()
    {
        $posts=Post::latest()->with('postImages')->withCount('postfav')->with('user')->withCount('PostView')->paginate(5);
 
       
        $archives=$this->getArchives();
     
        return view ('posts.index',compact('posts','archives'));
    }
    
    public function show($id)
    {
        //$post=Post::find($id);
        $post=$this->post->getById($id);
        $archives=$this->getArchives();
       // $post->getViewsCount();
      // return  dd ($frr);
       
        //postsView::create(['viewable_type' => \DB::raw('viewable_type + 1'),'viewable_id' =>$id ]);
        
        $postview=new PostView();
        $postview->post_id=$id;
        $post->PostView()->save($postview);
        if (\Auth::check()) 
        $favoritedpost = $this->postfav->show($id);
        return view('posts.show',compact('post','archives','favoritedpost'));//)->with('post',$post);
    }

    public function archive($year,$month)
    {
        $posts=Post::whereYear('created_at',$year)->whereMonth('created_at',$month)->paginate(5);
        $archives=$this->getArchives();
        return view('posts.index',compact('posts','archives'));
    }
    
    public function create()
    {
         $archives=$this->getArchives();
      if (\Gate::allows('handle-post')) {
            return view('posts.create',compact('post','archives'));
      }
            abort(403);

     }

     public function getUserFavorites()
     {
         $userFav=$this->post->getCommonAds();
 
         //return view('user.userFavorites',compact('userFav')); 
     }

    public function store(PostRequest $request)
    {  
        $post = $this->post->store($request); /** using  the repository  */
        return back()->with('success','تم إضافة المقال');
    }
    public function edit($id)
    {
        $archives=$this->getArchives();

        $post = $this->post->getById($id);       

        if (\Gate::allows('handle-post')) {
            return view('posts.edit',compact('post','archives'));
        }

        abort(403);

    }
    public function update(PostRequest $request, $id)
    {
        $post = $this->post->update($request,$id);
        return back()->with('success','تم تعديل المقالة');
    }
    public function destroy($id)
    {
        
        $this->post->delete($id); 
       // return view('index')->with('success','تم حذف الإعلان');
        return back()->with('success','تم حذف المقالة');
         // return view('/ads')->with('success','تم حذف الإعلان');
    }

    private function getArchives()
    {
      //setlocale(LC_ALL, 'ar_DZ');
        return Post::selectRaw('MONTHNAME(created_at) month,MONTH(created_at) month_number,
        YEAR(created_at) year,COUNT(*) posts_count')
        ->groupBy('month','month_number','year')
        ->orderBy('created_at')
        ->get();

    }
    public function getMostViewed()
    {
        $posts=$this->post->mostviewed();
        $archives=$this->getArchives();
        return view('posts.mostviewed',compact('posts','archives'));  
    }
    public function getMostFav()
    {
        $posts=$this->post->mostfavorited();
        $archives=$this->getArchives();
      
       return view('posts.mostfavorited',compact('posts','archives'));
    }
    public function getNewest()
    {
        $posts=$this->post->newest();
        $archives=$this->getArchives();
        return view('posts.newest',compact('posts','archives'));
    }
    public function search(Request $request)
    {
        $posts=$this->post->search($request);
        $archives=$this->getArchives();
        return view('posts.showResults',compact('posts','archives')); 
    }



}
