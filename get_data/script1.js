var request = require('request');
var cheerio = require('cheerio');
var fs = require('fs');
var URL = "https://www.themoviedb.org/movie";
var f = "data/kinoneri_linker.json";
var n = "data/nkarneri_linker.json";


fs.writeFile(f, "[]");
fs.writeFile(n, "[]");
var kinoner = [];
var nkarner = [];

request.get(URL, function (error, response, page) {

    var $ = cheerio.load(page);
    var list = $(".image_content");
    for (var i = 0; i < list.length; i++) {
        var fullUrl = "https://www.themoviedb.org/" + $(".image_content a").eq(i).attr("href");
        var fullUrl1 = $(".image_content a img").eq(i).attr("data-srcset").split(" ")[0];
        kinoner.push(fullUrl);
        nkarner.push(fullUrl1);
    }
    fs.writeFile(f, JSON.stringify(kinoner));
    fs.writeFile(n, JSON.stringify(nkarner));

});


