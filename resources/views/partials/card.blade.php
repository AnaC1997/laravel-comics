<!--Section Card-->
<section class="containerCard">
@foreach ($infoCard as $card)
    <div class="card">
        <img class="imgCard" src="{{ $card['thumb'] }}" alt="#">
        <p>{{ $card['price'] }}</p>
        <p>{{ $card['series'] }}</p>
        <p>{{ $card['type'] }}</p>
    </div>
@endforeach
    </section>
