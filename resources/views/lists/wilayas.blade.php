@foreach($wilayas as $item)
    <option value="{{ $item->id }}" >{{ $item->name_ar }}</option>
@endforeach
