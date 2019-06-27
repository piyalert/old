<!-- Modal -->
<div class="modal fade" id="modalMessageID" tabindex="-1" role="dialog" aria-labelledby="modalMessageShow" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header" id="modal-header-color">
                <h3 class="modal-title" id="modalMessageShow">Message</h3>
                <button type="button" class="close" aria-label="Close" onclick="fnCloseModalMessage();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h4 class="font-weight-bold" id="textModalMessageId"></h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="fnCloseModalMessage();" >Close</button>
            </div>
        </div>
    </div>
</div>
<script>

    function fnTextModalMessage(text,code) {
        $('#modalMessageID').modal();

        $('#textModalMessageId').html(text);
        if(code==200) {
            $('#modal-header-color').addClass('alert-success');
        }else if(code==201){
                $('#modal-header-color').addClass('alert-warning');
        }else{
            $('#modal-header-color').addClass('alert-danger');
        }
    }
    function fnCloseModalMessage() {
        $('#modalMessageID').modal('hide');
    }

</script>