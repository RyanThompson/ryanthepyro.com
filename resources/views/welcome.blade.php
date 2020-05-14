<!DOCTYPE html>
<html lang="{{ config('app.locale') }}"></html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    {!! assets()->style('public::css/app.css') !!}
    
</head>

<body>
    
    <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
        <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
          <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" role="img" aria-labelledby="svg-workcation">
            <title id="svg-workcation">Ryan Thompson</title>
            <defs>
              <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
              </pattern>
            </defs>
            <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
          </svg>
      
          <div class="relative">
            
            <div class="h-18 text-center">
                {!! img('anomaly.theme.flow::img/logo.svg')->class('inline')->width('70px') !!}
            </div>

            <blockquote class="mt-8">
              <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                <p>
                  &ldquo;Something fancy this way comes.&rdquo;
                </p>
              </div>
              <footer class="mt-8">
                <div class="md:flex md:items-center md:justify-center">
                  <div class="md:flex-shrink-0">
                    <img class="mx-auto h-10 w-10 rounded-full" src="https://avatars3.githubusercontent.com/u/1099967" alt="" />
                  </div>
                  <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                    <div class="text-base leading-6 font-medium text-gray-900">Ryan Thompson</div>      
                    <div class="text-base leading-6 font-medium text-gray-500 ml-3">Dude</div>
                  </div>
                </div>
              </footer>
            </blockquote>
          </div>
        </div>
      </section>




      <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
          <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
          <div class="text-center">
            <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
              Recent Thoughts
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
            </p>
          </div>
          <div class="mt-12 grid gap-5 max-w-screen-md mx-auto lg:grid-cols-3 lg:max-w-screen-md">
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
              <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80" alt="" />
              </div>
              <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                  <p class="text-sm leading-5 font-medium text-indigo-600">
                    <a href="#" class="hover:underline">
                      Blog
                    </a>
                  </p>
                  <a href="#" class="block">
                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                      Boost your conversion rate
                    </h3>
                    <p class="mt-3 text-base leading-6 text-gray-500">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                    </p>
                  </a>
                </div>
                <div class="mt-6 flex items-center">
                  <div class="flex-shrink-0">
                    <a href="#">
                      <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                    </a>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-gray-900">
                      <a href="#" class="hover:underline">
                        Roel Aufderhar
                      </a>
                    </p>
                    <div class="flex text-sm leading-5 text-gray-500">
                      <time datetime="2020-03-16">
                        Mar 16, 2020
                      </time>
                      <span class="mx-1">
                        &middot;
                      </span>
                      <span>
                        6 min read
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
              <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="" />
              </div>
              <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                  <p class="text-sm leading-5 font-medium text-indigo-600">
                    <a href="#" class="hover:underline">
                      Video
                    </a>
                  </p>
                  <a href="#" class="block">
                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                      How to use search engine optimization to drive sales
                    </h3>
                    <p class="mt-3 text-base leading-6 text-gray-500">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.
                    </p>
                  </a>
                </div>
                <div class="mt-6 flex items-center">
                  <div class="flex-shrink-0">
                    <a href="#">
                      <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                    </a>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-gray-900">
                      <a href="#" class="hover:underline">
                        Brenna Goyette
                      </a>
                    </p>
                    <div class="flex text-sm leading-5 text-gray-500">
                      <time datetime="2020-03-16">
                        Mar 16, 2020
                      </time>
                      <span class="mx-1">
                        &middot;
                      </span>
                      <span>
                        6 min read
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
              <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="" />
              </div>
              <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                  <p class="text-sm leading-5 font-medium text-indigo-600">
                    <a href="#" class="hover:underline"> Case Study</a>
                  </p>
                  <a href="#" class="block">
                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                      Improve your customer experience
                    </h3>
                    <p class="mt-3 text-base leading-6 text-gray-500">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.
                    </p>
                  </a>
                </div>
                <div class="mt-6 flex items-center">
                  <div class="flex-shrink-0">
                    <a href="#">
                      <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                    </a>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-gray-900">
                      <a href="#" class="hover:underline">
                        Daniela Metz
                      </a>
                    </p>
                    <div class="flex text-sm leading-5 text-gray-500">
                      <time datetime="2020-03-16">
                        Mar 16, 2020
                      </time>
                      <span class="mx-1">
                        &middot;
                      </span>
                      <span>
                        6 min read
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


</body>

</html>
