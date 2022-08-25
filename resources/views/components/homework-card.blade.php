<article
    {{ $attributes->merge(['class' => 'MenuBox transition-colors duration-300 hover:bg-blue-300
                border border-blue-200 border-opacity-1 hover:border-opacity-5 rounded-xl
                hover:text-white']) }}>
    <div class="py-6 px-5">

        <div class="flex flex-col justify-between">
            <header>
                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/homework/{{$homework->title}}">
                            {{$homework->title}}
                        </a>
                    </h1>

                    <span class="mt-2 block text-xs">
                        Published <time>{{ $homework->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-9">
                <p class="overflow-ellipsis overflow-hidden whitespace-nowrap">
                    {!! $homework->description !!}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <h5 class="font-bold">
                        Assigned by
                        <a href="/?teacher={{$homework->teacher->name}}">
                            {{$homework->teacher->name}}
                        </a>
                    </h5>
                </div>

                <div>
                    <a href="/">
                        <button  class="bg-transparent border-transparent text-xs font-semibold uppercase py-2 px-4 border hover:bg-white hover:text-black hover:border-l-gray-600 rounded-full">
                            Read More
                        </button>
                    </a>
                </div>
            </footer>

        </div>
    </div>
</article>
