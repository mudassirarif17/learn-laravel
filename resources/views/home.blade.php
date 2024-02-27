<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!-- <h1>Welcome {{$name ?? "USER"}} </h1>
    {!! $demo !!} -->

    <!-- @if($name == "")
        {{"Name Is Empty"}}
    @elseif($name == "arif")
        {{"Name Is Correct"}}
    @else
        {{"Name Is Not Empty"}}
    @endif -->

    <!-- @unless ($name == "aptech")
        The Name is Not Aptech
    @endunless -->

    <!-- @isset($name)
        Welcome {{$name}}
    @endisset -->

    <!-- @for($i = 1; $i<10; $i++)
        <h2>{{$i}}</h2>
    @endfor -->

    <!-- @php
        $i = 1;
    @endphp
    @while($i <10)
        <h2>{{$i}}</h2>
    @php $i++ @endphp
    @endwhile -->

    <!-- @php
        $arr = [1,2,3,4,5,6,7,8,9,10];
    @endphp

    @foreach ($arr as $i)
        <h2>{{$i}}</h2>
    @endforeach -->

    <!-- @for ($i = 1; $i<=10; $i++)
        @if($i == 5)
            @break
        @endif
        <h2>{{$i}}</h2>
    @endfor -->

    <!-- @for ($i = 1; $i<=10; $i++)
    {{-- This is Comment--}}
        @if($i == 5)
            @continue
        @endif
        <h2>{{$i}}</h2>
    @endfor -->




    <!-- {{$demo}} -->

    <!-- <h1>Welcome {{$name ?? "USER"}} {{date('d-m-y')}} {{time()}}</h1> -->
</body>
</html>

