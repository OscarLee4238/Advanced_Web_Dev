@props(['model','release_year','description','photo'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">

<!-- Book Title --> 
<h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $model }}</h1> 

<!-- Book Cover Image --> 
<div class="overflow-hidden rounded-lg mb-4 flex justify-center"> 
<img src="{{ asset('images/phones/' . $photo) }}" alt="{{ $photo }}" class="w-full max-w-xs h-auto object-cover">
</div> 


<!-- Publication Year --> 
<h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Published: {{ $release_year }}</h2>

<!-- Phone Description --> 
<h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">Description</h3>
<p class="text-gray-700 leading-relaxed">{{ $description }}</p>
</div> 