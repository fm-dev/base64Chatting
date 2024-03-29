const express = require('express');
const app = express();

const server = require('http').createServer(app);

const io = require('socket.io')(server, {
    cors: { origin:"*"}
});
io.on('connection',(socket)=>{
    console.log('connection');

    socket.on('sendChetTosServer',(message)=>{
        console.log(message);

        io.sockets.emit('sendchetToClient',message);
    });
    
    socket.on('disconnect',(socket)=>{
        console.log('disconnect')
    });
})
server.listen(3000,()=>{
    console.log('server is running');
})