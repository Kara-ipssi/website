<x-site-layout>
    <x-slot name="slot">
        <!-- start hero -->
            @livewire('hero')
        <!-- end hero -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <!-- start about -->
            @livewire('about')
        <!-- end about -->

        <!-- start services -->
            @livewire('services')
        <!-- end services -->
    </x-slot>
</x-site-layout>