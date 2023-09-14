import Echo from 'laravel-echo'

window.Pusher = require('pusher-js')

if ( document.head.querySelector('meta[name="broadcaster"]') ) {

  let echoOptions = {
    broadcaster: document.head.querySelector('meta[name="broadcaster"]').content,
    enabledTransports: ['ws', 'wss']
  }

  if (document.head.querySelector('meta[name="pusher_key"]') !== null) {
    echoOptions.key = document.head.querySelector('meta[name="pusher_key"]').content
  }
  if (document.head.querySelector('meta[name="pusher_cluster"]') !== null) {
    echoOptions.cluster = document.head.querySelector('meta[name="pusher_cluster"]').content
  }
  if (document.head.querySelector('meta[name="pusher_wsHost"]') !== null) {
    echoOptions.wsHost = document.head.querySelector('meta[name="pusher_wsHost"]').content
  }
  if (document.head.querySelector('meta[name="pusher_wsPort"]') !== null) {
    echoOptions.wsPort = document.head.querySelector('meta[name="pusher_wsPort"]').content
  }
  if (document.head.querySelector('meta[name="pusher_wssPort"]') !== null) {
    echoOptions.wssPort = document.head.querySelector('meta[name="pusher_wssPort"]').content
  }
  if (document.head.querySelector('meta[name="pusher_forceTLS"]') !== null) {
    echoOptions.forceTLS = document.head.querySelector('meta[name="pusher_forceTLS"]').content
  }


  window.Echo = new Echo(echoOptions);



  let userReceivesBroadcastOn = document.head.querySelector('meta[name="user_private_channel"]').content

  if (userReceivesBroadcastOn !== null) {
    window.userPrivateChannel = window.Echo.private(userReceivesBroadcastOn)
  }

}