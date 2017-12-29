const express = require('express');
const bodyParser = require('body-parser');
const http = require('http');
const request = require('request');
const fs = require('fs');

const app = express();
//app.use(bodyParser.json()); // for parsing application/json
app.use(bodyParser.urlencoded({extended: true})); // for parsing application/x-www-form-urlencoded
app.use(bodyParser.raw());

app
    .route('/url')
    .get(function (req, res) {
        res.send('Get a random book');
    })
    .post(function (req, res) {
        console.log(req.body);

        request(req.body.url, function (error, response, body) {
            request.post(
                {
                    url: 'http://localhost:8080/rpc',
                    body: JSON.stringify({
                        "jsonrpc": "2.0",
                        "method": "job/create",
                        "params": {
                            "html":body,
                            "webhook" : "http://localhost:8001/pdf/" + req.body.name
                        },
                        "id": "128612876124812"
                    }),
                },
                function (err, httpResponse, body) {
                    console.log(body)
                }
            );
        });

        res.header("Access-Control-Allow-Origin", "*");
        res.send(true)

    });


//pdf
app.use(bodyParser.raw({
    inflate: true,
    limit: '10000kb',
    type: 'application/pdf'
}));

app
    .route('/pdf/:name?')
    .get(function (req, res) {
        let files = [];
        fs.readdirSync("../frontend/storage/").forEach(file => {
            files.push(file)
        });
        res.header("Access-Control-Allow-Origin", "*");
        res.header("Content-Type", "application/json");
        res.send(files);
    })
    .post(function (req, res) {
        console.log(req.body);
        console.log(req.params.name);

        fs.open("../frontend/storage/" + req.params.name + ".pdf", 'w', function(err, fd) {
            if (err) {
                throw 'could not open file: ' + err;
            }

            // write the contents of the buffer, from position 0 to the end, to the file descriptor returned in opening our file
            fs.write(fd, req.body, 0, req.body.length, null, function(err) {
                if (err) throw 'error writing file: ' + err;
                fs.close(fd, function() {
                    console.log('wrote the file successfully');
                });
            });
        });



        res.header("Access-Control-Allow-Origin", "*");
        res.send(true);
    });

app.listen(8001, function () {
    console.log('Example app listening on port 8001!')
});