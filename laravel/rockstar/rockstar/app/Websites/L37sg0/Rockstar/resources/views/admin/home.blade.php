<x-rockstar::layout>
    <x-slot:header>Home</x-slot:header>
    <h1>Home edit Section</h1>
    @foreach($homeImages as $imageName => $imageUrl)
        <form method="post"
              action="{{route('dashboard.home-section.update', $imageName)}}"
              enctype="multipart/form-data">
            @csrf
            <x-image-input :image="asset($imageUrl)" :name="'image'" :id="$imageName"/>
            <x-input-error :messages="$errors->all()" class="mt-2"/>
        </form>
    @endforeach
</x-rockstar::layout>
