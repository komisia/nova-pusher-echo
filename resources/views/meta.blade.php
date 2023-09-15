@if(request()->user() and request()->user()->pusher )

    <meta name="broadcaster" content="pusher">

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('key')))
      <meta name="pusher_key" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('key') }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('options.cluster')))
      <meta name="pusher_cluster" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('options.cluster') }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('options.host')))
      <meta name="pusher_wsHost" content="{{ str_replace('api-', 'ws-', \Komisia\NovaPusherEcho\NovaPusherEcho::config('options.host') ) }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('options.port')))
      <meta name="pusher_wsPort" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('options.port') }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('options.port')))
      <meta name="pusher_wssPort" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('options.port') }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('options.useTLS')))
      <meta name="pusher_forceTLS" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('options.useTLS') }}">
    @endif



    @if(method_exists(request()->user(), 'receivesBroadcastNotificationsOn'))
      <meta name="user_private_channel" content="{{ request()->user()->receivesBroadcastNotificationsOn() }}">
    @else
      <meta name="user_private_channel" content="{{ str_replace('\\', '.', get_class(request()->user())).'.'.request()->user()->id }}">
    @endif

@endif