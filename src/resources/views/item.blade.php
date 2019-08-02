<tr id="tr-{{$item->id}}">
    <td width="3%">1</td>
    <td width="40%">
        {{$item->product_name}}
        <div class="help-block with-errors"></div>
    </td>
    <td width="10%">
        <div class="input-group col-md-12">
            <input type="number" id="quantity-{{$item->id}}" name="quantity" value="1" class="form-control">
        </div>
    </td>
    <td width="12%">
        <div class="input-group col-md-12">
            <input type="text" id="product-price-{{$item->id}}" name="product_price[0]" value="{{$item->product_price}}"
                   class="form-control">
        </div>
    </td>
    <td width="10%">
        <div class="input-group col-md-10">
            <input type="text" id="product-discount-{{$item->id}}" name="discount" value="0.00" class="form-control"
                   readonly="">
        </div>
    </td>
    <td width="17%">
        <div class="input-group col-md-10">
            <input type="text" id="product-total-{{$item->id}}" name="total" value="{{$item->product_price}}"
                   class="form-control"
                   readonly="">
        </div>
    </td>
    <td width="8%">
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
</script>