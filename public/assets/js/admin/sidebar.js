document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".collapse").forEach(menu => {

        const id = menu.id;

        if(localStorage.getItem(id) === "show"){

            menu.classList.add("show");

        }

        menu.addEventListener("shown.bs.collapse",()=>{

            localStorage.setItem(id,"show");

            actualizarIcono(menu,true);

        });

        menu.addEventListener("hidden.bs.collapse",()=>{

            localStorage.setItem(id,"hide");

            actualizarIcono(menu,false);

        });

        actualizarIcono(menu,menu.classList.contains("show"));

    });

});

function actualizarIcono(menu,abierto){

    const boton=document.querySelector(`[data-bs-target="#${menu.id}"]`);

    const icono=boton.querySelector(".ri-arrow-down-s-line, .ri-arrow-right-s-line");

    if(!icono) return;

    if(abierto){

        icono.classList.remove("ri-arrow-right-s-line");

        icono.classList.add("ri-arrow-down-s-line");

    }else{

        icono.classList.remove("ri-arrow-down-s-line");

        icono.classList.add("ri-arrow-right-s-line");

    }

}