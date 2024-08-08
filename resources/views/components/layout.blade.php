<!doctype html>
<html lang="en" class="bg-1 bg-cover scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Antrean Nasabah Bank BRI">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Kurs Digital Bank BRI</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="max-h-screen">
    <!-- 1 -->
    <div id="giro-rupiah" class="component-container">
        <x-giro-rupiah :valuesGiroRupiah="$valuesGiroRupiah"></x-giro-rupiah>
    </div>
    <!-- 2 -->
    <div id="giro-valas" class="component-container">
        <x-giro-valas :valuesGiroValas="$valuesGiroValas"></x-giro-valas>
    </div>
    <!-- 3 -->
    <div id="britama" class="component-container">
        <x-britama :valuesBritama="$valuesBritama"></x-britama>
    </div>
    <!-- 4 -->
    <div id="britama-bisnis" class="component-container">
        <x-britama-bisnis :valuesBritamaBisnis="$valuesBritamaBisnis"></x-britama-bisnis>
    </div>
    <!-- 5 -->
    <div id="britama-valas" class="component-container">
        <x-britama-valas :valuesBritamaValas="$valuesBritamaValas"></x-britama-valas>
    </div>
    <!-- 6 -->
    <div id="simpedes" class="component-container">
        <x-simpedes :valuesSimpedes="$valuesSimpedes"></x-simpedes>
    </div>
    <!-- 7 -->
    <div id="deposito-rupiah" class="component-container">
        <x-deposito-rupiah :valuesDepositoRupiah="$valuesDepositoRupiah"></x-deposito-rupiah>
    </div>
    <!-- 8 -->
    <div id="deposito-dollar" class="component-container">
        <x-deposito-dollar :valuesDepositoDollar="$valuesDepositoDollar"></x-deposito-dollar>
    </div>
    <!-- 9 -->
    <div id="britama-rencana" class="component-container">
        <x-britama-rencana :valuesBritamaRencana="$valuesBritamaRencana"></x-britama-rencana>
    </div>
    <!-- 10 -->
    <div id="instalment-saving-junio" class="component-container">
        <x-instalment-saving-junio :valuesInstalmentSavingJunio="$valuesInstalmentSavingJunio">
        </x-instalment-saving-junio>
    </div>
    <!-- 11 -->
    <div id="simpedes-impian" class="component-container">
        <x-simpedes-impian :valuesSimpedesImpian="$valuesSimpedesImpian"></x-simpedes-impian>
    </div>
    <!-- 12 -->
    <div id="valas" class="component-container">
        <x-valas :valuesValas="$valuesValas"></x-valas>
    </div>

    <footer
        class="w-full absolute bottom-8 py-4 bg-white bg-opacity-75 font-montserrat text-primary font-semibold text-3xl">
        <div class="marquee">
            <span>PT BANK RAKYAT INDONESIA</span>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const interval = 12000;
            const ids = ['giro-rupiah', 'giro-valas', 'britama', 'britama-bisnis', 'britama-valas', 'simpedes', 'deposito-rupiah', 'deposito-dollar', 'britama-rencana', 'instalment-saving-junio', 'simpedes-impian', 'valas'];

            let currentIndex = 0;

            function showContent() {
                ids.forEach(id => {
                    const container = document.getElementById(id);
                    container.classList.add('hidden');
                });

                const currentId = ids[currentIndex];
                const currentContainer = document.getElementById(currentId);
                currentContainer.classList.remove('hidden');

                const elements = currentContainer.querySelectorAll("#animate");
                elements.forEach((element, index) => {
                    element.classList.add("hidden");
                });

                elements.forEach((element, index) => {
                    setTimeout(() => {
                        element.classList.add("dissolve-in");
                        element.classList.remove("hidden");
                    }, index * 500);
                });

                currentIndex = (currentIndex + 1) % ids.length;
            }

            setInterval(showContent, interval);
            showContent();
        });
    </script>

</body>

</html>
