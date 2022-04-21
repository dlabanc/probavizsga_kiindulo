<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="szakdolgozatoklistazasa">
                        Admin oldal
                        <div class="listaadmin">
                            <div class="fejlec">
                                <div class="alFejlec szakdogacime">Szakdolgozat címe</div>
                                <div class="alFejlec tagok">Készítők neve</div>
                                <div class="alFejlec githublink">GitHub link</div>
                                <div class="alFejlec oldallink">Szakdolgozat elérhetősége</div>
                                <div class="alFejlec ikon"></div>
                            </div>

                        </div>
                    </div>
                    <div class="ujadat">
                        <form>
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input type="text" id="szakdoga_nev"></div>
                            <div class="sor"><label for="tagokneve">Készítők neve</label><input type="text" id="tagokneve"></div>
                            <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input type="text" id="oldallink"></div>
                            <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input type="text" id="githublink"></div>
                            <div class="gomb"><button id="uj">Új</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>