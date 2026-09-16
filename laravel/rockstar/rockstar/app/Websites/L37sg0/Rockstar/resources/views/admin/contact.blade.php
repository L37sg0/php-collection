<x-rockstar::layout>
    <x-slot:header>Contact</x-slot:header>
    <h1>Contact edit Section</h1>
    <form method="post"
          action="{{route('dashboard.contact-section.update')}}"
          enctype="multipart/form-data">
        @csrf
        <x-image-input :image="asset($contactImage)"
                        :id="'contactImage'"
                        :name="'image'"/>
        <x-input-error :messages="$errors->all()" class="mt-2"/>
    </form>
</x-rockstar::layout>
