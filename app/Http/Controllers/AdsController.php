<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\AdsRequest;
use App\Models\Favorite;
use App\Models\AdView;
use App\Repositories\ {
    Ads\AdsInterface,
    Favorites\FavoriteInterface
};

class AdsController extends Controller
{
    protected $ads;

    protected $favorite;

    public function __construct(AdsInterface $ads,FavoriteInterface $favorite)
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);

        $this->ads=$ads;

        $this->favorite=$favorite;  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $ads=$this->ads->all();
        
        //$keys = $ads->pluck('favorite_count')->toArray();
         //   return dd($keys);
        //$ads['favNumber'] =$this->favcount($ads);
       // $favNumber=$this->favcount($keys);
        //return dd($favNumber);
        //return view('index',compact('ads','favNumber'));
        return view('index',compact('ads'));
    }
    private function favcount($keys)
    {
            //return Favorite::whereAd_id('$ads->id')->count();
           //  Favorite::count('ad_id','==','$ads->id');
          foreach ($keys as $key)
          {
               $fav[]= Favorite::where('ad_id',$key)->count();
          } 
           return $fav;
           
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

 
    public function store(AdsRequest $request)
    {  
        $ads = $this->ads->store($request); /** using  the repository  */

        return back()->with('success','تم إضافة الإعلان');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad=$this->ads->getDetails($id);
        
        $adview=new AdView();
      
        $adview->ad_id=$id;
        $ad->AdView()->save($adview);


        if (\Auth::check())        
        $favorited = $this->favorite->show($id);
      
        return view('ads.show',compact('ad'),compact('favorited'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = $this->ads->getById($id);
        

        if (\Gate::allows('edit-ad', $ad)) {
            return view('ads.edit',compact('ad'));
        }

        abort(403);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdsRequest $request, $id)
    {
        $ads = $this->ads->update($request,$id);

        return back()->with('success','تم تعديل الإعلان');
    }
    public function publishAds(Request $request)
    {     
     $this->ads->publish( $request); 
       // return dd($request->id);  
        return back()->with('success','تم نشر الإعلان');
       
        //return back()->with('error','لم يتم  نشر الإعلان');
    }
    
    public function getUnpublishedAds()
    {
        $unpublishedAds = $this->ads->getUnpublished();
        return view('ads.unpublished',compact('unpublishedAds'));
    }

    public function getUserAds()
    {
        $userAds = $this->ads->getByUser();

        return view('ads.userAds',compact('userAds'));
    }

    public function getAdsByCategory($catId)
    {
        $ads = $this->ads->getByCategory($catId);

        return view('ads.adsByCategory',compact('ads'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ads->delete($id); 
     
       // return view('index')->with('success','تم حذف الإعلان');
        return back()->with('success','تم حذف الإعلان');
         // return view('/ads')->with('success','تم حذف الإعلان');
    }
    
    /*public function destroyadmin($id)
    {
        $this->ads->delete($id); 
        return view('index',compact('ads'))->with('success','تم حذف الإعلان');
        //return back()->with('success','تم حذف الإعلان');
    }
*/

    public function search(Request $request)
    {
        $ads=$this->ads->search($request);
        
        return view('ads.showResults',compact('ads')); 
    }

    public function getUserFavorites()
    {
        $userFav=$this->ads->getCommonAds();

        return view('user.userFavorites',compact('userFav')); 
    }
    public function getCommonAds()
    {
        $ads=$this->ads->getCommonAds();
        return view('index',compact('ads'));  
    }
    public function getMostViewed()
    {
        $ads=$this->ads->mostviewed();
        return view('ads.mostviewed',compact('ads'));  
    }
    public function getMostFav()
    {
        $ads=$this->ads->mostfavorited();
        return view('ads.mostfavorited',compact('ads'));  
    }
    public function getNewest()
    {
        $ads=$this->ads->newest();
        return view('ads.newest',compact('ads'));  
    }




}
