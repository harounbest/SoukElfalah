<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Models\Wilaya;

class WilayaComposer
{
    protected $wilayas;
    
    public function __construct()
    {
        $this->wilayas=Wilaya::all();
    }
    
    public function compose(View $view)
    {        
        return $view->with('wilayas', $this->wilayas);
    }
}

