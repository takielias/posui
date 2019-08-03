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
                <tbody id="item_list">
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