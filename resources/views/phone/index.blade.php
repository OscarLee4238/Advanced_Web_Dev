<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Phones') }}
        </h2>
    </x-slot>

    <!-- http://localhost:8000/public/build/images/itemsC:\Users\N00230382\2024_phone_reviews\public\images\items\iphone_16_pro_max.jpg -->

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">List of phones:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($phones as $phone)
                        <a href="{{route('phone.show', $phone) }}">
                            <x-phone-card                                
                                :model="$phone->model"
                                :description="$phone->description"
                                :release_year="$phone->release_year"
                                :processor="$phone->processor"
                                :price="$phone->price"
                                :photo="$phone->photo"
                                :camera_mp="$phone->camera_mp"
                                :storage="$phone->storage"
                                :ram="$phone->ram"
                                :battery="$phone->battery"
                                :screen_size="$phone->screen_size"
                                :colours="$phone->colours"
                                :performance="$phone->performance"
                                :brand="$phone->brand"
                                :purchase="$phone->purchase"
                            />
                        </a>
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

