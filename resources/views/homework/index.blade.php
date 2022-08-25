
<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($homework->count())
            <x-homework-grid :homework="$homework" />
        @else
            <h1 class="font-semibold">
                You have yet to be assigned to a class
            </h1>
        @endif
    </main>
</x-layout>

