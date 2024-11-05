@props(['action', 'method'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="title" class="block text-sm text-gray-700">Title</label>
        <input 
            type="text"
            name="model" 
            id="model"
            value="{{ old('title', $phone->model ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
        />

    @error('title')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

    <div class="mb-4">
    <label for="image" class="block text-sm font-medium text-gray-700">Book Cover Image</label>
    <input 
        type="file"
        name="image"
        id="image"
        {{ isset($phone) ? '' : 'required' }}
        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
    />
    @error('image')
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror

    @isset($phone->image)
        <div class="mb-4">
            <img src="{{ asset($book->image) }}" alt="Book cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{ isset($phone) ? 'Update Book' : 'Add Book' }}
        </x-primary-button>
    </div>
</form>
