<x-app-layout>
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">みんなのほんだな</h1>
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            @if(Auth::check())
              <div class="flex flex-wrap -m-4">
                @foreach($book_shelves as $book_shelf)
                  <div class="p-4 md:w-1/3">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                      <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ほんだな名</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3"> {{ $book_shelf->title }} </h1>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            @endif
          </div>
        </section>
      </div>
    </div>
  </section>
</x-app-layout>
