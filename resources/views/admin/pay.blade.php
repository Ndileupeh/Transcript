
@extends('layout.footer')
@section('body')
<div class="col-md-9 col-sm-8">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="users">
                <tr>
                    <td>Username</td>
                    <td>
                        <a href="#" data-pk="1" id="username" class="editable" data-title="Edit User Name" data-placeholder="Required">Nataliapery</a>
                    </td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>
                        <a href="#" data-pk="1" class="editable" id="email" data-title="Edit E-mail" data-type="email" data-placeholder="Required">Nataliapery@example.com</a>
                    </td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>
                        <a href="#" data-pk="1" class="editable" id="contact" data-title="Edit Phone Number" data-placeholder="Required">999-999-9999</a>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>
                        <a href="#" data-pk="1" id="addr" class="editable" data-title="Edit Address" data-placeholder="Required">Sydney, Australia</a>
                    </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>
                        <a href="#" data-pk="1" id="city" class="editable" data-title="Edit City" data-placeholder="Required">Nakia</a>
                    </td>
                </tr>
                <tr>
                    <td>Pincode</td>
                    <td>
                        <a href="#" data-pk="1" id="pincode" class="editable" data-title="Edit Pincode" data-placeholder="Required">999999</a>
                    </td>
                </tr>
                <tr>
                    <td>Fax</td>
                    <td>
                        <a href="#" data-pk="1" id="fax" class="editable" data-title="Edit Fax">12345</a>
                    </td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td>
                        <a href="#" data-pk="1" id="url" class="editable" data-type="url" data-title="Edit Website">https://www.example.com</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="terms">
<div class="row">
<div class="col-md-12">
    <div>
        <h4>Terms and Conditions</h4>
    </div>
    <form>
        <textarea class="summernote edi-css" placeholder="Place some text here"></textarea>
        <div class="form-actions pad-top">
            <div class="">
                <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                <input type="reset" class="btn btn-default reset-editable" value="Reset">
            </div>
        </div>
    </form>
</div>
</div>
</div>

@endsection
