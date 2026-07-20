const mostrarCompetencias = ()=>{
    $.ajax({
        url:"/app/competencias/mostrar",
        method:"GET",

        success(response){
            $("#seccion_competencias")
                .html(response);

        },
        error(){
            console.error(
                "Error cargando competencias"
            );
        }
    });
};

/********************************* LLAMADO DE FUNCIONES ********************************/

mostrarCompetencias();