@php use Illuminate\Support\Collection;use L37sg0\Rockstar\Models\BandMember;use L37sg0\Rockstar\Models\SocialLink;use L37sg0\Rockstar\Models\Website; @endphp
@php
    /**
    * @var Website $websiteData
    * @var Collection $bandMembers
    * @var Collection $tourDates
    * @var Collection $socialLinks
    */


@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('rockstar/css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('rockstar/css/contact.us.css')}}">
    <!--  <link rel="stylesheet" href="css/font-awesome.4.6.3.min.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <title>{{ config('app.name', 'Rockstar') }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset($websiteData->getAttribute(Website::FIELD_ICON_URL))}}">
</head>
<body>
<!-- Navigation -->
<nav class="w3-bar w3-black" style="position: fixed">
    <a href="#home" class="w3-button w3-bar-item">Home</a>
    <a href="#band" class="w3-button w3-bar-item">Band</a>
    <a href="#tour" class="w3-button w3-bar-item">Tour</a>
    <a href="#contact" class="w3-button w3-bar-item">Contact</a>
    <a href="{{route('login')}}" class="w3-button w3-bar-item">Login</a>
    <a href="{{route('register')}}" class="w3-button w3-bar-item">Register</a>
</nav>

<!-- Slide Show -->
<div id="home">
    <img alt="Rockstar" class="mySlides"
         src="{{asset($websiteData->getAttribute(Website::FIELD_FIRST_HOME_IMAGE_URL))}}" style="width: 100%">
    <img alt="Rockstar" class="mySlides"
         src="{{asset($websiteData->getAttribute(Website::FIELD_SECOND_HOME_IMAGE_URL))}}" style="width: 100%">
    <img alt="Rockstar" class="mySlides"
         src="{{asset($websiteData->getAttribute(Website::FIELD_THIRD_HOME_IMAGE_URL))}}" style="width: 100%">
</div>

<!-- Sections and Articles-->

<!-- Band Section -->
<div id="band">
    <section class="w3-container w3-center w3-content" style="max-width: 600px">
        <h2 class="w3-wide">THE BAND</h2>
        <p class="w3-opacity"><i>We love music</i></p>
    </section>

    <section class="w3-container w3-center w3-content" style="max-width: 600px">
        <p class="w3-justify">{{$websiteData->getAttribute(Website::FIELD_BAND_TEXT)}}</p>
    </section>

    <section class="w3-row-padding w3-center w3-light-gray">
        @php
            /** @var BandMember $member */
        @endphp
        @foreach($bandMembers as $member)
            <article class="w3-third">
                <p>{{$member->getAttribute(BandMember::FIELD_NAME)}}</p>
                <img src="{{asset($member->getAttribute(BandMember::FIELD_IMAGE_URL))}}"
                     alt="{{$member->getAttribute(BandMember::FIELD_NAME)}}" style="width: 100%">
                <p>{{$member->getAttribute(BandMember::FIELD_DESCRIPTION)}}</p>
            </article>
        @endforeach
    </section>
</div>

<!-- Tour Section-->
<div id="tour">
    <section class="w3-container w3-center w3-content" style="max-width: 600px">
        <h2 class="w3-wide">UPCOMING DATES</h2>
    </section>

    <section class="w3-row-padding w3-center w3-dark-gray">
        @foreach($tourDatesByMonth as $monthYear => $tourDates)
            <article class="w3-third">
                <h2 class="w3-dark-grey">{{$monthYear}}</h2>
                @foreach($tourDates as $tourDate)
                    <div class="tourdate">
                        <a href="#tour"><h3 class="date">{{$tourDate['date']}} <span
                                    class="venue">{{$tourDate['place']}}</span></h3>
                        </a>
                    </div>
                @endforeach
            </article>
        @endforeach
    </section>
</div>

<!-- Contact Section-->
<div id="contact" class="container">
    <section class="w3-container w3-center w3-content" style="max-width: 600px">
        <h2 class="w3-wide">CONTACT US</h2>
    </section>
    <div class="row">
        <div class="column">
            <img alt="Rockstar" src="{{asset($websiteData->getAttribute(Website::FIELD_CONTACT_IMAGE_URL))}}"
                 style="width:100%">
        </div>
        <div class="column">
            <form action="#">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="albania">Albania</option>
                    <option value="andorra">Andorra</option>
                    <option value="armenia">Armenia</option>
                    <option value="austria">Austria</option>
                    <option value="azerbaijan">Azerbaijan</option>
                    <option value="belarus">Belarus</option>
                    <option value="belgium">Belgium</option>
                    <option value="bosnia and herzegovina">Bosnia and Herzegovina</option>
                    <option value="bulgaria">Bulgaria</option>
                    <option value="croatia">Croatia</option>
                    <option value="cyprus">Cyprus</option>
                    <option value="czechia">Czechia</option>
                    <option value="denmark">Denmark</option>
                    <option value="estonia">Estonia</option>
                    <option value="finland">Finland</option>
                    <option value="france">France</option>
                    <option value="georgia">Georgia</option>
                    <option value="germany">Germany</option>
                    <option value="greece">Greece</option>
                    <option value="hungary">Hungary</option>
                    <option value="iceland">Iceland</option>
                    <option value="ireland">Ireland</option>
                    <option value="italy">Italy</option>
                    <option value="kazakhstan">Kazakhstan</option>
                    <option value="kosovo">Kosovo</option>
                    <option value="latvia">Latvia</option>
                    <option value="liechtenstein">Liechtenstein</option>
                    <option value="lithuania">Lithuania</option>
                    <option value="luxembourg">Luxembourg</option>
                    <option value="malta">Malta</option>
                    <option value="moldova">Moldova</option>
                    <option value="monaco">Monaco</option>
                    <option value="montenegro">Montenegro</option>
                    <option value="netherlands">Netherlands</option>
                    <option value="north macedonia">North Macedonia</option>
                    <option value="norway">Norway</option>
                    <option value="poland">Poland</option>
                    <option value="portugal">Portugal</option>
                    <option value="romania">Romania</option>
                    <option value="russia">Russia</option>
                    <option value="san marino">San Marino</option>
                    <option value="serbia">Serbia</option>
                    <option value="slovakia">Slovakia</option>
                    <option value="slovenia">Slovenia</option>
                    <option value="spain">Spain</option>
                    <option value="sweden">Sweden</option>
                    <option value="switzerland">Switzerland</option>
                    <option value="turkey">Turkey</option>
                    <option value="ukraine">Ukraine</option>
                    <option value="united kingdom">United Kingdom</option>
                    <option value="vatican city">Vatican City</option>
                </select>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
    @php
        /** @var SocialLink $socialLink */
    @endphp
    @foreach($socialLinks as $socialLink)
        <a href="{{$socialLink->getAttribute(SocialLink::FIELD_URL)}}" target="_blank">
            <i class="{{$socialLink->getAttribute(SocialLink::FIELD_ICON)}}"></i>
        </a>
    @endforeach
    <p class="w3-medium">
        Created by <a href="https://www.l37sg0.com" target="_blank">L37sg0</a>
    </p>
</footer>
<script src="{{asset('rockstar/js/slideshow.js')}}"></script>
</body>
</html>
