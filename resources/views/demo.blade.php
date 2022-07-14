<x-header content="text"/>
<h1>First Demo View {{count($user)}}</h1>
<!-- <p>{{count($user)}}</p> -->
@if(count($user) == 1)
<h1>count is 1</h1>
@elseif(count($user) == 2)
<h1>count is 2</h1>
@elseif(count($user) == 3)
<h1>count is 3</h1>
@else
<h1>Count is less than 1</h1>
@endif


@foreach ($user as $result)
<h2>{{$result}}</h2>
@endforeach

@include('about');


<script>
    // var app = <?php echo json_encode($user); ?>;
    var app = @json($user);
    console.log(app[0]);
</script>
