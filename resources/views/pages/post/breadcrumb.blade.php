<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--7" data-black-overlay="6" style="background-image: url({{ Images::make($entry->poster)->url() }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-single-page-title text-center pt--100">
                    
                    <h2 class="title theme-gradient">{{ $entry->title }}</h2>
                    
                    <ul class="blog-meta d-flex justify-content-center align-items-center">
                        <li><i data-feather="help-circle"></i>{{ $entry->subtitle }}</li>
                        <li><i data-feather="clock"></i>{{ $entry->decorate('created_at')->format('F jS, Y') }}</li>
                        @if ($entry->updated_at)
                        <li><i data-feather="refresh-cw"></i>{{ $entry->decorate('updated_at')->format('F jS, Y') }}</li>
                        @endif
                        {{-- <li><i data-feather="user"></i>Me</li> --}}
                        {{-- <li><i data-feather="message-circle"></i>15 Comments</li> --}}
                        <li><i data-feather="image"></i>{{ $entry->caption }}</li>
                        {{-- <li><i data-feather="heart"></i>Like</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
