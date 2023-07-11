<x-app-layout>
  <div class="mx-auto container pt-12 flex flex-row justify-between items-center">
    <div class='text-2xl text-gray-800'>ほんだな一覧</div>
      <div class="p-2">
        <a href="{{ route('book_shelves.create') }}" class="btn flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">ほんだな登録へ</a>
      </div>
  </div>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
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
    </div>
  </section>
</x-app-layout>
