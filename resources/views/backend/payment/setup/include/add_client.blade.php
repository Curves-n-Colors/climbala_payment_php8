
<div class="modal fade stick-up" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="max-width: 500px; margin: 0 auto;">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <button aria-label="" type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                        class="pg-icon">&#10005;</i>
                </button>
                <h5>Add <span class="semi-bold">Client</span></h5>
                <p>Create new client if you cannot find from the options.</p>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="" id="add-client-form">
                    <div class="form-group-attached">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-default required">
                                    <label>Client Name</label>
                                    <input type="text" class="form-control" name="name"  id="client_name" placeholder="Name of Client"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-default required">
                                    <label>Client E-mail</label>
                                    <input type="email" class="form-control" name="email" id="client_email" placeholder="E-mail of Client"
                                        required>
                                        @error('email')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-group-default">
                                    <label>Client Remarks</label>
                                    <textarea class="form-control" name="remarks" placeholder="Remarks of Client"
                                        style="height: 90px" id="client_remarks"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-check info">
                            <input type="checkbox" name="is_active" value="10" id="checkbox-active" checked>
                            <label for="checkbox-active">Active ?</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" id="add-client-btn" data-random=""
                                class="btn btn-lg btn-primary btn-block m-t-5">Add</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-lg btn-danger btn-block m-t-5"
                                data-dismiss="modal" id="close_form">Cancel</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

</div>

@push('scripts')
<script>
    function isValidEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $(document).on("click", "#add-client-btn", function (e) {
        e.preventDefault();
        var $this = $(this);
        $clientForm = $("#add-client-form"),
        $name = $("#client_name").val();
        $email =$("#client_email").val();
        if ($name == "") {
            notify_bar("danger", "Enter Your Client Name");
            return false;
        }
        if ($email == "") {
            notify_bar("danger", "Enter Your Client E-mail");
            return false;
        }
        if(!isValidEmail($email)){
            notify_bar("danger", "Enter valid e-mail.");
            return false;
        }
        $.ajax({
                url: '/client/store/ajax',
                type: "POST",
                data: $clientForm.serialize(),
                async: true,
                beforeSend: function () {
                $this.html("Loading...").prop("disabled", true);
                },
                success: function (response) {
                    $("#client_name").val("");
                    $("#client_email").val("");
                    $("#client_remarks").val("");
                $this.html("Proceed").prop("disabled", false);
                if (response.status) {
                $('#close_form').click();
                var data = [
                    {
                    id: response.data.id,
                    text: response.data.name
                }];
                $('[data-init-plugin=select2]').select2({data: data});
                $('[data-init-plugin=select2]').val(response.data.id).trigger('change');
                $('#email').val(response.data.email);
                notify_bar("success", response.msg);
                } else {
                notify_bar("danger", response.msg);
                $this.html("Proceed").prop("disabled", false);
                }
                }
                });
        });

</script>
@endpush