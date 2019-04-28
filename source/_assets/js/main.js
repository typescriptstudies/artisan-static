import 'sharer.js';
import './highlight';

const clickMe = document.querySelector('.test-js');

if (clickMe) {
    clickMe.addEventListener('click', () => {
        clickMe.textContent = 'it works ' + String(Date.now()).slice(-6);
    });
}

const outdated = document.querySelector('[data-phpdate]');

if (outdated) {
    const phpdate = outdated.dataset.phpdate;
    if (((Date.now() / 1000 - phpdate) / 86400) < 365) {
        outdated.style.display = 'none';
    }
}

let loggingdisabled = document.location.href.includes("nolog=true")

if(document.location.host.includes("localhost"))
{
    console.log("not logging on localhost", document.location.href)
}
else{
    if(loggingdisabled){
        console.log("logging disabled", document.location.href)        
    }else{
        console.log("sending log request", document.location.href)
        fetch("https://fbserv.herokuapp.com/games.html?ref=blog")
    }     
}

for(let node of document.querySelectorAll(".link")){
    let href = node.href
    if(loggingdisabled) node.href = href + "?nolog=true"
}