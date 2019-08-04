<tr id="tr-{{$item->id}}">
    <td>1</td>
    <td>
        {{$item->product_name}}
        <div class="help-block with-errors"></div>
    </td>
    <td>
        <div class="input-group col-md-12">
            <input type="number" id="item-quantity-{{$item->id}}" name="item_quantity[0]" value="1" class="form-control"
                   onchange="totalCount()">
        </div>
    </td>
    <td>
        <div class="input-group col-md-12">
            <input type="text" id="item-price-{{$item->id}}" name="item_price[0]" value="{{$item->product_price}}"
                   class="form-control">
        </div>
    </td>
    <td>
        <div class="input-group col-md-10">
            <input type="text" id="item-discount-{{$item->id}}" name="discount[0]" value="0.00" class="form-control"
                   readonly="">
        </div>
    </td>
    <td>
        <div class="input-group col-md-10">
            <input type="text" id="item-total-{{$item->id}}" name="item_total[0]" value="{{$item->product_price}}"
                   class="form-control"
                   readonly="">
        </div>
    </td>
    <td>
        <a href="javascript:;" class="btn btn-danger btn-remove-row">
            X
        </a>
    </td>
</tr>

<script type="text/javascript">
    $('.btn-remove-row').on('click', function () {
        $(this).parent().parent().remove();
        $("#ps").val('');
        totalCount();
    });

    function totalCount() {
        var priceElement = $('input[name*="item_price"]');
        var quantityElement = $('input[name*="item_quantity"]');
        var totalElement = $('input[name*="item_total"]');
        var total = 0;
        for (i = 0; i < totalElement.length; i++) {
            total = parseFloat(total) + parseFloat($(priceElement[i]).val() * $(quantityElement[i]).val());
//            totalElement[i].val(total)
        }

        $("#invoice-sub-total").html(total.toFixed(2));
        $("#invoice-total").html(total.toFixed(2));
        $("#invoice-pay").val(total.toFixed(2));
        $("#pay-note").val(total.toFixed(2));
    }
</script>