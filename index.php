<script type="text/javascript" src="jquery-1.12.0.min.js"></script>
<form id="data">
    <input type="hidden" name="id" value="123" readonly="readonly">
    User Name: <input type="text" name="username" value=""><br />
    Profile Image: <input name="profileImg[]" type="file" /><br />
    Display Image: <input name="displayImg[]" type="file" /><br />
    <input type="submit" value="Submit">
</form>
<script type="text/javascript">
    $("form#data").submit(function (event) {
        event.preventDefault();
        var formData = new FormData($(this)[0]);

        $.ajax({
            url: 'formprocessing.php',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (returndata) {
                alert(returndata);
            }
        });

        return false;
    });
</script>