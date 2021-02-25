const http = require('http'); //1 - Import Node.js core Module
const port = 8080;

function home(res) {
    res.writeHead(200, { 'Content-Type': 'text/html' });
    res.write("<h1>Welcome to the Home Page</h1>");
    res.end();
}

function getData(res) {
    res.writeHead(200, { 'Content-Type': 'application/json' });
    const info = { name: "Allan Marina", class: "CS313" };
    res.write(JSON.stringify(info));
    res.end();
}

const requestListener = (req, res) => { 

    if (req.url == '/home') {
        home(res);
    }
    if(req.url == '/getData'){
        getData(res);
    }
    
    res.writeHead(404, { 'Content-Type': 'text/html' });
    res.write("<h1>Page not found</h1>");
    res.end();
    
    

};

var server = http.createServer(requestListener);

server.listen(port);
