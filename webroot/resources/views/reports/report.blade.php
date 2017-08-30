
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/reports/{{ $report->id }}">
                {{ $report->created_at->toFormattedDateString() }} - {{ $report->wave_size_in_body }}
            </a>
        </h2>
        <p class="blog-post-meta">{{ $report->created_at->toFormattedDateString() }}</p>
        <ul>
            <li>Wind Speed: <b>{{ $report->wind_speed  }}mph</b></li>
            <li>Wind Direction: <b>{{ $report->wind_direction  }}</b></li>
            <img src="{{ $report->picture  }}" alt="Surf Report Pic">
        </ul>
    </div><!-- /.blog-post -->