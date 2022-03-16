<section>
    @foreach ($formations as $formation)
        <h1>{{$formation -> name}}</h1>
        <p>{{$formation -> description}}</p>
    @endforeach
</section>