<!-- source:https://codepen.io/owaiswiz/pen/jOPvEPB -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="bg-gradient-to-r from-blue-400 to-purple-500 flex items-center justify-center min-h-screen">



    <div
        class="w-full h-screen flex items-center justify-center bg-gradient-to-r from-blue-400 to-purple-500 dark:bg-gray-900">


        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">

            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                {{-- <div>
                    <img src="https://drive.google.com/uc?export=view&id=1MFiKAExRFF0-2YNpAZzIu1Sh52J8r16v"
                        class="w-mx-auto" />
                </div> --}}

                <div class="mt-12 flex flex-col items-center">
                    <div class="w-full flex-1 mt-8">
                        <div class="flex flex-col items-center">



                            <h2 class="text-xl">Halaman Login Pegawai | RS.Panti Rini</h2>
                        </div>

                        <div class="my-12 border-b text-center">
                            @if ($message = Session::get('error'))
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                    role="alert">
                                    <span class="block sm:inline"><strong>{{ $message }}</strong></span>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            onclick="this.parentElement.parentElement.style.display='none';">
                                            <path
                                                d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 01-1.414-1.415l2.935-2.934-2.935-2.934a1 1 0 011.414-1.414L10 8.586l2.934-2.935a1 1 0 011.414 1.415l-2.935 2.934 2.935 2.934a1 1 0 010 1.415z" />
                                        </svg>
                                    </span>
                                </div>
                            @endif

                            @if ($message = Session::get('success'))
                                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                    role="alert">
                                    <span class="block sm:inline"><strong>{{ $message }}</strong></span>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            onclick="this.parentElement.parentElement.style.display='none';">
                                            <path
                                                d="M14.348 14.849a1 1 0 01-1.414 0L10 11.414l-2.934 2.935a1 1 0 01-1.414-1.415l2.935-2.934-2.935-2.934a1 1 0 011.414-1.414L10 8.586l2.934-2.935a1 1 0 011.414 1.415l-2.935 2.934 2.935 2.934a1 1 0 010 1.415z" />
                                        </svg>
                                    </span>
                                </div>
                            @endif
                        </div>

                        <div class="mx-auto max-w-xs">
                            <form action="{{ route('login') }}" method="post">

                                @csrf
                                <input name="email"
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="email" placeholder="Email" />
                                <input
                                    class="w-full  px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="password" name="nip" placeholder="Password" />
                                <button
                                    class="mt-5 tracking-wide font-semibold bg-green-400 text-white-500 w-full py-4 rounded-lg hover:bg-green-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                        <circle cx="8.5" cy="7" r="4" />
                                        <path d="M20 8v6M23 11h-6" />
                                    </svg>
                                    <span class="ml-2">
                                        Sign In
                                    </span>
                                </button>
                            </form>
                            {{-- <p class="mt-6 text-xs text-gray-600 text-center">
                                I agree to abide by Cartesian Kinetics
                                <a href="#" class="border-b border-gray-500 border-dotted">
                                    Terms of Service
                                </a>
                                and its
                                <a href="#" class="border-b border-gray-500 border-dotted">
                                    Privacy Policy
                                </a>
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-green-100 text-center hidden lg:flex rounded-lg">
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                    style="background-image: url('https://drive.google.com/uc?export=view&id=1KZ_Ub_2lZ0dHbKV0fAIhxVhiQA183RCz');">
                </div>
            </div>
        </div>


    </div>
</body>

</html>
