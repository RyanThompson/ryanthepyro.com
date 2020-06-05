<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @include('partials/head')
</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">

    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest">Todo List</h1>
            </div>
            <div>
                @foreach (\Anomaly\Streams\Platform\Streams\Facades\Streams::make('tasks')->repository()->all() as $task)
                <div class="mb-4 items-center">
                    <p class="w-full underline {{ $task->status == 'complete' ? 'line-through' : null }}">
                        {!! \Illuminate\Support\Str::markdown($task->detail) !!}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
