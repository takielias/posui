<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>POSUI Created By Taki Elias</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet"
          href="{{asset('public/vendor/takielias/posui/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('public/vendor/takielias/posui/css/posui.css')}}">
</head>

<body>

<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
                    <li><a href="../navbar-static-top/">Static top</a></li>
                    <li><a href="../navbar-fixed-top/">Fixed top</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="">

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Disc</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="product_list">
                        </tbody>
                    </table>

                    <div id="custom-templates">
                        <input class="form-control typeahead" id="ps" type="text" placeholder="Search Product"
                               autofocus="yes">
                    </div>


                </div>
                <div class="col-md-4">
                    <table class="table table-hover table-bordered">
                        <tbody>
                        <tr>
                            <td rowspan="2">Customer</td>
                            <td>
                                <div class="input-group">
                                    <input type="text" name="patient_age" class="form-control"
                                           placeholder="Name">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group">
                                    <input type="text" name="patient_age" class="form-control"
                                           placeholder="Phone Number">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><span> Warehouse </span></td>
                            <td>
                                <div class="input-group col-md-10 col-md-offset-1">
                                    <span> Main Branch </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span> Date </span></td>
                            <td>
                                <div class="input-group">
                                    <input type="text" class="form-control pull-right" name="invoice_date"
                                           value="2019-08-01">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span> Payment Type </span></td>
                            <td>
                                <div class="input-group">

                                    <select name="payment_type"
                                            class="form-control">
                                        <option disabled="" selected="">
                                            Please Select an option
                                        </option>
                                        <option value="1"> Cash</option>
                                        <option value="2"> Debit Card</option>
                                        <option value="3"> Credit Card</option>
                                    </select>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span> Sub Total  </span></td>
                            <td>
                                <div id="invoice-sub-total" class="input-group">
                                    0.00
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span> Discount </span></td>
                            <td>
                                <div class="input-group">

                                    <input type="number" class="form-control col-md-3"
                                           name="discount_percent" readonly="">

                                    <span class="input-group-addon"><b>%</b></span>

                                    <input id="invoice-discount-taka" type="number"
                                           class="form-control col-md-6 col-md-offset-1"
                                           name="discount_taka" value="0">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-4"><span> Total Amount </span></td>
                            <td>
                                <div id="invoice-total" class="input-group">0.00
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span> Pay </span></td>
                            <td>
                                <div class="input-group">
                                    <input id="invoice-pay" type="number" class="form-control" name="pay_note"
                                           value="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span> Pay Note </span></td>
                            <td>
                                <div class="input-group">
                                    <input id="pay-note" type="number" class="form-control" name="pay_note"
                                           value="">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span> Return </span></td>
                            <td>
                                <div class="input-group">
                                    <span id="return"> 0.00 </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="input-group">

                                    <button type="reset" class="btn btn-danger"> Reset
                                        Form
                                    </button>

                                    <button type="submit" class="btn btn-success"> Complete
                                        Sale
                                    </button>
                                    &nbsp;
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('public/vendor/takielias/posui/plugins/jquery/jquery-3.4.1.min.js')}}"></script>

<script src="{{asset('public/vendor/takielias/posui/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('public/vendor/takielias/posui/plugins/typeahead.js/typeahead.bundle.js')}}"></script>

<script>
    $(document).ready(function () {
        var searchEngine = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '{{route('posuisearch','q=query')}}',
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
                return data.product_name
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
                        "        <img class=\"ProfileCard-avatar\" src=" + data.product_image + ">\n" +
                        "        <div class=\"ProfileCard-details\">\n" +
                        "          <div class=\"ProfileCard-realName\"> " + data.product_name + "</div>\n" +
                        "          <div class=\"ProfileCard-description\"> " + data.product_description + "</div>\n" +
                        "        </div>\n" +
                        "        <div class=\"ProfileCard-stats\">\n" +
                        "          <div class=\"ProfileCard-stat\"><span class=\"ProfileCard-stat-label\">Price : </span><b>" + data.product_price + "</b></div>\n" +
                        "          <div class=\"ProfileCard-stat\"><span class=\"ProfileCard-stat-label\">Available Quantity : </span><b>" + data.product_quantity + "</b></div>\n" +
                        "        </div>\n" +
                        "      </div>"
                }
            }
        }).on('typeahead:selected', function (obj, itemData) {
            $.ajax({
                url: "{{route('posuisingleitem')}}",
                method: "GET",
                data: {"id": itemData.id},
                success: function (data) {
                    $("#product_list").append(data);
                    $('.typeahead').typeahead('val', '');
                    totalCount();
                },
                error: function (data) {
                }
            });
        });
        function totalCount() {
            var salePriceElements = $('input[name*="product_price"]');
            var total = 0;
            for (i = 0; i < salePriceElements.length; i++) {
                total = parseFloat(total) + parseFloat($(salePriceElements[i]).val());
            }
            $("#invoice-sub-total").html(total.toFixed(2));
            $("#invoice-total").html(total.toFixed(2));
            $("#invoice-pay").val(total.toFixed(2));
            $("#pay-note").val(total.toFixed(2));
        }
    });
</script>

</body>
</html>
