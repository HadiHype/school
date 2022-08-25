<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="px-6 py-8">

<nav class="md:flex md:justify-between md:items-center">

    <h1 class="text-3xl font-semibold text-sky-300">
        School Management System
    </h1>

    <div class="lg:flex">
        @auth('students')
            <div class="mr-10 mt-1">
                <a href="/" class="px-5 hover:text-blue-200 hover:text-2xl text-xl"> Home </a>
                <a href="/homework/" class="px-5 hover:text-blue-200 hover:text-2xl text-xl"> Homework </a>
                <form id="logout-form" method="POST" action="/logout" class="hidden">
                    @csrf

                    <button type="submit"> Log Out </button>
                </form>
                <a href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()" class="px-5 hover:text-blue-200 hover:text-2xl text-xl">
                    Log Out
                </a>

            </div>
        @endauth

        @if(!auth()->guard('students')->check())
                <div>
                    <a href="/login" class="lg:pl-12 lg:pr-6 uppercase hover:text-blue-500 hover:underline text-md"> Login </a>
                    <a href="/register" >
                        <button  class="bg-transparent  font-semibold uppercase py-2 px-4 border border-blue-500 hover:bg-blue-500 hover:text-white hover:border-transparent rounded">
                            Register
                        </button>
                    </a>
                </div>
        @endif

    </div>
</nav>
</body>

{{$slot}}


