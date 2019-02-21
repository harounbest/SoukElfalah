<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PostFav;
use App\Repositories\PostFavs\PostFavRepository;
class PostFavController extends Controller
{
    //


    protected $favoritepost;

    public function __construct(PostFavRepository $favoritepost)
    {
        $this->middleware('auth');

        $this->favoritepost=$favoritepost;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userfavpost=$this->favoritepost->all();
        return view('post.userFavorite',compact('userfav'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->favoritepost->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->favoritepost->delete($id);
    }
}
