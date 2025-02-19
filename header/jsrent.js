var myindex=0;
var index=0;
carousel();
carousel1();
function carousel(){
    var i;
    var x=
    document.getElementsByClassName("slides");
    for(i=0;i<x.length;i++)
        {
            x[i].style.display="none";
        }
myindex++;
if(myindex>x.length)
{
   myindex=1;
}
x[myindex-1].style.display="block";
setTimeout(carousel , 3000  ) ;
}
var index=0;
carousel1();
function carousel1(){
    var j;
    var y = document.getElementsByClassName("slides1");
    for(j=0;j<y.length;j++)
        {
            y[j].style.display="none";
        }
index++;
if(index>y.length)
{
   index=1;
}
y[index-1].style.display="block";
setTimeout(carousel1 , 3000  ) ;
}

function myfunction(){
var x= document.getElementById("navhref");
if(x.classList.contains("responsive"))
{
    x.classList.remove("responsive")
}
else{
    x.classList.add("responsive");
}

}

document.addEventListener("DOMContentLoaded",function()
{
   var fullName = localStorage.getItem("fullname");
   document.getElementById("fullname").textContent = fullName;
});
function userinfo(){
   let aside =document.createElement("aside");
   aside.style.backgroundColor = " #EAD2AE";
}