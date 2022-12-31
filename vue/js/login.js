  change=document.querySelector("#re");
    changeback=document.querySelector("#retourner");
    cover=document.querySelector(".cover");
    choix=document.querySelector("#choix");
    page2=document.querySelector("#page2");
    page3=document.querySelector("#page3");

    change.onclick=function(){
        if (choix.value == "etudiant") {
            cover.classList.toggle("coup");
            page2.style.display="none";
            page3.style.display="inline";
        }else{
            cover.classList.toggle("coup");
            page3.style.display="none";
            page2.style.display="inline";
        }
        
        

    }
    changeback.onclick=function(){
        if (choix.value == "etudiant") {
            cover.classList.toggle("coup");
            page2.style.display="none";
            page3.style.display="inline";
        }else{
            cover.classList.toggle("coup");
            page3.style.display="none";
            page2.style.display="inline";
        }
        
        

    }