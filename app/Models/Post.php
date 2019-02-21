<?php

namespace App\Models;
use App\Helpers\helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Post extends Model
{
    //
    protected $fillable= ['title','slug','body','user_id','excerpt','is_published'];



    public function postImages()
    {
        return $this->hasMany('App\Models\postImage');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function postfav()
    {
        return $this->hasMany('App\Models\PostFav','post_id');
    }

    public function setSlugAttribute($value)
    {
        $slug=\Helper::slug($value); 

        $uniqueSlug=\Helper::uniqueSlug($slug,'ads');

        $this->attributes['slug'] = $uniqueSlug;
    }
    public function Postview()
    {
        return $this->hasMany( \App\Models\PostView::class, 'post_id');
    }

    /**
     * Get the total number of views.
     *
     * @return int
     */
    public function getViewsCount()
    {
        return $this->Postview()->count();
    }

    public function getViewsCountSince($sinceDateTime)
    {
        return $this->Postview()->where('created_at', '>', $sinceDateTime)->count();
    }

    public function getViewsCountUpto($uptoDateTime)
    {
        return $this->Postview()->where('created_at', '<', $uptoDateTime)->count();
    }
 
    public function scopeFilter($query, Request $request)
    {

        if ($request->keyword) {
            $query->where('title', 'LIKE', '%'.$request->keyword.'%');
        }
       
        return $query->with('postImages')
        ->withCount('postfav')
        ->withCount('PostView') 
        ->with('user')
        ->paginate(32);
    }



}
