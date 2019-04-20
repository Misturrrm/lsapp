var btn = document.getElementById("btn");
var info = document.getElementById("info");
btn.addEventListener("click",function(){
    var myRequest = new XMLHttpRequest();
    myRequest.open("GET","https://learnwebcode.github.io/json-example/animals-3.json");
    myRequest.onload = function(){
            var myData = JSON.parse(myRequest.responseText);
            renderHTML(myData);
        };
    myRequest.send();

    function renderHTML(data){
    var htmlString  = "";

    for (i = 0; i < data.length ; i++){
        htmlString+= "<p> My name is " + data[i].name + " and I am a " + data[i].species ;
        htmlString+= "</p>";
    }

    info.insertAdjacentHTML('beforeend', htmlString);
}
});