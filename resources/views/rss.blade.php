@php
echo '<?xml version="1.0" encoding="UTF-8" ?>';
 @endphp
<rss version="2.0">
    <channel>
        <title>Новини за AI, Big Data, Web3</title>
        <link>{{ url('/') }}</link>
        <description>Последни новини от света на технологиите.</description>
        @foreach ($news as $item)
            <item>
                <title>{{ $item->title }}</title>
                <link>{{ url('/news/' . $item->slug) }}</link>
                <description>{{ Str::limit(strip_tags($item->content), 200) }}</description>
                <pubDate>{{ $item->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
