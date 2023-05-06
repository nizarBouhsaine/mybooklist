@props(['book','status'])

@php
    $stats_array = array("Want To Read","Completed","Currently Reading")
@endphp
<div class="status-btn">
    <form action="/update/{{$book->id}}" method="POST">
        @method('PUT')
        @csrf
        <select id="status" name="status">
            <option value="{{$status}}">{{$status}}</option>
            @foreach($stats_array as $stat)
                @if(strcmp($stat,$status))
                    <option value="{{$stat}}">{{$stat}}</option>
                @endif
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
</div>