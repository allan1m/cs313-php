var http = require('http'); //1 - Import Node.js core Module
var url = require('url');

var server = http.createServer(function(req, res){ //2 - Create server

    if (req.url == '/home') {
        
        home(res);
    }
    else if(req.url == '/getData'){
        getData(res);
    }
    else{
        renderPage(res);
    }

});

function home(res){
    res.writeHead(200, {'Content-Type': 'text/html'});

    res.write('<h1> Welcome to the Home Page</h1>');
    res.end();
}

function getData(res){
    res.writeHead(200, {'Content-Type': 'application/json'});

    var obj = {"name": "Allan", "class":"CSE341"};
    res.write(JSON.stringify(obj));
    res.end();
}

function renderPage(res){
    res.writeHead(404, {'Content-Type': 'tex/plain'});
    res.write('Page Not Found');
    res.end();
}

server.listen(8888, '70.171.254.178');
