var fs = require('fs');
var path = require('path');

var newLineFile = fs.readdir(process.argv[2], (err, files) => {
    if (err)
        console.log(err);
    else {
        files.forEach(file => {
            if (path.extname(file) == ".md")
                console.log(file);
        })
    }
});