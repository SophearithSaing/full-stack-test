<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@php
  $data = file_get_contents('data/properties.json');
  $properties = json_decode($data, true);
  $filtered_properties = array_filter($properties, function ($var) use ($city) {
      return ($var['geo']['province'] == ucfirst($city));
  });
@endphp

@if (sizeof($filtered_properties) > 0)
  <h1>{{ ucfirst($city) }} Properties</h1>
@else
  <h1>No Properties Found!!</h1>
@endif

@if (sizeof($filtered_properties) > 0)
  <div class="container properties">
    @foreach($filtered_properties as $property)
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
    @endforeach
  </div>
@endif
