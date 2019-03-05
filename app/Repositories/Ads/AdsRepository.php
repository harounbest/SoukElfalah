<?php
namespace App\Repositories\Ads;

use App\Traits\ImageUploadTrait;
use App\Models\ {
    Ad,
    Favorite,
    Image,AdView
};

class AdsRepository implements AdsInterface
{
    use ImageUploadTrait;

    protected $ads;

    public function __construct(Ad $ads)
    {
        $this->ads=$ads;
    }

    public function all()
    {
  
        //$ads = \Cache::remember('ads','1440', function() {
            return $this->ads::with('images')->select('*')->where('is_published','=','1')
           ->withCount('favorite')->withCount('Adview')
           ->with('wilaya')
           ->with('currency')
           ->paginate(32);
       // });

        //return $ads;
    }
    public function newest()
    {

        //$ads = \Cache::remember('ads','1440', function() {
            return $this->ads::with('images')->select('*')->where('is_published','=','1') 
            ->orderBy('updated_at', 'DESC')
            ->withCount('favorite')
            ->withCount('Adview')
            ->with('wilaya')
            ->with('currency')
            ->paginate(32);
       // });

        //return $ads;
    }
   
    public function mostviewed()
    {
        //$ads = \Cache::remember('ads','1440', function() {
            return $this->ads::with('images')->select('*')->where('is_published','=','1')->whereIn('id',
            AdView::select('ad_id')
            ->groupBy('ad_id')
            ->get())
                    ->withCount('favorite')
                    ->with('Adview')
                    ->withCount('Adview')
                    ->with('wilaya')
                    ->with('currency')
                    ->orderBy('Adview_count', 'DESC')
                    ->paginate(32);
       // });
       //return $ads;
    }
   
    public function mostfavorited()
    {
        //$ads = \Cache::remember('ads','1440', function() {
            return $this->ads::with('images')->select('*')->where('is_published','=','1')->whereIn('id',
                Favorite::select('ad_id')
                    ->groupBy('ad_id')
                    ->orderByRaw('COUNT(*) DESC')
                    ->get())
                    ->with('favorite') 
                    ->withCount('favorite') 
                    ->withCount('Adview')
                    ->with('wilaya')
                    ->with('currency')
                    ->orderBy('favorite_count', 'DESC')
                    ->paginate(32);
       // });

        //return $ads;
    }
    public function getUnpublished(){
        return $this->ads::with('images')->select('*')->where('is_published','=','0') 
        ->orderBy('updated_at', 'DESC')
        ->with('wilaya')
        ->with('currency')
        ->paginate(32);
    }
    public function publish($request)
    {
        $ad = $this->ads->find($request->id);
        $ad->is_published = 1;
        $ad->save();
        //$l= $this->ads->findOrFail($request->id)->update(['is_published' => 1]);
        //return dd($ad->is_published ); 
    }

    public function store($request)
    {
        $ad = $request->user()->ads()->create($request->all()+['slug'=>$request->title]);
        if($request->file('images'))
        $this->storeImags($ad,$request->file('images'));
    }

    public function storeImags($ad,$imgArry)
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
        return $this->ads::with(['comments' => function($q) {
            $q->with(['user:id,name']);
        }])
        ->find($id);
    }

    public function getById($id)
    {
        return $this->ads::with('images')->find($id);
    }

    public function update($request, $id)
    {
        $request->merge(['user_id' => $request->user()->id]);

    	return $this->ads->find($id)->update($request->all());
    }

    public function getByUser()
    {
        return $this->ads::whereUser_id(\Auth::user()->id)->get();
    }

    public function getByCategory($catId)
    {
        return $this->ads::with('images','category')->where('category_id',$catId)-> paginate(32);
    }

    public function delete($id)
    {
        return $this->ads->findOrFail($id)->delete();
    }

    public function search($request)
    {
        return $this->ads->Filter($request);
    }
 
    public function getCommonAds()
    {
        //return \Auth::user()->favAds;
        return $this->ads::with('images')->select('id','title','slug','price')->whereIn('id',
        Favorite::select('ad_id')
            ->groupBy('ad_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(8)->get()
        ) ->paginate(32);;
    }
}
?>