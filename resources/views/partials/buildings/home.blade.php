<section>
    @foreach ($buildings as $building)
        <h1>{{$building -> name}}</h1>
        <p>{{$building -> description}}</p>
    @endforeach
</section>