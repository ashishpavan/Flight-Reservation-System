function hello(){
    console.log("ola");
};
$(document).ready(function(){
    
})
window.onload=function(){
console.log("working");
const from=document.querySelector(".from");
const to=document.querySelector(".to");
const traveller=document.querySelector(".Traveller");
const dropdown_1=document.querySelector(".from_dropdown");
const dropdown_2=document.querySelector(".to_dropdown");
const dropdown_3=document.querySelector(".Traveller_dropdown");
const select_1=document.getElementById("select_1");
const select_2=document.getElementById("select_2");
const select_3=document.getElementById("select_3");
const h2_1=document.getElementById("h2_1");
const h2_2=document.getElementById("h2_2");
const h3=document.getElementById("radio");


//const x=document.querySelector(".from_result");
//const y=document.querySelector(".to_result");
//const z=document.querySelector(".Traveller_result");



from.addEventListener("mouseover",()=>{
    dropdown_1.classList.add("active");
    console.log("mouseover");
});

to.addEventListener("mouseover",()=>{
    dropdown_2.classList.add("active");
});


traveller.addEventListener("mouseover",()=>{
    dropdown_3.classList.add("active");
});


from.addEventListener("mouseout",()=>{
    dropdown_1.classList.remove("active");
    h2_1.innerHTML=select_1.options[select_1.selectedIndex].value;
});


to.addEventListener("mouseout",()=>{
    dropdown_2.classList.remove("active");
    h2_2.innerHTML=select_2.options[select_2.selectedIndex].value;
});


//traveller.addEventListener("mouseout",()=>{
 //   dropdown_3.classList.remove("active");
 //   h3.value=select_3.value;
//});






}