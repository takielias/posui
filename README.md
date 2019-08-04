![GIt](https://user-images.githubusercontent.com/38932580/62421779-1a73f700-b6c9-11e9-9fdb-26303a3dcdb0.gif)

# Posui
A simple laravel package For Point of Sale User Interface HTML Template. Special Thanks to @AzimUddin248

#Installation
```sh
composer require takielias/posui
```
#Documentation

Execute the Command after successful installation. 
```sh
php artisan vendor:publish --tag=public --force`
```

### Add this To your Header
```sh
    <link rel="stylesheet"
          href="{{asset('public/vendor/takielias/posui/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/vendor/takielias/posui/css/posui.css')}}">
```

### Add this To your Footer
```sh
<script src="{{asset('public/vendor/takielias/posui/plugins/jquery/jquery-3.4.1.min.js')}}"></script>

<script src="{{asset('public/vendor/takielias/posui/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('public/vendor/takielias/posui/plugins/typeahead.js/typeahead.bundle.js')}}"></script>

<script>
    $(document).ready(function () {
        var searchEngine = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '{{route('posui.item.search','q=query')}}',
                wildcard: '%QUERY%',
                prepare: function (query, settings) {
                    settings.url = settings.url.replace('query', query);
                    return settings;
                }
            }
        });
        searchEngine.initialize();
        $('#ps').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'q',
            source: searchEngine,
            limit: 10,
            display: function (data) {
                return data.item_name
            },
            templates: {
                empty: [
                    '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing Found.</div></div>'
                ],
                header: [
                    '<div class="list-group search-results-dropdown">'
                ],
                suggestion: function (data) {
                    return "" +
                        "<div class=\"ProfileCard u-cf Typeahead-suggestion Typeahead-selectable\">\n" +
                        "        <img class=\"ProfileCard-avatar\" src=" + data.item_image + ">\n" +
                        "        <div class=\"ProfileCard-details\">\n" +
                        "          <div class=\"ProfileCard-realName\"> " + data.item_name + "</div>\n" +
                        "          <div class=\"ProfileCard-description\"> " + data.item_description + "</div>\n" +
                        "        </div>\n" +
                        "        <div class=\"ProfileCard-stats\">\n" +
                        "          <div class=\"ProfileCard-stat\"><span class=\"ProfileCard-stat-label\">Item Code : </span><b>" + data.item_code + "</b></div>\n" +
                        "          <div class=\"ProfileCard-stat\"><span class=\"ProfileCard-stat-label\">Price : </span><b>" + data.item_price + "</b></div>\n" +
                        "          <div class=\"ProfileCard-stat\"><span class=\"ProfileCard-stat-label\">Available Quantity : </span><b>" + data.item_quantity + "</b></div>\n" +
                        "        </div>\n" +
                        " </div>"
                }
            }
        }).on('typeahead:selected', function (obj, itemData) {
            $.ajax({
                url: "{{route('posui.get.single.item')}}",
                method: "GET",
                data: {"id": itemData.id},
                success: function (data) {
                    if ($("#tr-" + itemData.id).length) {
                        $("#item-quantity-" + itemData.id).val(parseInt($("#item-quantity-" + itemData.id).val()) + 1);
                        $("#item-total-" + itemData.id).val($("#item-quantity-" + itemData.id).val() * $("#item-price-" + itemData.id).val());
                    } else {
                        $("#item_list").append(data);
                    }
                    $('.typeahead').typeahead('val', '');
                    totalCount();
                },
                error: function (error) {
                    alert('Something Wrong')
                }
            });
        });
        function totalCount() {
            var priceElement = $('input[name*="item_price"]');
            var quantityElement = $('input[name*="item_quantity"]');
            var totalElement = $('input[name*="item_total"]');
            var total = 0;
            for (i = 0; i < priceElement.length; i++) {
                total = parseFloat(total) + parseFloat($(priceElement[i]).val() * $(quantityElement[i]).val());
//                totalElement[i].val(total)
            }
            $("#invoice-sub-total").html(total.toFixed(2));
            $("#invoice-total").html(total.toFixed(2));
            $("#invoice-pay").val(total.toFixed(2));
            $("#pay-note").val(total.toFixed(2));
        }
    });
</script>
```

### Now Make 2 routes in your Route file

```sh
Route::get('posui-item-search', [
    'as' => 'posui.item.search',
    'uses' => 'MyController@search'
]);

Route::get('posui-get-single-item', [
    'as' => 'posui.get.single.item',
    'uses' => 'MyController@singleItem'
]);
```

### Add this in your Controller
```sh 
use Takielias\Posui\Posui;
```

### You can Get the view
```sh
    function posuiview()
    {
        $template = Posui::getPosUiView();
        return view('welcome', compact('template'));
    }
```

### Search Item
```sh
    function search(Request $request)
    {
        $rt = [
            'item_id' => 'id',
            'item_code' => 'product_code',
            'item_name' => 'product_name',
            'item_price' => 'product_price',
            'item_image' => 'product_image',
            'item_description' => 'product_description',
            'item_quantity' => 'product_quantity',
        ];
        $data = Posui::searchItem(ItemModel::query(), $rt, $request);
        return response()->json($data);
    }
```
**Here product_code, product_name, product_price etc are representing your Item table column name**

### Select Single Item
```sh
    function singleItem(Request $request)
    {
        return Posui::getSingleItem(ItemModel::query(), $request);
    }
```
