
<x-rockstar::layout>
    <x-slot:header>Icon</x-slot:header>
    <h1>Icon edit Section</h1>
    <form method="post"
          action="{{route('dashboard.icon-section.update')}}"
          enctype="multipart/form-data">
        @csrf
        <x-image-input :image="asset($icon)" :id="'icon'" :name="'icon'"/>
        <x-input-error :messages="$errors->all()" class="mt-2"/>
    </form>
</x-rockstar::layout>
