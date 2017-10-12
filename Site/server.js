
var fs=require('fs');

fs.readFile('~/exemple.txt',(err,data) => {
	if (err) throw err;
	console.log(data);
});

