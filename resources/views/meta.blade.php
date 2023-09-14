@if(request()->user())

    <meta name="broadcaster" content="{{ config('broadcasting.connections.' . config('broadcasting.nova', config('broadcasting.default')) . '.broadcaster', config('broadcasting.nova', config('broadcasting.default'))) }}">

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('host')))
      <meta name="host" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('host') }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('key')))
      <meta name="pusher_key" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('key') }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('options.cluster')))
      <meta name="pusher_cluster" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('options.cluster') }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('options.encrypted')))
      <meta name="pusher_encrypted" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('options.encrypted') ? 1 : 0 }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('options.host')))
      <meta name="pusher_host" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('options.host') }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('options.port')))
      <meta name="pusher_port" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('options.port') }}">
    @endif

    @if(!is_null(\Komisia\NovaPusherEcho\NovaPusherEcho::config('auth_endpoint')))
      <meta name="auth_endpoint" content="{{ \Komisia\NovaPusherEcho\NovaPusherEcho::config('auth_endpoint') }}">
    @endif

    @if(method_exists(request()->user(), 'receivesBroadcastNotificationsOn'))
      <meta name="user_private_channel" content="{{ request()->user()->receivesBroadcastNotificationsOn() }}">
    @else
      <meta name="user_private_channel" content="{{ str_replace('\\', '.', get_class(request()->user())).'.'.request()->user()->id }}">
    @endif

@endif