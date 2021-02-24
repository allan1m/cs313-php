//http is the required module for http requests.
var http = require('http')

//.get() is one http method, which is used for making requests to a server
http.get(process.argv[2], function (response) {
    //Its good practice to include the used encoding. You can't always
    //with ommitting it like many people do in html documents.
    response.setEncoding('utf8')
    //.on() assigns our event handlers
    response.on('data', console.log)
    response.on('error', console.error)
})