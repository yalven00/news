<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ News.com ]]></title>
        <link><![CDATA[ https://localhost/feed ]]></link>
        <description><![CDATA[ Feeds chanel for news ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>
  
        @foreach($news as $nw)
            <item>
                <title><![CDATA[{{ $nw->title }}]]></title>
                <link>{{ $nw->slug }}</link>
                <description><![CDATA[{!! $nw->description !!}]]></description>
                 <content>{{ $nw->content }}</content>
                <category>{{ $nw->category }}</category>
                <author><![CDATA[{!! $nw->author !!}]]></author>
                <guid>{{ $nw->id }}</guid>
                <pubDate>{{ $nw->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>

