@foreach($data as $city)
    <option value="{{$city->id}}">{{$city->name}}</option>
@endforeach
