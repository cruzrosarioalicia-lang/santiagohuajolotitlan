// Busca el código postal y lo muestra
document.addEventListener("DOMContentLoaded", function(){

    function buscarCodigoPostal(
        inputCP,
        inputEntidad,
        inputMunicipio,
        selectColonia
    ){

        const cpInput = document.getElementById(inputCP);
        const entidad = document.getElementById(inputEntidad);
        const municipio = document.getElementById(inputMunicipio);
        const coloniaSelect = document.getElementById(selectColonia);

        if(cpInput){

            cpInput.addEventListener("input", function(){

                let cp = this.value.trim();

                // Si no tiene 5 dígitos
                if(cp.length !== 5){

                    if(entidad) entidad.value = "";
                    if(municipio) municipio.value = "";

                    coloniaSelect.innerHTML =
                    '<option value="">Selecciona una colonia</option>';

                    return;
                }

                fetch("ajax/buscar_cp.php?cp=" + cp)

                .then(response => response.json())

                .then(data => {

                    if(!data || data.colonias.length === 0){

                        if(entidad) entidad.value = "";
                        if(municipio) municipio.value = "";

                        coloniaSelect.innerHTML =
                        '<option value="">Sin resultados</option>';

                        return;
                    }

                    // Estado
                    if(entidad){
                        entidad.value = data.estado;
                    }

                    // Municipio
                    if(municipio){
                        municipio.value = data.municipio;
                    }

                    // Colonias
                    coloniaSelect.innerHTML =
                    '<option value="">Selecciona una colonia</option>';

                    data.colonias.forEach(function(colonia){

                        let option = document.createElement("option");

                        option.value = colonia;
                        option.textContent = colonia;

                        coloniaSelect.appendChild(option);

                    });

                })

                .catch(error => console.error("Error:", error));

            });

        }

    }

    // FORMULARIO DEL ALUMNO
    buscarCodigoPostal(
        "codigoPostal_perfil",
        "entidadPerfil",
        "municipioPerfil",
        "coloniaPerfil"
    );

    // FORMULARIO DEL TUTOR
    buscarCodigoPostal(
        "codigoPostalT_perfil",
        null,
        "municipioT_Perfil",
        "coloniaT_Perfil"
    );

});

// En la parte de tutor si la persona selecciona padre o madre en automatico se muestra su información
document.addEventListener("DOMContentLoaded", function(){

    const parentesco = document.getElementById("parentesco_TAlum");

    parentesco.addEventListener("change", function(){

        let valor = this.value;

        // SOLO padre y madre
        if(valor != 1 && valor != 2){
            return;
        }

        fetch(
            "ajax/obtener_familiar.php?id_alumno="
            + ID_ALUMNO +
            "&parentesco=" +
            valor
        )

        .then(response => response.json())

        .then(data => {

            // Si no encontró datos
            if(!data){
                return;
            }

            // Colocar datos en los inputs
            document.getElementById("nombre_TAlum").value = data.nombre ?? '';
            document.getElementById("aPaterno_TAlum").value = data.apellido_paterno ?? '';
            document.getElementById("aMaterno_TAlum").value = data.apellido_materno ?? '';
            document.getElementById("telefono_TAlum").value = data.telefono ?? '';
            document.getElementById("codigoPostalT_perfil").value = data.codigo_postal ?? '';
            document.getElementById("municipioT_Perfil").value = data.municipio ?? '';
            document.getElementById("coloniaT_Perfil").value = data.colonia ?? '';
            document.getElementById("calle_TAlum").value = data.calle ?? '';
            document.getElementById("numExterior_TAlum").value = data.numero ?? '';
        })

        .catch(error => console.log(error));

    });

});