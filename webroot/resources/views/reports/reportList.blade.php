
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/reports/{{ $report->id }}">
                {{ $report->created_at->toFormattedDateString() }} - {{ $report->wave_size_in_body }}
            </a>
        </h2>
        <p class="blog-post-meta">{{ $report->created_at->toFormattedDateString() }}</p>
    </div><!-- /.blog-post -->