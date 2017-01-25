var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();

app.get('/', function (req, res) {
    res.send('index.html');
});

io.on('connection', function (socket) {
    console.log('a user connected');
    console.log(arguments);
    socket.on('disconnect', function () {
        console.log('user disconnected');
        console.log(arguments);
    });
});

redis.subscribe('test-channel');
redis.on('message', function (channel, message) {
    console.log('msg received');
    console.log(channel);
    console.log(message);
});

http.listen(3000, function () {
    console.log('listening on port 3000');
});