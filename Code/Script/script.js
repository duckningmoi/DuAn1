var hinhanhs = [
    "Images/banner.webp",
    "Images/banner2.webp"
]
var times;
var index = 0 ;

function next(){
    index++
    if(index == hinhanhs.length){
        index = 0;
    }
    document.getElementById('banner').src = hinhanhs[index]
}

function start(){
    times = setInterval(next,2000)
}
start();

