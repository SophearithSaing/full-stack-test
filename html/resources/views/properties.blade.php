<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<h1>Properties</h1>

@php
  $data = file_get_contents('data/properties.json');
  $properties = json_decode($data, true);

  $number_of_pages = ceil(sizeof($properties) / 12);
  if (!$offset) {
    $offset = 0;
  }
  $current_page = ($offset / 12) + 1;
@endphp

<div class="container properties">
  @foreach($properties as $key => $property)
    @if ($key >= $offset && $key < $offset + 12)
      <div class="property {{ $property['sold'] ? 'sold' : '' }}">
        <h2>{{ $property['title'] }} {{ $property['sold'] ? '[SOLD]' : '' }}</h2>
        <img src="{{ $property['photos']['thumb'] }}" alt="">
        <div class="location">
          <p>{{ $property['geo']['province'] }}, {{ $property['geo']['country'] }}</p>
          <p>{{ $property['geo']['street'] }}</p>
        </div>
        <div class="details">
          <p class="price">{{ number_format($property['price'], 2) }} {{ $property['currency'] }}</p>
          <p>{{ $property['area'] }} {{ $property['area_type'] }}</p>
          <p>{{ $property['property_type'] }}</p>
          <p>{{ $property['for_sale'] ? 'For Sale' : 'For Rent' }}</p>
          <p>Bedrooms: {{ $property['bedrooms'] }}</p>
          <p>Bathrooms: {{ $property['bathrooms'] }}</p>
        </div>
        <p class="description">{{ $property['description'] }}</p>
      </div>
    @endif
  @endforeach
</div>

<div class="container pagination">
  @for ($i = 0; $i < $number_of_pages; $i++)
    <a href="/?offset={{$i * 12}}" class="page {{ ($i+1 == $current_page) ? 'active' : '' }}">{{ $i + 1 }}</a>
  @endfor
</div>

