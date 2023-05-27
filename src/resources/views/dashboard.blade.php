<x-app-layout>
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">あとで</h1>
        <p class="mb-8 leading-relaxed">あとでは、あとでやろう！と思っていることを一括管理できるアプリです。</p>
      </div>
      <div class="p-2 w-full">
        <a href="{{ route('tasks.index') }}" class="btn flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">やること一覧</a>
      </div>
    </div>
  </section>
</x-app-layout>
