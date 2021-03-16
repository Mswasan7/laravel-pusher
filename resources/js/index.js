import Echo from 'laravel-echo'

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '882e2018f53344dc54f9',
    cluster: 'mt1',
    forceTLS: true
});

var channel = Echo.channel('posts');
channel.listen('.title', function(data) {
    alert(JSON.stringify(data));
});

export default class index{

}
