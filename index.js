const frame = document.getElementById("frame");
const btn = document.getElementById("btn");
const title = document.getElementById("title");

window.addEventListener("DOMContentLoaded", ()=>{
    title.classList.add("slidein");
    setTimeout(()=>{
        btn.classList.remove("invisible")
        btn.classList.add("slidein")
            }
       ,500
       );
})

btn.addEventListener("click" , ()=>{
    frame.classList.add("fadein")   
    setTimeout(()=>{frame.classList.add("d-none")
    }
      ,400
        );
 
    window.setTimeout(function () {
            location.href = "index2.php";
     }, 500);
})

