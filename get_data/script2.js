const request = require('request');
const cheerio = require('cheerio');
const fs = require('fs');
const forEach = require('async-foreach').forEach;
const https = require('https');
const download = require('image-downloader')

var kinoneri_linker = require("./data/kinoneri_linker.json");
var files = require("./data/nkarneri_linker.json");
var f = "data/kinoneri_anunner.json";
var uploadDir = "nkarner/nkar";
var kinoneri_anunner_arr = [];

forEach(kinoneri_linker, function (link, index) {
    request(link, function (error, response, page) {
        index1 = index;
        var data = collectData(page, link);
        var name = data.name
        var imagesArr = [];
        var name1 = name.replace(/ /g, "");
        var name1 = name1.replace(":", "");
        var link = "https://www.bing.com/images/search?q=" + name1 + "&FORM=HDRSC2";
        request(link, function (error, response, page) {
            var $1 = cheerio.load(page);
            for (var i = 0; i < 12; i++) {
                var img_src = $1(".cico img").eq(i).attr("src");
                var imgs = "nkarner/" + name1 + i + ".jpg";
                var val = "nkar"+i;
                data[val] = imgs;
                download.image({ url: img_src, dest: imgs });
            }
            kinoneri_anunner_arr.push(data);
            fs.writeFile(f, JSON.stringify(kinoneri_anunner_arr));
            
            // console.log(kinoneri_anunner_arr)
            
        })
        
    });

});
function collectData(innerPage, currURL) {
    var pageData;
    var arr = [];
    var glavnArr = [];
    var $ = cheerio.load(innerPage);
    var name = $(".title h2").text();
    var name1 = name.replace(/ /g, "");
    var name1 = name1.replace(":", "") +"film";
    var link = "https://www.bing.com/images/search?q=" + name1 + "&FORM=HDRSC2";



    var desc = $(".header_info p");
    var glavn = $(".top_billed .card");
    var home_img_src = $(".image_content img").attr("src");
    var home_img = "nkarner/"+name+".jpg";
    download.image({url:home_img_src,dest:home_img});
    var status = $(".left_column p").eq(0).text();

    var trailer = $(".original_content iframe").attr('data-src')
    var relas1 = $(".releases li");
    var relasArr = [];
    for (var i = 0;i<relas1.length;i++){
        relasArr.push(relas1.eq(i).text().split("          ")[0].trim().replace("\n"," : "));
    }
    relasArr = relasArr.toString();
    i++;
    var p = $(".left_column p");
    var lang = p.eq(++i).text().split(" ")[2];
    var time = p.eq(++i).text();
    var budget = p.eq(++i).text().split(" ")[1];
    var revenue = p.eq(++i).text().split(" ")[1];
    var home_page = p.eq(++i).text().split(" ")[1];
    var genres = ($(".genres li"));
    var genresArr = [];
    for(var i = 0;i<genres.length;i++) genresArr.push(genres.eq(i).text())
    genresArr = genresArr.toString();
    for (var j in glavn) {
        var text = glavn.eq(j).text().trim().split("  ").toString().replace(",,,,,,,,,","");
        if (text) {
            var img = $(".top_billed .card img").eq(j).attr("data-src");
            var glavnImg =text.replace(/\n/g,"");
            glavnImg ="nkarner/"+ glavnImg.split(" ")[0] +".jpg";
            
            download.image({url:img,dest:glavnImg});
            glavnArr.push([text,glavnImg]);
        }
    }
    for (var i in desc) {
        var data = desc.eq(i).text();
        if (data) arr.push(data)
    }
    pageData = {
        "id": index1,
        "name": name,
        "desc": arr[0],
        "desc1": arr[2] + ":" + arr[1],
        "desc2": arr[4] + ":" + arr[3],
        "desc3": arr[6] + ":" + arr[5],
        "desc4": arr[8] + ":" + arr[7],
        "glavnin0":glavnArr[0][1],
        "glavnin1":glavnArr[1][1],
        "glavnin2":glavnArr[2][1],
        "glavnin3":glavnArr[3][1],
        "glavnin4":glavnArr[4][1],
        "glavni0": glavnArr[0][0],
        "glavni1": glavnArr[1][0],
        "glavni2": glavnArr[2][0],
        "glavni3": glavnArr[3][0],
        "glavni4": glavnArr[4][0],
        "home_img": home_img,
        "status": status,
        "relase": relasArr,
        "lang": lang,
        "time": time,
        "budget": budget,
        "revenue": revenue,
        "home_page": home_page,
        "genres": genresArr,
        "trailer": trailer
    };

    return pageData;

}
