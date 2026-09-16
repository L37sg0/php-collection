@php use L37sg0\Rockstar\Models\SocialLink; @endphp
<x-rockstar::layout>
    <x-slot:header>Social</x-slot:header>
    <h1>Social edit Section</h1>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    @php
    /** @var SocialLink $socialLink */
    @endphp
    @foreach($socialLinks as $socialLink)
        <div class="flex flex-row ml-3">
            <form method="post"
                  action="{{route('dashboard.social-section.update', $socialLink)}}">
                @csrf
                <i class="{{$socialLink->getAttribute(SocialLink::FIELD_ICON)}}"></i>
                @php
                    $id = strtolower($socialLink->getAttribute(SocialLink::FIELD_NAME))
                @endphp
                <x-input-label for="$id" :value="__($socialLink->getAttribute(SocialLink::FIELD_NAME))"/>
                <x-text-input id="$id" class="block mt-1 w-full" type="url" name="link"
                              :value="$socialLink->getAttribute(SocialLink::FIELD_URL)"
                              required
                              autofocus autocomplete="$id"/>
                <x-input-error :messages="$errors->all()" class="mt-2"/>
                <x-primary-button :type="'submit'">Update</x-primary-button>
            </form>
        </div>
    @endforeach
</x-rockstar::layout>
