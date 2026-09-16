@php use L37sg0\Rockstar\Models\BandMember; @endphp
<x-rockstar::layout>
    <x-slot:header>Band</x-slot:header>
    <h1>Band edit Section</h1>

    <!-- Band Section Text-->
    <div class="flex flex-row">
    <form method="post"
          action="{{route('dashboard.band-section.band-text-update')}}">
        @csrf
        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="bandText">
            {{__('Band Text')}}
        </label>
        <textarea id="bandText"
                  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full"
                  name="text" required>
            {{$bandText ?? ''}}
        </textarea>
        <x-input-error :messages="$errors->get('bandText')" class="mt-2"/>
        <x-primary-button :type="'submit'">Update</x-primary-button>
    </form>
    </div>

    <!-- Band Section Members-->
    <div class="flex flex-row ml-3">
        @php
            /** @var BandMember $member */
        @endphp
        @foreach($bandMembers as $member)
            <div class="basis-1/3">
                <form method="post"
                      action="{{route('dashboard.band-section.band-member-update', $member)}}"
                      enctype="multipart/form-data">
                    @csrf
                    <x-image-input :image="asset($member->getAttribute(BandMember::FIELD_IMAGE_URL))"
                                   :name="'image'"
                                   :id="'image' . $member->getAttribute(BandMember::FIELD_ID)"/>
                    <x-input-label for="name{{$member->getAttribute(BandMember::FIELD_ID)}}" :value="__('Member Name')"/>
                    <x-text-input id="name{{$member->getAttribute(BandMember::FIELD_ID)}}"
                                  class="block mt-1 w-full" type="text" name="name"
                                  :value="$member->getAttribute(BandMember::FIELD_NAME)" required
                                  autofocus autocomplete="name"/>
                    <x-input-label for="description{{$member->getAttribute(BandMember::FIELD_ID)}}"
                                   :value="__('Short Description')"/>
                    <x-text-input id="description{{$member->getAttribute(BandMember::FIELD_ID)}}"
                                  class="block mt-1 w-full" type="text" name="description"
                                  :value="$member->getAttribute(BandMember::FIELD_DESCRIPTION)" required
                                  autofocus autocomplete="description"/>
                    <x-input-error :messages="$errors->all()" class="mt-2"/>
                </form>
            </div>
        @endforeach
    </div>
</x-rockstar::layout>
