Vue.component('modal-registrar', {

    props: {

        id: {
            type: String,
            required: true
        },
        id_form: {
            type: String
        },
        titulo: {
            type: String,
            required: true
        },
        para: {
            type: String,
            required: false
        },
        sub_titulo: {
            type: String,
            required: false
        },
        tamanio: {
            type: String,
            required: false
        },
        campos: {
            type: Array,
            required: false
        },
        url: {
            type: String,
            required: false
        }
    },

    mounted() {
        $('.ui.checkbox').checkbox();
        $('.ui.radio.checkbox').checkbox();
        /* $('input.timepicker').timepicker({
            dropdown: true,
            scrollbar:true
        }); */
    },

    methods: {
        registrar() {
            var gatos = {};

            if (validarVacios(this.id_form) == 0) {

                $('#' + this.id_form).addClass('loading');

                $('#' + this.id_form).find(":input").each(function () {
                    gatos[this.name] = $(this).val();
                });

                gatos = JSON.stringify(gatos);

                console.log(gatos);
                var param = {
                    method: 'POST',
                    headers: {
                        "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
                    },
                    body: "datos=" + gatos,
                };


                fetch(this.url, param)
                    .then(response => {
                        return response.text();
                    })
                    .then(val => {
                        if (val == 1) {
                            swal({
                                title: 'Cargo bancario guardado',
                                text: 'El monto de la cuenta ha sido actualizado exitosamente',
                                type: 'success',
                                showConfirmButton: true
                            });
                            
                            $('#' + this.id_form).removeClass('loading');
                            $('#' + this.id).modal('hide');
                            this.$parent.refrescarTabla();

                            resetFrm(this.id_form, "#btnRegistrar");
                           
                        }
                        
                    }).catch(res => {
                        console.log(res);
                    });
            }
        },
        cancelar() {
            resetFrm(this.id_form, "#btnRegistrar");
        }

    },

    


    template: `<div :class="['ui','modal',tamanio]" :id="id">

                <div class="header">
                    {{titulo}}
                </div>
                <div class="content">
                    <h4 v-if="sub_titulo">{{sub_titulo}}</h4>
                    <form action="" class="ui equal width form" :id="id_form">
                        <div v-for="campo in campos" class="field">
                            <label>{{campo.label}} </label>
                            <select class="ui dropdown" v-if="campo.type == 'select'" :name="campo.name" :id="campo.name">
                                <option v-for="(op,i) in campo.options" :value="op.val" :key='i'>
                                    {{op.text}}
                                </option>  
                            </select>
                            <div class="ui radio checkbox" v-else-if="campo.type == 'radio'" v-for="(op,index) in campo.options" :key='index'>
                                <input type="radio" name="campo.name" tabindex="0" class="hidden" :value='op.val' :checked='index==0'>
                                <label>{{op.text}}</label>
                            </div>

                            <div class="ui checkbox" v-else-if="campo.type == 'checkbox'" v-for="(op,index) in campo.options" :key='index'>
                                <input type="checkbox" tabindex="0" class="hidden" name="campo.name" :value='op.val'>
                                <label>{{op.text}}</label>
                            </div>

                            <input v-else-if="campo.type == 'horita'" type="text" :name="campo.name" class="requerido timepicker timepicker-with-dropdown"/>

                            <input v-else-if="campo.type == 'number'" class="requerido" :type="campo.type" :name="campo.name" :min="campo.min" :max="campo.max" :id="campo.name" :step='campo.step' :disabled='campo.disabled'>

                            <input v-else class="requerido" :type="campo.type" :mask="campo.mask" :id="campo.id" :name="campo.name">

                            <div class="ui red pointing label" style="display: none;">
                            </div>
                        </div>
                    </form>        
                </div>
                <div class="actions">
                    <button class="ui black deny button" @click="cancelar">
                        Cancelar
                    </button>
                    <button id="btnRegistrar" class="ui right green button" @click="registrar" >
                        Registrar
                    </button>
                </div>
            </div>`
});
