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
</body>

</html>
