@extends('dashboard.master')

@section('content')
    <div class="card-panel red white-text" style="margin-top: 0;">
        <div class="center">
            <h4>Chat</h4>
        </div>
    </div>
    <div class="container" style="height: 80vh;">
        <div id="messages"></div>
        <form id="chat" style="position: fixed; bottom: 10px; width: 90vh;">
            <input type="text" id="message">
            <button class="btn red">Send</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.pubnub.com/pubnub-dev.js"></script>
    <script>
        var channel = {{ $match->id }};

        var chat = PUBNUB.init({
            publish_key: 'pub-c-cb059264-272c-460f-984f-df601c74fb46',
            subscribe_key: 'sub-c-51780b1e-f3fc-11e3-928e-02ee2ddab7fe'
        });

        chat.subscribe({
            channel: channel,
            message: function(message) {
                $('#messages').append('<div class="card-panel">' + message + '</div>');
            }
        });

        $('#chat').submit(function(e) {
            e.preventDefault();

            chat.publish({
                channel: channel,
                message: $('#message').val()
            });

            $('#message').val('');
        });
    </script>
@endsection