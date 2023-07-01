const express = require('express');
const app = express();
var cors = require('cors');
const http = require('http');
const server = http.createServer(app);
var axios = require('axios');

const io = require("socket.io")(server, {
  cors: {
    origin: [
      'http://localhost:3000',
      'http://localhost:8000',
      'http://localhost:80',
    ],
    methods: ["GET", "POST"],
    credentials: false
  }
});

// allow cross origin requests
app.use(cors());

app.use(express.json()) // for parsing application/json
app.use(express.urlencoded({ extended: true })) // for parsing application/x-www-form-urlencoded

app.get('/', (req, res) => {
  return res.json({
    message: 'it works'
  });
});

// websocket for ldr value
app.post('/', cors(), function (req, res) {
    // broadcast to all clients
    io.emit('ws-ldr-value', req.body.ldr_value);
    // post to api
    axios.post('http://127.0.0.1:8000/api/data', {
      ldr_value: req.body.ldr_value
    })
    .then(function (response) {
      console.log(response);
      res.json(response.data);
    })
    .catch(function (error) {
      console.log(error);
      res.json(response.data);
    });
});

io.on('connection', (socket) => {
  console.log('a user connected : '+ socket.id) ;
});

server.listen(3000, () => {
  console.log('listening on *:3000');
});