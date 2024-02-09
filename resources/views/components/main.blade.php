<main>
    <div class="jumbo">

    </div>

    <div class="container-fluid bg-dark ">
        <div class="ms-container">
            <div class="card-box bg-dark ">
                @foreach($comics as $comic)
                    <div class="card bg-dark text-light">
                        <div class="box-img">
                            <img src="{{($comic['thumb']) }}" alt="Comic Thumbnail">
                        </div>
                        <p>{{ $comic['series'] }}</p>
                    </div>
                @endforeach
            </div>

            <h4 class="text-light">LOAD MORE</h4>

        </div>
    </div>


</main>
