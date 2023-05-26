<x-app-layout>
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">あとで</h1>
        <p class="mb-8 leading-relaxed">あとでは、あとでやろう！と思っていることを一括管理できるアプリです。</p>
        <div class="flex justify-center">
          <a href="{{ route('login') }}"  class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">ログイン</a>
          <a href="{{ route('register') }}" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">ユーザー登録</a>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>