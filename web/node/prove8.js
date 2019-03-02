var http = require('http');


function onRequest(req, res){
    if (req.url == "/home") {
        res.writeHead(200, {"Content-Type": "text/html"});
        res.write('<html>');
        res.write('<h1>Welcome to the Home Page</h1>');
        res.write('</html>');
        res.end();
    } else if (req.url == "/getData") {
        res.writeHead(200, {"Content-Type": "application/json"});
        var user = {"name":"David Donovan","class":"cs313"}
        res.write(JSON.stringify(user));
        res.end();
    } else {
        res.writeHead(404, {"Content-Type": "text/html"});
        res.write("404 Not Found\n")
        res.end();
    }
}

http.createServer(onRequest).listen(8888);

console.log("Running Server on http://localhost:8888/home");
