@include('test.head')
<body>

    <span>{{$username or ''}}</span>
    @if($sex == 1)
        <span>男</span>
    @elseif($sex == 2)
        <span>女</span>
    @endif
    <p><?=htmlspecialchars($description)?></p>
@section('test.feed')
@include('test.over')
</body>
</html> 

