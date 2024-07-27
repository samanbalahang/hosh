@foreach($coms as $com)
    {{$com->name}}
    {{$com->discription}}
    @foreach($mycoms as $mycom)
        @if($mycom->comment_id ==  $com->id)
        {!!__("<br>")!!}
            {{__("پاسخ:")}}
            {!!__("<br>")!!}
            {!! $mycom->discription !!}
        @endif
    @endforeach
@endforeach