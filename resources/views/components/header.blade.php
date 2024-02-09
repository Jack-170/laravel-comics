<header>
    <div  class="container-fluid bg-primary">

        <div style="height: 30px" class="ms-container d-flex  justify-content-end text-light">
            <div style="margin-right: 40px" class="my-auto">
                <p>DC POWER VISA</p>
            </div>
            <div class="my-auto">
                <p>DC POWER VISA</p>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div style="height: 120px" class="ms-container d-flex align-items-center ">
            <nav>
                <ul>
                    @foreach ($links as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="{{ $link['current'] ? 'active' : '' }}">
                                {{ $link['text'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>

</header>


