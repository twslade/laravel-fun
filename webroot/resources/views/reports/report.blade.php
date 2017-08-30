
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


        @if(count($report->pics) > 0)
            <div class="comments">
            <h4>User pics</h4>
                <ul class="list-group">
                @foreach($report->pics as $pic)
                    <li class="list-group-item">
                        <strong>{{ $pic->created_at->diffForHumans() }}: </strong>
                        {{ $pic->comment }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-block">
                <form method="post" action="/reports/{{ $report->id }}/pic/" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="pic">
                        <textarea name="comment" id="" placeholder="Your comments here" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" value="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>


    </div><!-- /.blog-post -->