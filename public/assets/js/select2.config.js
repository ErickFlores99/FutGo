/**
 * ==========================================================
 * PlayGo Select2 Manager
 * ==========================================================
 */

const PlayGoSelect = (() => {

    const defaults = {

        theme: 'bootstrap-5',

        language: 'es',

        width: '100%',

        placeholder: 'Seleccione una opción',

        allowClear: true

    };

    /**
     * Obtiene la configuración desde los atributos data-*
     */
    function getOptions(element){

        return {

            theme: 'bootstrap-5',

            language: 'es',

            width: element.dataset.width || defaults.width,

            placeholder:
                element.dataset.placeholder || defaults.placeholder,

            allowClear:
                element.dataset.allowClear !== undefined
                    ? element.dataset.allowClear === "true"
                    : defaults.allowClear,

            minimumResultsForSearch:
                element.dataset.search === "false"
                    ? Infinity
                    : 0,

            closeOnSelect:
                element.dataset.close !== undefined
                    ? element.dataset.close === "true"
                    : true,

            tags:
                element.dataset.tags === "true",

            maximumSelectionLength:
                element.dataset.max
                    ? Number(element.dataset.max)
                    : 0

        };

    }

    /**
     * Inicializa un select
     */
    function init(element){

        $(element).select2(getOptions(element));

    }

    /**
     * Inicializa todos
     */
    function initAll(){

        $('.select2').each(function(){

            init(this);

        });

    }

    return {

        init,

        initAll

    };

})();

$(function(){

    PlayGoSelect.initAll();

});