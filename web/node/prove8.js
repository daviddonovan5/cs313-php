const http = require('http');
const url = require('url');
const fs = require('fs');

const server = http.createServer(onRequest);

server.listen(8888);

function onRequest(request, response) {
    const path = url.parse(request.url, true);

    if (path.path == '/home') {
    	const html = fs.readFileSync('home.html').toString();
	    response.writeHead(200, {"Content-Type": "text/html"});
	    response.write("<h1>Hello World</h1>");
	    response.end();
    } else if (path.path == '/getData') {
    	const json = '{"name":"David Donovan","class":"cs313"}';
	    response.writeHead(200, {"Content-Type": "application/json"});
	    response.write(json);
	    response.end();
    } else {
    	response.writeHead(404, {"Content-Type": "text/html"});
	    response.write("Page Not Found");
	    response.end();
    }
}

console.log("Hello World");