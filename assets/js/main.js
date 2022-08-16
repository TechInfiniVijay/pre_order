const shop = document.querySelector('#ShopValue').value
const token = document.querySelector('#tokenValue').value

function deleteProduct(e) {
    let pid = e.getAttribute('data-id');
    var $ele = e.closest('tr');
    $.ajax({
        type: "DEL",
        url: `main.php?oauth_token=${token}&shop=${shop}`,
        data: { deleteId: pid },
        success: function (result) {
            // alert("Product Successfully Delete.")
            console.log(result)
            // $ele.remove();
            // window.location.reload();
        }
    });
}

// Get Data Model Form
$(document).delegate("[data-target='#shopifyCrud']", "click", function () {
    var productId = $(this).attr('data-id');
    // Ajax config
    $.ajax({
        type: "GET",
        url: `main.php?oauth_token=${token}&shop=${shop}`,
        dataType: "json",
        data: { productId: productId },
        success: function (response) {
            // console.log(response)
            // response = JSON.parse(response);
            $("#editForm [name=\"id\"]").val(response.id);
            $("#editForm [name=\"title\"]").val(response.title);
            $("#editForm [name=\"desc\"]").text(response.body_html);
        }
    });
});

function resetForm(selector) 
{
	$(selector)[0].reset();
}


// Update Product
    $("#updateBtn").on("click", function () {
        var $this = $(this);
        var $caption = $this.html();
        var form = "#editForm";
        var formData = $(form).serializeArray();
        
        
        $.ajax({
            type: "POST",
            url: `main.php?oauth_token=${token}&shop=${shop}`,
            data: formData,
            beforeSend: function () {
                $this.attr('disabled', true).html("Processing...");
            },
            success: function (response) {
                $this.attr('disabled', false).html($caption);
                resetForm(form);
                $('#shopifyCrud').modal('toggle');
                
                window.location.reload();
            },error: function(errorThrown){
                console.log(errorThrown);
                alert("There is an error with AJAX!");
            } 
        });
    });
