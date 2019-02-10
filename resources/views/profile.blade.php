<h1>{{$user->name}}'s Profile</h1>

{{-- {{$user->appeals}} --}}


@foreach ($user->appeals as $appeal)
<h1>

{{$appeal->prisonid}}

</h1>
@endforeach



{{-- <h3>caseNo: {{$user->user_id}} created by {{$user->user->name}}</h3> --}}
