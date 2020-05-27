function getCities(provinceId, elementId){
    alert(provinceId);
    $('#'+elementId).prop('disabled', false);
    let city = "";
    $('#'+elementId).html( "<option value=''>Seleccionar ciudades</option>" +
        "<option value=''>"+city+"</option>");

}
