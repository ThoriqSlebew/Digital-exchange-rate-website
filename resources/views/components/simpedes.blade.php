<div>
    <header class="mt-24 mb-16 mx-24">
        <img src="{{ asset('img/logo-simpedes.png') }}" alt="Logo Header" id="animate" class="mx-auto w-1/2">
        <p id="animate" class="font-montserrat text-xl tracking-wide text-white text-center mt-10">
            Simpedes adalah tabungan di BRI Unit yang memungkinkan penyetoran dan penarikan dana tanpa batasan frekuensi
            atau jumlah, asalkan saldo mencukupi.
        </p>
    </header>
    <main class="mx-20 font-montserrat tracking-widest">
        @php
            $firstRow = $valuesSimpedes[0];
        @endphp
        <div class="flex flex-col items-end" id="animate">
            <div class="flex justify-between border border-yellow-400 rounded-full py-8 px-12 w-full">
                @foreach ($firstRow as $table)
                    <h2 class="font-semibold text-4xl text-yellow-400">{{ htmlspecialchars_decode($table) }}</h2>
                @endforeach
            </div>
            <p class="mt-4 font-medium text-xl text-gray-200 tracking-wide">Suku Bunga Counter (%PA)</p>
        </div>
        @foreach (array_slice($valuesSimpedes, 1) as $row)
            <div id="animate" class="mt-12">
                <div class="flex justify-between">
                    @foreach ($row as $cell)
                        <p class="font-semibold text-4xl text-gray-200">{{ htmlspecialchars_decode($cell) }}</p>
                    @endforeach
                </div>
                <hr class="custom-hr mt-4">
            </div>
        @endforeach
    </main>
</div>