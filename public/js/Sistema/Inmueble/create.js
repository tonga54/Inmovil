$("#slcTipoInmueble").change(function(){
    valor = $("#slcTipoInmueble").val();
    if(valor != ""){
        $.ajax({
           url:'obtenerTiposOperaciones',
           data:{'idCategoriaPadre': valor},
           type:'get',
           success: function (response) {
                response = JSON.parse(response);
                var html = "<label>Tipo de operacion:</label>";
                html += "<select id='slcTipoOperacion' name='tipoOperacion' class='form-control'>";
                html += "<option value=''>-- Seleccione un tipo de operacion --</option>";
                for(var i = 0; i < response.length; i++){
                    html += "<option value='" + response[i].id + "'>" + response[i].name + "</option>";
                }
                html += "</select>";

                $("#tipoOperacion").html(html);

                //Change
                $("#slcTipoOperacion").change(function(e){
                    e.stopImmediatePropagation();
                    valor = $("#slcTipoOperacion").val();
                    if(valor != ""){
                        $.ajax({
                            url:'obtenerAtributosTipoOperacion',
                            data:{'idTipoOperacion': valor},
                            type:'get',
                            success: function (response) {
                                response = JSON.parse(response);
                                var html = "";

                                var titularSegmento = "";
                                for(var i = 0; i < response.length; i++){
                                    if(titularSegmento == ""){
                                        titularSegmento = response[i].attribute_group_name;
                                        html += "<div class='form-group col-md-12'><h3>" + response[i].attribute_group_name + "</h3></div>";
                                    }

                                    if(titularSegmento != response[i].attribute_group_name){
                                        titularSegmento = response[i].attribute_group_name;
                                        html += "<div class='form-group col-md-12'><h3>" + response[i].attribute_group_name + "</h3></div>";
                                    }

                                    // html += "<div class='form-group col-md-12'>";
                                    if(response[i].value_type == "list"){
                                        html += "<div class='form-group col-md-12'>";
                                            html += "<label for='" + response[i].id + "'>" + response[i].name + "</label>";
                                            html += "<select name='" + response[i].id + "' class='form-control'>";
                                                if(response[i].mlcategorias4.length > 0){
                                                    for(var x = 0; x < response[i].mlcategorias4.length; x++){
                                                        html += "<option value='" + response[i].mlcategorias4[x].id + "'>" + response[i].mlcategorias4[x].name + "</option>";
                                                    }
                                                }
                                            html += "</select>";
                                        html += "</div>";
                                    }
                                    else if(response[i].value_type == "number" || response[i].value_type == "number_unit"){
                                        html += "<div class='form-group col-md-12'>";
                                            html += "<label for='" + response[i].id + "'>" + response[i].name + "</label>";
                                            html += "<input type='number' id='" + response[i].id + "' name='" + response[i].id + "' class='form-control'>";
                                        html += "</div>";
                                    }
                                    else if(response[i].value_type == "string"){
                                        html += "<div class='form-group col-md-12'>";
                                            html += "<label for='" + response[i].id + "'>" + response[i].name + "</label>";
                                            html += "<input type='text' id='" + response[i].id + "' name='" + response[i].id + "' class='form-control'>";
                                        html += "</div>"
                                    }
                                    else{
                                        html += "<div class='form-group col-md-6'>";
                                            html += "<div class='checkbox'><label for='" + response[i].id + "'><input type='checkbox' id='" + response[i].id + "' name='" + response[i].id + "'>" + response[i].name + "</label></div>";
                                        html += "</div>";
                                    }
                                    // html += "</div>";
                                }


                                $("#camposDinamicos").html(html);
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