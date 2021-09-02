
<script>

    $('#form-profile').pxValidate({
        focusInvalid: false,
        rules: {
            'filefoto': {
                required: false,
                extension: "jpg|png",
                accept: "image/*",
                filesize: 2048 * 1024
            }
        }
    })

    $.validator.addMethod('filesize', function(value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than {0} KB');


    function check_pass() {
        if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
            document.getElementById('update_profile').disabled = false;
        } else {
            document.getElementById('update_profile').disabled = true;
        }
    }
</script>