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
<style>
    .typeahead, .tt-query, .tt-hint {
        width: 310px;
        height: 100%;
        padding: 8px 12px;
        font-size: 16px;
        line-height: 30px;
        border: 2px solid #ccc;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        outline: none;
    }
</style>
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
    <div class="jumbotron">

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
                        <tbody id="service_content">
                        </tbody>
                    </table>
                    <div class="col-md-4"> Search Product Name</div>
                    <div class="col-md-6 col-lg-offset-2">
                        <div id="search">
                            <input class="form-control typeahead" id="ps" type="text" placeholder="Product Name" autofocus="yes">
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="box box-default">
                        <div class="box-body">
                            <form name="form-sale" class="form-horizontal"
                                  action="http://localhost/laravel/medisoftbd/diagnostic/ompleteDiagnosticSale"
                                  method="post">
                                <table class="table table-hover table-bordered" style="background-color: #EEE;">
                                    <tbody>
                                    <tr>
                                        <td>
                                                    <span style="font-size: 20px; color: #046f3e;">
                                                        Patient:
                                                    </span>
                                        </td>
                                        <td style="text-align: center;">

                                            <div class="input-group col-md-10 col-md-offset-1">
                                                <span class="twitter-typeahead"
                                                      style="position: relative; display: inline-block;"><input
                                                            type="text" class="form-control search-field tt-hint"
                                                            style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"
                                                            readonly="" autocomplete="off" spellcheck="false"
                                                            tabindex="-1" dir="ltr"><input type="text"
                                                                                           id="searchPatient"
                                                                                           name="patient_name"
                                                                                           class="form-control search-field tt-input"
                                                                                           placeholder="Search Patient name"
                                                                                           autocomplete="off"
                                                                                           spellcheck="false" dir="auto"
                                                                                           style="position: relative; vertical-align: top; background-color: transparent;"><pre
                                                            aria-hidden="true"
                                                            style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Source Sans Pro&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></pre><div
                                                            class="tt-menu"
                                                            style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"><div
                                                                class="tt-dataset tt-dataset-patient_name"></div></div></span>
                                            </div>
                                            <div class="input-group col-md-10 col-md-offset-1">
                                                <input type="text" name="patient_age" class="form-control"
                                                       placeholder="Patient Age">
                                            </div>
                                            <div class="input-group col-md-10 col-md-offset-1">
                                                <input type="text" name="user_phone" class="form-control"
                                                       placeholder="Patient Phone Number">
                                            </div>

                                            <div class="input-group col-md-10 col-md-offset-1">
                                                <div class="radio col-md-4">
                                                    <label data-original-title="" title="">
                                                        <input type="radio" name="gender" value="1" checked="">
                                                        Male </label>
                                                </div>

                                                <div class="radio col-md-4">
                                                    <label data-original-title="" title="">
                                                        <input type="radio" name="gender" value="2">
                                                        Female </label>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span style="font-size: 16px;"> Reffered By </span></td>
                                        <td>
                                            <div class="input-group col-md-10 col-md-offset-1">
                                                <input type="text" class="form-control pull-right" name="referred_by">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><span style="font-size: 16px;"> Branch </span></td>
                                        <td>
                                            <div class="input-group col-md-10 col-md-offset-1">
                                                <span style="font-size: 16px;"> Main Branch </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 16px;"> Date </span></td>
                                        <td>
                                            <div class="input-group col-md-10 col-md-offset-1">
                                                <input type="hidden" name="_token"
                                                       value="liEgdnA06mgdBFjatyy3QtsVWRdj1GsPvVzu37bz">
                                                <input type="text" class="form-control pull-right" name="invoice_date"
                                                       id="datepicker" value="2019-08-01">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 16px;"> Payment Type </span></td>
                                        <td>
                                            <div class="input-group col-md-10 col-md-offset-1">
                                                <select name="payment_type"
                                                        class="form-control select2 select2-hidden-accessible"
                                                        tabindex="-1" aria-hidden="true">
                                                    <option disabled="" selected="">
                                                        Please Select an option
                                                    </option>
                                                    <option value="1"> Cash</option>
                                                    <option value="2"> Debit Card</option>
                                                    <option value="3"> Credit Card</option>
                                                </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" style="width: 241.383px;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-labelledby="select2-payment_type-7k-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-payment_type-7k-container" title="
                                                                Please Select an option
                                                            ">
                                                                Please Select an option
                                                            </span><span class="select2-selection__arrow"
                                                                         role="presentation"><b role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 16px;"> Sub Total  </span></td>
                                        <td>
                                            <div id="invoice-sub-total" class="input-group col-md-11 col-md-offset-1">
                                                0.00
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 16px;"> Discount </span></td>
                                        <td>
                                            <div class="input-group col-md-11 col-md-offset-1">
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
                                        <td class="col-md-4"><span style="font-size: 16px;"> Total Amount </span></td>
                                        <td>
                                            <div id="invoice-total" class="input-group col-md-11 col-md-offset-1">0.00
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 16px;"> Pay </span></td>
                                        <td>
                                            <div class="input-group col-md-11 col-md-offset-1">
                                                <input id="invoice-pay" type="number" class="form-control" name="pay"
                                                       readonly="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 16px;"> Pay Note </span></td>
                                        <td>
                                            <div class="input-group col-md-11 col-md-offset-1">
                                                <input id="pay-note" type="number" class="form-control" name="pay_note"
                                                       value="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="font-size: 16px;"> Return </span></td>
                                        <td>
                                            <div class="input-group col-md-11 col-md-offset-1">
                                                <span id="return" style="font-size: 16px;"> 0.00 </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="input-group col-md-11 col-md-offset-1">

                                                <button type="submit" class="btn btn-success btn-sm"> Complete
                                                    Sale
                                                </button>
                                                &nbsp;
                                                <button type="reset" class="btn btn-warning btn-sm"> Reset
                                                    Form
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
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

        var bloodhound = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '{{route('posuisearch','%query')}}',
                wildcard: '%QUERY%',
                prepare: function (query, settings) {
                    settings.url = settings.url.replace('%query', query);
                    return settings;
                }
            }
        });

        $('#ps').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'q',
            source: bloodhound,
            limit: 10,
            display: function (data) {
                return data.product_name  //Input value to be set when you select a suggestion.
            },
            templates: {
                empty: [
                    '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                ],
                header: [
                    '<div class="list-group search-results-dropdown">'
                ],
                suggestion: function (data) {
                    return '<div style="cursor: pointer; font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.product_name + '</div></div>'
                }
            }
        }).on('typeahead:selected', function (obj, serviceData) {

        });

        function totalCount() {
            var salePriceElements = $('input[name*="diagnostic_test_sale_price"]');
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
