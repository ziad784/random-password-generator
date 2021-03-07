let num = document.getElementById("num");
let slider = document.getElementById("slider");
let input = document.getElementById("input");
let uppercase = document.getElementById("upper");
let lowercase = document.getElementById("lower");
let numbers = document.getElementById("nums");
let symp = document.getElementById("symp");
let generate = document.getElementById("repeat");
let txt = document.getElementById("txt");
let copy = document.getElementById("copy");
let box = document.getElementById("box");
let req = document.getElementById("req");
let chars = "ABCDEFGPQRS!@#$%^&*abcdef0!@#$%^&*12389ghijkOlm47nopqTUrstuvwxyzHIJKLMNVW56XYZ";



let header = document.getElementById("header");








function generateString(length) {
   
    
    let result = ' ';
    const charactersLength = chars.length;
    for ( let i = 0; i < length; i++ ) {
        result += chars.charAt(Math.floor(Math.random() * charactersLength));
    }

    return  input.value = result;
    




}

function copytxt(){
    input.select();
    input.setSelectionRange(0, 99999);
    document.execCommand("copy");
    alert("password copided");
    generateString(slider.value);
}
slider.addEventListener("change",()=>{
  num.value = slider.value;
  generateString(slider.value);
});


num.addEventListener("change",()=>{
   if(num.value == 0){
       num.value = 1;
   }else if(num.value > 50){
       num.value = 50;
   }
   slider.value = num.value
   
});



window.addEventListener("load", ()=>{

   generateString(slider.value);




});

generate.addEventListener("click",()=>{
    generateString(slider.value);

});


copy.addEventListener("click",()=>{
    copytxt();

   
});

window.addEventListener("keypress",(e)=>{
   console.log(e);
   if(e.key == "c"){
       copytxt();
   }else if(e.key == " "){
    generateString(slider.value);
   }
});


