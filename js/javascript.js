function slide1(){
    document.getElementById("id").src = "src/img01.png";
    setTimeout("slide2()", 5000);
}

function slide2(){
    document.getElementById("id").src = "src/img2.png";
    setTimeout("slide3()", 5000);
}

function slide3(){
    document.getElementById("id").src = "src/img3.jpg";
    setTimeout("slide4()", 5000);
}

function slide4(){
    document.getElementById("id").src = "src/img4.jpg";
    setTimeout("slide5()", 5000);
}

function slide5(){
    document.getElementById("id").src = "src/img5.webp";
    setTimeout("slide1()", 5000);
}
