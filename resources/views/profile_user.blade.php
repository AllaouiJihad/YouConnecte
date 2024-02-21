
@extends('layouts/app')
@section('content')

<div class="w-3/5 border border-gray-600 h-auto  border-t-0">
    <!--middle wall-->

    <div class="flex justify-center items-center flex-col">
        <!-- User Photo -->
        <img class="h-24 w-24 rounded-full mb-4" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="">
        <!-- User Name -->
        <h2 class="text-xl font-semibold text-blue">{{ auth()->user()->name }}</h2>
        <!-- User Email -->
        <p class="text-gray-600">{{ auth()->user()->email }}</p>
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
@endsection
</script>
