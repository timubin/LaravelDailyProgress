<h1>Thsi is Users Page</h1>

{{-- <h3>Hello {{$user}}</h3>
 <h3>City: {{!empty($city) ? $city : "no City"}}</h3>
 <h3>This is Js {{!! $js !!}}</h3>    --}}

@foreach ($user as $id=>$u)

<h3>{{$id}}. {{$u['name']}} || {{$u['phone']}} || {{$u['city']}} || <a href="{{ route('view.user', $id)}}">Show</a></h3>

    
@endforeach



