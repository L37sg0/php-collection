@foreach($content as $page => $pageContent)
    <div class="card" style="width: 100vw;" id="{{$page}}">
        <div class="card-body">
            <h5 class="card-title text-center">{{$pageContent[App\Http\Controllers\Controller::PAGE_ELEMENT_TITLE]}}</h5>
        </div>
        <div class="card-body">
    @if($page === App\Http\Controllers\Controller::PAGE_GALLERY)
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block mx-auto"  src="{{URL::asset('/images/gallery/' . $images[2])}}" alt="{{$images[2]}}">
                </div>
                @foreach(array_slice($images,2) as $image)
                <div class="carousel-item">
                    <img class="d-block mx-auto"  src="{{URL::asset('/images/gallery/' . $image)}}" alt="{{$image}}">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    @else
            <ul class="list-group list-group-flush">
                @foreach($pageContent[App\Http\Controllers\Controller::PAGE_ELEMENT_PAGE_CONTENT] as $row => $item)
                    @if(is_string($item))
                        <li class="list-group-item"><strong>{{$row}}:</strong> {{$item}}</li>
                    @elseif(is_array($item))
                        <h6>{{$row}}:</h6>
                        @foreach($item as $key => $value)
                            <li class="list-group-item"><strong>{{$key}}:</strong> {{$value}}</li>
                        @endforeach
                    @else
                    @endif
                @endforeach
            </ul>
    @endif
        </div>
    </div>
@endforeach