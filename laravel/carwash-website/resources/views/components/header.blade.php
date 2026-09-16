<div class="image-wrap">
    <div class="img-content">
        <img src="{{asset('/images/banner2.jpg')}}" alt="BANNER">
    </div>
        <div class="overlay"></div>
</div>
<div class="banner-content">
    <h1>С грижа за вашия автомобил</h1>
</div>

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat|Oswald');

    body {
        margin: 0;
        padding: 0;
        font-family: 'Montserrat', sans-serif;
    }

    h1 {
        font-family: 'Oswald', sans-serif;
    }

    p {
        font-family: 'Montserrat', sans-serif;
    }

    .image-wrap {
        position: relative;
        width: 100%;
        height: 50vh;
        overflow-x: hidden;
    }

    .banner-content {
        position: absolute;
        z-index: 99999;
        top: 25%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        text-align: center;
        font-size: 1.5em;
        color: #fff;
        line-height: 1.5;
    }

    .img-content img {
        width: 100%;
        height: 50vh;
        display: block;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        background: #2d2b2b;
        opacity: .5;
        z-index: 999;
        height: 100%;
    }
</style>
