<script>
    function finalPrice() {
        let cost = $('#item_cost').val();
        let disc = $('#item_discount').val();
        let iva = $('#item_iva').val();
        let profit = $('#item_profit').val();
        let finalPrice;
            finalPrice = Math.ceil((((cost - (cost * (disc / 100))) + ((cost - (cost * (disc / 100))) * (iva / 100))) + ((cost - (cost * (disc / 100))) + ((cost - (cost * (disc / 100))) * (iva / 100))) * (profit / 100)) / 10) * 10;
            $('#item_final_price').val(finalPrice);
    }
</script>
