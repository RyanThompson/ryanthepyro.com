<div class="about-area rn-section-gapTop rn-section-gapBottom bg_color--1" id="about">
    <div class="about-wrapper">
        <div class="container">
            <div class="row row--35 align-items-center">
                <div class="col-lg-5">
                    <div class="thumbnail">
                        {!! Images::make('resources::img/me.jpg')->resize(1000)->loading('lazy')->alt('Ryan Thompson')->class('w-100') !!}
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-inner inner pt--50 pt_sm--40 pt_md--40">
                        <div class="section-title">
                            <h2 class="title">Ryan Thompson</h2>
                            {{-- <p class="description">An entreprenuer-minded developer with a wide technical skillset.</p> --}}
                        </div>
                        <div class="tab-wrapper mt--30">
                            <ul class="nav nav-tabs tab-style--1" id="myTab" role="tablist">
                                @foreach (Streams::entries('about')->where('enabled', true)->orderBy('sort', 'ASC')->get() as $i => $item)
                                <li class="nav-item">
                                <a class="nav-link {{ $i == 0 ? 'active' : null }}" id="{{ Str::slug($item->title) }}" data-toggle="tab" href="#rn-{{ Str::slug($item->title) }}" role="tab" aria-controls="{{ Str::slug($item->title) }}" {{ $i == 0 ? 'aria-selected="true"' : null }}>{{ $item->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                @foreach (Streams::entries('about')->where('enabled', true)->orderBy('sort', 'ASC')->get() as $i => $item)
                                <div class="tab-pane fade show {{ $i == 0 ? 'active' : null }}" id="rn-{{ Str::slug($item->title) }}" role="tabpanel" aria-labelledby="{{ Str::slug($item->title) }}">
                                    <div class="single-tab-content">
                                        <ul>
                                            @foreach ($item->details as $item)
                                        <li><a href="{{ Arr::get($item, 'url', '#todo') }}">{{ Arr::get($item, 'component') }} <span> {!! Arr::get($item, 'detail') ? (isset($item['component']) ? '- ' : null).$item['detail'] : null !!}</span></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
