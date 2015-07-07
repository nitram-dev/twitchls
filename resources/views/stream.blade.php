<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $stream->channel->status }} on {{ $stream->channel->name }} - twitchls</title>

        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body style="overflow-y:hidden">

        <button class="btn btn-default stream-button" type="button" id="hide-chat" title="Show/Hide Twitch chat"><span class="glyphicon glyphicon-indent-left"></span></button>

        <div class="container-fluid">
            <div class="row no-padding">
                <div class="stream col-md-9" id="stream">
                    <iframe frameborder="0" scrolling="no" src="http://www.twitch.tv/{{ $stream->channel->name }}/hls"></iframe>
                </div>

                <div class="chat col-md-3" id="chat">
                    <!-- <iframe frameborder="0" scrolling="no" id="twitch_embed_chat" class="side" src="http://twitch.tv/chat/embed?channel={{ $stream->channel->name }}&amp;popout_chat=true"></iframe> -->

                    <iframe frameborder="0" scrolling="no" id="twitch_embed_chat" class="side" src="http://www.twitch.tv/{{ $stream->channel->name }}/chat?popout" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="/js/script.js"></script>

        @include('analytics')
    </body>
</html>