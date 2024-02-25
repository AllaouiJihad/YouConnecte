
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Youconnect</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/msg.scss') }}">

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
                                @
                                </p>
                            </div>
                            </div>
                        </a>
                    </div>

            </div>

<div class="w-3/5 border border-gray-600 h-auto  border-t-0">
    <!--middle wall-->

    <div class="flex justify-center items-center flex-col">
        <!-- User Photo -->
        <img class="h-24 w-24 rounded-full mb-4" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="">
        <!-- User Name -->
        <h2 class="text-xl font-semibold text-blue">{{$user->name }}</h2>
        <!-- User Email -->
        <p class="text-gray-600">{{ $user->email }}</p>
        @if($user->followings->isEmpty())
        <a href="{{route('addFollow',$user->id)}}">
        <button type="submit" class="bg-blue-200 hover:bg-white-500 text-blue font-semibold hover:text-blue py-2 px-4 border border-white hover:border-transparent rounded-full">
            Follow
          </button>
        </form>
    </div>


@foreach($posts as $post)
<!--first tweet start-->
<div class="flex flex-shrink-0 p-4 pb-0">
    <a href="#" class="flex-shrink-0 group block">
      <div class="flex items-center">
        <div>
          <img class="inline-block h-10 w-10 rounded-full" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
        </div>
        <div class="ml-3">
          <p class="text-base leading-6 font-medium text-blue">
            {{$post->user->name}}
            <span class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                 {{$post->created_at->diffForHumans()}}
              </span>
               </p>
        </div>
      </div>
    </a>
</div>
<div class="pl-16">
    <p class="text-base width-auto font-medium text-blue flex-shrink">
        {{$post->content}}
    </p>


    <div class="flex">
        <div class="w-full">

            <div class="flex items-center">
                <div class="flex-1 text-center">
                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                      </a>
                </div>

                <div class="flex-1 text-center py-2 m-2">
                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                </a>
                </div>
                <div class="flex-1 text-center py-2 m-2">
                    <button id="editButton" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </div>

                <form action="{{ route('delete', $post->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18M8.257 6l-.429-2H4.172l-.428 2M6 6V4.1c0-.694.332-1.313.843-1.703C6.552 2.196 6.98 2 7.429 2h9.143c.45 0 .877.196 1.586.397.511.39.843 1.009.843 1.703V6M8 9v10a2 2 0 002 2h4a2 2 0 002-2V9M3 6V4h18v2"></path>
                        </svg>
                    </button>
                </form>

            </div>
        </div>
    </div>
  </div>
  @endforeach

</div>

</script>

</body>
</html>
