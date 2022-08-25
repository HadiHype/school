@props(['homework'])

@if($homework->count() >= 1)

    <div class="lg:grid lg:grid-cols-6 gap-4">
        @foreach($homework as $hw)
            <x-homework-card
                :homework="$hw"
                class="col-span-3"/>
        @endforeach

    </div>
@else
    <div>
        <h2>
            There is no homework assigned to you right now.
        </h2>
    </div>
@endif
