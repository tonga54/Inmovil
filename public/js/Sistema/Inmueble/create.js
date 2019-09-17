$("#slcTipoInmueble").change(function(){
    valor = $("#slcTipoInmueble").val();
    if(valor != ""){
        $.ajax({
           url:'obtenerTiposOperaciones',
           data:{'idCategoriaPadre': valor},
           type:'get',
           success: function (response) {
                var html = "<label>Tipo de operacion:</label><select id='slcTipoOperacion' name='tipoOperacion' class='form-control'>";
                response = JSON.parse(response);
                for(var i = 0; i < response.length; i++){
                    html += "<option value='" + response[i].id + "'>" + response[i].name + "</option>";
                }
                html += "</select>";

                $("#tipoOperacion").html(html);

                //Change
                $("#slcTipoOperacion").change(function(e){
                    e.stopImmediatePropagation();
                    valor = $("#slcTipoOperacion").val();
                    $.ajax({
                        url:'obtenerAtributosTipoOperacion',
                        data:{'idTipoOperacion': valor},
                        type:'get',
                        success: function (response) {
                             response = JSON.parse(response);
                        },
                        statusCode: {
                           404: function() {
                              alert('web not found');
                           }
                        },
                        error:function(x,xs,xt){
                            //nos dara el error si es que hay alguno
                            window.open(JSON.stringify(x));
                            //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                        }
                     });
                })
                //Fin change
           },
           statusCode: {
              404: function() {
                 alert('web not found');
              }
           },
           error:function(x,xs,xt){
               //nos dara el error si es que hay alguno
               window.open(JSON.stringify(x));
               //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
           }
        });
    }
});