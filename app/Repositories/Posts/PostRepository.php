<?php
namespace App\Repositories\Posts;

use App\Traits\postImageUploadTrait;
use App\Models\ {
    Post,postImage,PostView,PostFav
};
class PostRepository implements PostInterface
{
    use postImageUploadTrait;

    protected $post;

    public function __construct(Post $post)
    {
        $this->post=$post;
    }

    public function all()
    {
        //$ads = \Cache::remember('ads','1440', function() {
            //return $this->post::with('postImages')->with('user')->get();
            return $this->post::with('postImages')->select('*')
            ->withCount('postfav')->withCount('PostView')->with('user')
            ->paginate(32);
       // });

        //return $post;
    }

    public function store($request)
    {
        $post = $request->user()->posts()->create($request->all()+['slug'=>$request->title]);
        if($request->file('postimages'))
        $this->storeImags($post,$request->file('postimages'));
    }

    public function storeImags($post,$imgArry)
    {
        foreach($imgArry as $img)
        {
           $img_name=$this->saveImages($img);

           $image=new Image();
           $image->image = $img_name;
           $ad->images()->save($image);
        }
    }

    public function getDetails($id)
    {
       
        return $this->post->find($id);
        
    }

    public function getById($id)
    {
        return $this->post::with('postImages')
        ->withCount('postfav')
        ->withCount('PostView')
        ->with('user')
        ->find($id);
    }

    public function update($request, $id)
    {
        //$request->merge(['user_id' => $request->user()->id]);

    	return $this->post->find($id)->update($request->all());
    }

    /*public function getByUser()
    {
        return $this->ads::whereUser_id(\Auth::user()->id)->get();
    }*/

    /*public function getByCategory($catId)
    {
        return $this->ads::with('images','category')->where('category_id',$catId)->get();
    }*/

    public function delete($id)
    {
        return $this->post->findOrFail($id)->delete();
    }

    public function search($request)
    {
        return $this->post->Filter($request);
    }

    public function newest()
    {

        //$ads = \Cache::remember('ads','1440', function() {
            return $this->post::with('postImages')->select('*')
            ->orderBy('updated_at','DESC')
            ->withCount('postfav')
            ->withCount('PostView')
            ->with('user')
            ->paginate(32);
       // });

        //return $ads;
    }
   
    public function mostviewed()
    {
    
      
        //$ads = \Cache::remember('ads','1440', function() {
            return $this->post::select('*')->whereIn('id',
            PostView::select('post_id')
                ->groupBy('post_id')
                ->get())
                ->with('postImages')
                ->withCount('postfav')
                ->with('PostView')
                ->withCount('PostView')
                ->orderBy('post_view_count', 'DESC')
                ->with('user')
                ->paginate(32);
       // });
        //return $ads;
    }
   
    public function mostfavorited()
    {
        //$ads = \Cache::remember('ads','1440', function() {
            return $this->post::with('postImages')->select('*')->whereIn('id',
                PostFav::select('post_id')
                    ->groupBy('post_id')
                    ->get())
                    ->with('postfav')
                    ->withCount('postfav') 
                    ->withCount('PostView')
                    ->with('user')
                    ->orderBy('postfav_count', 'DESC')
                    ->paginate(32);
       // });

        //return $ads;
    }




   /* public function getCommonAds()
    {
        //return \Auth::user()->favAds;
        return $this->ads::with('images')->select('id','title','slug','price')->whereIn('id',
        Favorite::select('ad_id')
            ->groupBy('ad_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(8)->get()
        )->get();
    }*/
}
?>