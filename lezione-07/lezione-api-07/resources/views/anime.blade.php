<x-layout>

    <div class="container">
        <div class="row">

            <div class=" mt-5 col-lg-4">
                <img src="{{ $anime['images']['jpg']['image_url'] }}" alt="...">
            </div>
            <div class="mt-5 col-lg-8">
                <div>
                    <div>
                        <h5>{{ $anime['title'] }}</h5>
                        <p>{{ $anime['synopsis'] }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
