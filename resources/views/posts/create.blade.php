@extends ('posts.layout')
@section ('title','أضف مقالة')


@section ('content')
<div class="col-lg-8">
    <p><h2> أدخل تفاصيل المقال</h2></p>
    @include('alerts.success')

    @include('alerts.error')

    <form method="POST"  action="{{ route('posts.store') }}" enctype="multipart/form-data">
       {{ csrf_field() }}
      
        <div class="form-group">
            <label for="title">عنوان المقال:</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}" >
        </div>
        <div  class="form-group">
            <label for="body" name="body"> المقال: </label>
           <textarea class="form-control" name="body" rows="20" >{{old('text')}}</textarea> 
        </div>
        <div class="form-group">
            <label for="body"> المختصر: </label>
            <textarea class="form-control" name="excerpt" rows="5" >{{old('text')}}</textarea>
        </div>
        <label class="form-check-label">
            
            <input type="checkbox"  name="is_published" class="form-check-input" >نشر المقالة
            </label>
    
        <div class="form-group">
            <label for="details"> أضف الصور </label>
            <input type="file" name="postimages[]"  class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-primary">أضف المقال</button>
        <a class="btn-sm btn-danger"  href="{{ route('posts.home') }}">{{__('titles.cancel')}}</a>
    </form>
</div>
<script type="text/javascript">
      $('#postCreation').summernote({
        placeholder: '{{old('text')}}',
        tabsize: 2,
        height: 500
      });
    </script>
@endsection
