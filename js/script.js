var nodes;
var lnodes;
var rnodes;

function ready() {
    nodes = document.querySelectorAll(".upeffect");
    lnodes = document.querySelectorAll(".lefteffect");
    rnodes = document.querySelectorAll(".righteffect");

    window.addEventListener("scroll", addEffect);
    addEffect();

    var date = new Date().toISOString().slice(0,10);
    var input = document.getElementById("date");
    input.setAttribute("min", date);

}

function InView(el, pages=1){
    let top = el.getBoundingClientRect().top;


    return(
        top <=
        (window.innerHeight +150|| document.documentElement.clientHeight)/pages
    );
};
function addEffect(){
    const triggerBottom = window.innerHeight;
    let pages=1.25;
    nodes.forEach( (node)=>{
        let top = node.getBoundingClientRect().top;

        if (InView(node,pages)){
            node.classList.add("ineffect");

        }else{
            node.classList.remove("ineffect");
        }
    });
    lnodes.forEach((node) =>{
        let top = node.getBoundingClientRect().top;

        if(InView(node,pages)){
            node.classList.add("ineffect");

        }else{
            node.classList.remove("ineffect");
        }
    });
    rnodes.forEach((node) =>{
        let top = node.getBoundingClientRect().top;

        if(InView(node,pages)){
            node.classList.add("ineffect");

        }else{
            node.classList.remove("ineffect");
        }
    });
}

function validChecksum(str){
    let tot =0;
    let last =0;
    for (let i=0; i < str.length; i++){
        tot+= parseInt(str[i]) || 0;
        last = str[i];
    }
    let letter = tot%26;
    if(letter==0) letter=26
    let c = String.fromCharCode(letter+64);
    if (c==last)
    return 1; else return 0;
}
function upperCase(src){
    if (!validChecksum(src.value)){
        src.setCustomValidity("Invalid Entry");
        src.classList.remove("valid");
        src.classList.add("invalid");

    }else{
        src.setCustomValidity("");
        src.style.border = "green 2px solid";
        src.classList.remove("invalid");
        src.classList.add("valid");      
    }
    const sel=src.selectionStart;
    src.value=src.value.toUpperCase();
    src.setSelectionRange(sel, sel);
}
const texts={
    "1":`A disclaimer that
    multiple vaccines are normally administered
    in combination and may cause the child to be
    sluggish or feverous for 24 – 48 hours
    afterwards`, 
    "2":`The best time to get vaccinated is
in April and May each year for optimal
protection over the winter months.`,
	"3":`Advice that everyone
should arrange to have their third shot as
soon as possible and adults over the age of
30 should have their fourth shot to protect
against new variant strains.`,
	"4":`That some tests require some
fasting ahead of time and that a staff
member will advise them on this prior to the
appointment.`,
	"0":"",
};
function changeReason(){
    document.getElementById("info").innerHTML =
     texts[document.getElementById("reason").value];
}