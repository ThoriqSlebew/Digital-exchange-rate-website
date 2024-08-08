<div>
    <header class="mt-24 mb-16 mx-24">
        <img src="{{ asset('img/logo-valas.png') }}" alt="Logo Header" id="animate" class="mx-auto w-1/2">
        <p id="animate" class="font-montserrat text-xl tracking-wide text-white text-center mt-10">
            Valas adalah tabungan BRI dalam mata uang asing yang menawarkan kemudahan transaksi dan nilai tukar yang
            kompetitif.
        </p>
    </header>
    <main class="mx-20 font-montserrat tracking-widest">
        <div class="flex flex-col items-end" id="animate">
            <div class="flex justify-between border border-yellow-400 rounded-full py-8 px-12 w-full">
                <div> </div>
                <p class="font-semibold text-4xl text-yellow-400">BELI</p>
                <p class="font-semibold text-4xl text-yellow-400">JUAL</p>
            </div>
        </div>
        @php
            $currencies = [
                ['img' => 'flag-usa.png', 'code' => 'USD'],
                ['img' => 'flag-euro.png', 'code' => 'EURO'],
                ['img' => 'flag-australia.png', 'code' => 'AUD'],
                ['img' => 'flag-singapore.png', 'code' => 'SGD'],
                ['img' => 'flag-uk.png', 'code' => 'GBP'],
                ['img' => 'flag-japan.png', 'code' => 'JPY'],
            ];
        @endphp
        @foreach (array_slice($valuesValas, 1) as $index => $row)
            <div id="animate" class="mt-12">
                <div class="flex justify-between">
                    <div class="flex w-24 items-center gap-2">
                        <img src="{{ asset('img/' . $currencies[$index]['img']) }}"
                            alt="Flag {{ $currencies[$index]['code'] }}">
                        <h2 class="font-semibold text-4xl text-gray-200">{{ $currencies[$index]['code'] }}</h2>
                    </div>
                    @foreach ($row as $cell)
                        <p class="font-semibold text-4xl text-gray-200">{{ htmlspecialchars_decode($cell) }}</p>
                    @endforeach
                </div>
                <hr class="custom-hr mt-4">
            </div>
        @endforeach

    </main>
</div>