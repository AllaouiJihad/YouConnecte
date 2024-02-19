<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Youconnect</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    </head>

    <body class="bg-white-900 h-screen">
        <div class="flex">

            <div class="w-2/5 text-blue h-12 pl-32 py-4 h-auto">
                <!--left menu-->

                        <nav class="mt-5 px-2">
                            <a href="{{route('welcome')}}" class="group flex items-center px-2 py-2 text-base leading-6 font-semibold rounded-full bg-white-800 text-blue-300">
                        <svg class="mr-4 h-6 w-6 " stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"/>
                        </svg>
                        Home
                        </a>
                        <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-semibold rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg>

                        Explore
                        </a>
                        <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        Notifications
                        </a>
                        <a href="{{route('message')}}" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Messages
                        </a>
                        <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                        Bookmarks
                        </a>
                        <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        Lists
                        </a>
                            <a href="{{route('profile')}}" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Profile
                        </a>
                            <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        More
                        </a>
                            <button class="bg-blue-400 text-white w-48 mt-5 hover:bg-white-600 text-blue font-bold py-2 px-4 rounded-full">
                               <a href="{{route('logout')}}">logout</a>
                                </button>
                    </nav>

                    <div class="flex-shrink-0 flex hover:bg-white-00 rounded-full p-4 mt-12 mr-2">
                        <a href="#" class="flex-shrink-0 group block">
                            <div class="flex items-center">
                            <div>
                                <img class="inline-block h-10 w-10 rounded-full" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
                            </div>
                            <div class="ml-3">
                                <p class="text-base leading-6 font-medium text-blue">
                                Sonali Hirave
                                </p>
                                <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                @ShonaDesign
                                </p>
                            </div>
                            </div>
                        </a>
                    </div>

            </div>

                    @yield('content')



            <div class="w-2/5 h-12">
                <!--right menu-->

                <div class="relative text-gray-300 w-80 p-5 pb-0 mr-16">
                    <button type="submit" class="absolute ml-4 mt-3 mr-4">
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                          <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                        </svg>
                      </button>

                    <input type="search" name="search" placeholder="Search Twitter" class="bg-white-800 h-10 px-10 pr-5 w-full rounded-full text-sm focus:outline-none bg-purple-white shadow rounded border-0">

                </div>



                    <!--second-trending tweet section-->
                <div class="max-w-sm rounded-lg bg-white-800 overflow-hidden shadow-lg m-4 mr-20">
                    <div class="flex">
                        <div class="flex-1 m-2">
                            <h2 class="px-4 py-2 text-xl w-48 font-semibold text-blue">Notifications</h2>
                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href="" class=" text-2xl rounded-full text-blue hover:bg-white-800 hover:text-blue-300 float-right">
                                <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                            </a>
                        </div>
                    </div>


                    <hr class="border-gray-600">

                        <!--first trending tweet-->
                    <div class="flex">
                        <div class="flex-1">
                            <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400"></p>
                            <h2 class="px-4 ml-2 w-48 font-bold text-blue"></h2>
                            <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400"></p>

                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-white-800 hover:text-blue-300 float-right">
                                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                            </a>
                        </div>
                    </div>
                    <hr class="border-gray-600">

                    <!--second trending tweet-->

                    <div class="flex">
                        <div class="flex-1">
                            <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400"></p>
                            <h2 class="px-4 ml-2 w-48 font-bold text-blue"></h2>
                            <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400"></p>

                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-white-800 hover:text-blue-300 float-right">
                                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                            </a>
                        </div>
                    </div>
                    <hr class="border-gray-600">

                    <!--third trending tweet-->

                    <div class="flex">
                        <div class="flex-1">
                            <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400"></p>
                            <h2 class="px-4 ml-2 w-48 font-bold text-blue"></h2>
                            <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400"></p>

                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-white-800 hover:text-blue-300 float-right">
                                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                            </a>
                        </div>
                    </div>
                    <hr class="border-gray-600">

                    <!--forth trending tweet-->

                    <div class="flex">
                        <div class="flex-1">
                            <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400"></p>
                            <h2 class="px-4 ml-2 w-48 font-bold text-blue"></h2>
                            <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400"></p>

                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-white-800 hover:text-blue-300 float-right">
                                <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                            </a>
                        </div>
                    </div>
                    <hr class="border-gray-600">

                    <!--show more-->

                    <div class="flex">
                        <div class="flex-1 p-4">
                            <h2 class="px-4 ml-2 w-48 font-bold text-blue-400">Show more</h2>
                        </div>
                    </div>

                </div>


                <!--third-people suggetion to follow section-->

                <div class="max-w-sm rounded-lg bg-white-800 overflow-hidden shadow-lg m-4 mr-20">
                    <div class="flex">
                        <div class="flex-1 m-2">
                            <h2 class="px-4 py-2 text-xl w-48 font-semibold text-blue">Who to follow</h2>
                        </div>
                    </div>


                    <hr class="border-gray-600">

                    <!--second person who to follow-->

                    <div class="flex flex-shrink-0">
                        <div class="flex-1 ">
                            <div class="flex items-center w-48">
                                <div>
                                  <img class="inline-block h-10 w-auto rounded-full ml-4 mt-2" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
                                </div>
                                <div class="ml-3 mt-3">
                                  <p class="text-base leading-6 font-medium text-blue">
                                    Sonali Hirave
                                  </p>
                                  <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                    @ShonaDesign
                                  </p>
                                </div>
                              </div>

                        </div>
                        <div class="flex-1 px-4 py-2 m-2">
                            <a href="" class=" float-right">
                                <button class="bg-blue-200 hover:bg-white-500 text-blue font-semibold hover:text-blue py-2 px-4 border border-white hover:border-transparent rounded-full">
                                    Follow
                                  </button>
                            </a>

                        </div>
                    </div>

                    <hr class="border-gray-600">



                    <!--show more-->

                    <div class="flex">
                        <div class="flex-1 p-4">
                            <h2 class="px-4 ml-2 w-48 font-bold text-blue-400">Show more</h2>
                        </div>
                    </div>

                </div>

            <div class="flow-root m-6 inline">
                <div class="flex-1">
                    <a href="#">
                    <p class="text-sm leading-6 font-medium text-gray-500">Terms Privacy Policy Cookies Imprint Ads info</p>
                </div>
            </a>
                <div class="flex-2">
                    <p class="text-sm leading-6 font-medium text-gray-600"> © 2024 youconnect, Inc.</p>
                </div>
                </div>
        </div>

    <div/>

    </body>
</html>
