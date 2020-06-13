<script>
    function getCities(provinceId, token, elementId) {
        var element = $('#' + elementId);
        element.attr('disabled', false);
        // element.html('<option value="">Cargando...</option>');
        axios.post('{{ route("province.cities") }}',
            {
                id: provinceId,
                _token: token
            }).then(response => {

            element.html(response.data);


        }).catch(error => {
            //console.log(error.response);
        });

    }
</script>
