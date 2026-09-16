@php use L37sg0\Rockstar\Models\TourDate; @endphp
<x-rockstar::layout>
    <x-slot:header>Tour</x-slot:header>
    <h1>Tour edit Section</h1>
    @php
    /** @var TourDate $tourDate */
    @endphp
    @foreach($tourDates as $tourDate)
        <div class="flex flex-row ml-3">
            <form method="post"
                  action="{{route('dashboard.tour-section.update', $tourDate)}}">
                @csrf
                <div class=" basis-1/4">
                    <x-input-label for="date{{$tourDate->getAttribute(TourDate::FIELD_DATE)}}"
                                   :value="__('Date')"/>
                    <x-text-input id="date{{$tourDate->getAttribute(TourDate::FIELD_DATE)}}" class="block mt-1 w-full" type="date" name="date"
                                  :value="$tourDate->getAttribute(TourDate::FIELD_DATE)" required
                                  autofocus autocomplete="date"/>
                </div>
                <div class="basis-3/4">
                    <x-input-label for="place{{$tourDate->getAttribute(TourDate::FIELD_DATE)}}" :value="__('Place')"/>
                    <x-text-input id="place{{$tourDate->getAttribute(TourDate::FIELD_DATE)}}" class="block mt-1 w-full" type="text" name="place"
                                  :value="$tourDate->getAttribute(TourDate::FIELD_PLACE)"
                                  required
                                  autofocus autocomplete="place"/>
                    <x-input-error :messages="$errors->all()" class="mt-2"/>
                </div>
                <div class="basis-1/4">
                    <x-input-label for="actions" :value="__('Actions')"/>
                    <div id="actions">
                        <x-primary-button :type="'submit'">{{__('Save')}}</x-primary-button>
                        <a href="{{route('dashboard.tour-section.delete', $tourDate)}}"
                            class="btn-danger">{{__('Delete')}}</a>
                    </div>
                </div>
            </form>
        </div>
    @endforeach

    <div class="flex flex-row ml-3">
        <h3>{{__('Add New Tour Date Here')}}</h3>
        <form method="post"
              action="{{route('dashboard.tour-section.update')}}">
            @csrf
            <div class=" basis-1/4">
                <x-input-label for="date"
                               :value="__('Date')"/>
                <x-text-input id="date" class="block mt-1 w-full"
                              type="date" name="date" required
                              autofocus autocomplete="date"/>
            </div>
            <div class="basis-3/4">
                <x-input-label for="place" :value="__('Place')"/>
                <x-text-input id="place" class="block mt-1 w-full"
                              type="text" name="place"
                              required
                              autofocus autocomplete="place"/>
                <x-input-error :messages="$errors->all()" class="mt-2"/>
            </div>
            <div class="basis-1/4">
                <x-input-label for="actions" :value="__('Actions')"/>
                <div id="actions">
                    <x-primary-button :type="'submit'">{{__('Save')}}</x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-rockstar::layout>
