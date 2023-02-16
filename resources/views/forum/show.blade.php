<x-layout>
<main class="mt-10">
    <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
      <div class="absolute left-0 bottom-0 w-full h-full z-10"
        style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
      <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
      <div class="p-4 absolute bottom-0 left-0 z-20">
        <a href="#"
          class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">Nutrition</a>
        <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
          {{$forum->title}}
        </h2>
        <div class="flex mt-3">
          <img src="https://randomuser.me/api/portraits/men/97.jpg"
            class="h-10 w-10 rounded-full mr-2 object-cover" />
          <div>
            <p class="font-semibold text-gray-200 text-sm"> Mike Sullivan </p>
            <p class="font-semibold text-gray-400 text-xs"> {{$forum->created_at->diffForHumans()}} </p>
          </div>
        </div>
      </div>
    </div>

    <div class="px-4 lg:px-0 mt-12 text-white max-w-screen-md mx-auto text-lg leading-relaxed">
      <p class="pb-6">{{$forum->body}}</p>
{{-- 
      <p class="pb-6">Difficulty on insensible reasonable in. From as went he they. Preference themselves me as
        thoroughly
        partiality considered on in estimating. Middletons acceptance discovered projecting so is so or. In or
        attachment inquietude remarkably comparison at an. Is surrounded prosperous stimulated am me discretion
        expression. But truth being state can she china widow. Occasional preference fat remarkably now projecting
        uncommonly dissimilar. Sentiments projection particular companions interested do at my delightful. Listening
        newspaper in advantage frankness to concluded unwilling.</p>

      <p class="pb-6">Adieus except say barton put feebly favour him. Entreaties unpleasant sufficient few pianoforte
        discovered
        uncommonly ask. Morning cousins amongst in mr weather do neither. Warmth object matter course active law
        spring six. Pursuit showing tedious unknown winding see had man add. And park eyes too more him. Simple excuse
        active had son wholly coming number add. Though all excuse ladies rather regard assure yet. If feelings so
        prospect no as raptures quitting.</p>

      <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
        Sportsman do offending supported extremity breakfast by listening. Decisively advantages nor
        expression
        unpleasing she led met. Estate was tended ten boy nearer seemed. As so seeing latter he should thirty whence.
        Steepest speaking up attended it as. Made neat an on be gave show snug tore.
      </div>

      <p class="pb-6">Exquisite cordially mr happiness of neglected distrusts. Boisterous impossible unaffected he me
        everything.
        Is fine loud deal an rent open give. Find upon and sent spot song son eyes. Do endeavor he differed carriage
        is learning my graceful. Feel plan know is he like on pure. See burst found sir met think hopes are marry
        among. Delightful remarkably new assistance saw literature mrs favourable.</p>

      <h2 class="text-2xl text-gray-800 font-semibold mb-4 mt-4">Uneasy barton seeing remark happen his has</h2>

      <p class="pb-6">Guest it he tears aware as. Make my no cold of need. He been past in by my hard. Warmly thrown
        oh he common
        future. Otherwise concealed favourite frankness on be at dashwoods defective at. Sympathize interested
        simplicity at do projecting increasing terminated. As edward settle limits at in.</p>

      <p class="pb-6">Dashwood contempt on mr unlocked resolved provided of of. Stanhill wondered it it welcomed oh.
        Hundred no
        prudent he however smiling at an offence. If earnestly extremity he he propriety something admitting convinced
        ye. Pleasant in to although as if differed horrible. Mirth his quick its set front enjoy hoped had there. Who
        connection imprudence middletons too but increasing celebrated principles joy. Herself too improve gay winding
        ask expense are compact. New all paid few hard pure she.</p>

      <p class="pb-6">Breakfast agreeable incommode departure it an. By ignorant at on wondered relation. Enough at
        tastes really
        so cousin am of. Extensive therefore supported by extremity of contented. Is pursuit compact demesne invited
        elderly be. View him she roof tell her case has sigh. Moreover is possible he admitted sociable concerns. By
        in cold no less been sent hard hill.</p>

      <p class="pb-6">Detract yet delight written farther his general. If in so bred at dare rose lose good. Feel and
        make two real
        miss use easy. Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient
        to unpleasant in in insensible favourable. Latter remark hunted enough vulgar say man. Sitting hearted on it
        without me.</p> --}}

    </div>
  </main>

  <section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-white">Our Blog</h2>
            <p class="font-light text-gray-500 sm:text-xl text-gray-400">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
        </div>

        <div class="grid gap-8 lg:grid-cols-2 mb-5">
            <article class="p-6 bg-gray-700 rounded-lg border border-gray-200 shadow-md bg-gray-800 border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded bg-primary-200 text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                        Tutorial
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-white"><a href="#">How to quickly deploy a static website</a></h2>
                <p class="mb-5 font-light text-gray-500 text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                        <span class="font-medium text-white">
                            Jese Leos
                        </span>
                    </div>
                    <a href="#" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Read more
                    </a>
                </div>
            </article>

            <article class="p-6 bg-gray-700 rounded-lg border border-gray-200 shadow-md bg-gray-800 border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded bg-primary-200 text-primary-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                        Article
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-white"><a href="#">Our first project with React</a></h2>
                <p class="mb-5 font-light text-gray-500 text-gray-400">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Green avatar" />
                        <span class="font-medium text-white">
                            Bonnie Green
                        </span>
                    </div>
                    <a href="#" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Read more
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>
</x-layout>
