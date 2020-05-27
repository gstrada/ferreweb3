<script>
    function getCities(provinceId, elementId){

        $('#'+elementId).prop('disabled', false);
        let city = "{{ \App\Province::where('id',"+ provinceId + ")  }}";
        $('#'+elementId).html( "<option value=''>Seleccionar ciudades</option>" +
            "<option value=''>"+city+"</option>");

    }
</script>
