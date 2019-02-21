<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;


class Ad extends Model
{
    
    protected $fillable= ['title','slug','text','price','user_id','category_id','wilaya_id','currency_id'];

    public function wilaya()
    {
        return $this->belongsTo('App\Models\Wilaya');
    }
 
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function favorite()
    {
        return $this->hasMany('App\Models\Favorite','ad_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->where('parent_id',Null);
    }

    public function currency()
    {
        return $this->belongsTo('App\Models\Currency');
    }

    public function scopeFilter($query, Request $request)
    {
        if ($request->wilaya) {
            $query->whereWilaya_id($request->wilaya);
        }

        if ($request->category) {
            $query->whereCategory_id($request->category);
        }

        if ($request->keyword) {
            $query->where('title', 'LIKE', '%'.$request->keyword.'%');
        }
        return $query->with('images')
        ->withCount('favorite')
        ->withCount('Adview')
        ->with('wilaya')
        ->with('currency')
        ->paginate(32);
    
    }

    public function setSlugAttribute($value)
    {
        $slug=\Helper::slug($value); 

        $uniqueSlug=\Helper::uniqueSlug($slug,'ads');

        $this->attributes['slug'] = $uniqueSlug;
    }


    public function AdView()
    {
        return $this->hasMany(\App\Models\AdView::class,'ad_id');
    }

    /**
     * Get the total number of views.
     *
     * @return int
     */
    public function getViewsCount()
    {
        return $this->AdView()->count();
    }

    public function getViewsCountSince($sinceDateTime)
    {
        return $this->AdView()->where('created_at', '>', $sinceDateTime)->count();
    }

    public function getViewsCountUpto($uptoDateTime)
    {
        return $this->AdView()->where('created_at', '<', $uptoDateTime)->count();
    }





 
}
