<div class="rn-blog-details pt--110 pb--70 bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-wrapper">
                    <div class="inner">
                        <article>
                            {!! Str::markdown(View::parse($entry->body, [
                                'entry' => $entry,
                            ])) !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
