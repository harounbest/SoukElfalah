

    @if($paginator->lastPage() > 1)

<nav class="blog-pagination">
<ul class="pagination">
    <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
       
        
        <a class="btn btn-outline-secondary" href=" {{ $paginator->url(1) }}">الأقدم</a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a class="btn btn-outline-primary" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
    <a class="btn btn-outline-primary" href="{{ $paginator->url($paginator->currentPage()+1)}}">الأجدد</a>  
       
    </li>
 </nav>
 </ul>

@endif


           
           
             
           
