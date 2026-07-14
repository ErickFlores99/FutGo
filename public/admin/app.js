function crearCompetencia() {
    const formulario = $('#formCompetencia');

    $.ajax({
        url: '/app/competencias/crear',
        method: 'POST',
        headers: {
            'Accept':'application/json'
        },
        data: formulario.serialize(),

        success(response) {
            // Alerta
            Swal.fire({
                icon: 'success',
                title: response.message,
                text: '',
                timer: 5000,
                showConfirmButton: false,
                timerProgressBar: true
            });

            // Restablecer formulario
            formulario[0].reset();

            // Limpiar Select2
            formulario.find('.select2').val(null).trigger('change');

            // Limpiar errores de validación
            limpiarErroresFormulario(formulario);

            // Cerrar modal
            const modal = bootstrap.Modal.getInstance(
                document.getElementById('crearCompetencia')
            );

            modal.hide();
        },
        error(xhr){
            
            console.log('STATUS:', xhr.status);

            console.log('RESPONSE:', xhr.responseText);

            if(xhr.status === 422){
                mostrarErroresFormulario(
                    '#formCompetencia',
                    xhr.responseJSON.errors
                );
            }

        }
    });
}

/**
 * Muestra errores de validación Laravel dentro de un formulario.
 *
 * @param {string} formulario Selector del formulario
 * @param {object} errores Errores enviados por Laravel
 */
function mostrarErroresFormulario(formulario, errores) {

    const form = $(formulario);

    // Primero limpiamos errores anteriores
    limpiarErroresFormulario(formulario);

    // Recorremos los errores recibidos
    $.each(errores, function(campo, mensajes) {

        // Buscamos el input/select/textarea por su name
        const elemento = form.find(`[name="${campo}"], [name="${campo}[]"]`);

        if(elemento.length) {

            // Agregamos clase de Bootstrap
            elemento.addClass('is-invalid');

            // Buscamos el contenedor del mensaje
            let feedback = elemento
                .closest('.mb-3, .col-md-6, .col-md-12, .col-12')
                .find('.invalid-feedback');

            // Si existe colocamos el mensaje
            if(feedback.length) {

                feedback.text(mensajes[0]);

            } else {

                // Si no existe lo creamos automáticamente
                elemento.after(`
                    <div class="invalid-feedback">
                        ${mensajes[0]}
                    </div>
                `);

            }

        }

    });

}

/**
 * Limpia todos los errores del formulario.
 */
function limpiarErroresFormulario(formulario) {

    const form = $(formulario);

    // Quitamos estilos inválidos
    form.find('.is-invalid')
        .removeClass('is-invalid');

    // Limpiamos mensajes
    form.find('.invalid-feedback')
        .text('');
}