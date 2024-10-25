@props(['model', 'description', 'release_year', 'processor', 'price', 'photo', 'camera_mp', 'storage', 'ram', 'battery', 'screen_size', 'colours', 'performance', 'brand', 'purchase'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $model }}</h4>
    <img src="{{asset('public/build/images/items' .$photo)}}" alt="{{$photo}}">
    <p class="text-grey-600">({{ $release_year }})</p>
    <p class="text-grey-800 mt-4">{{ $description }}</p>
</div>