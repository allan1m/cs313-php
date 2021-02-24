var fs = require('fs');

var newLineFile = fs.readFileSync(process.argv[2], 'utf-8');
console.log(newLineFile.toString().match(/\n/g).length);