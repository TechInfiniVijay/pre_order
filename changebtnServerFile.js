let domain = 'https://043a-115-166-143-82.ngrok.io';
let shop = 'vijay-test-store-1.myshopify.com';
let url = `${domain}/Pre_order/getToken.php?shop=${shop}`;
var oauth_token ='';

         $.ajax({
            type: "POST",
            url: url,
            crossDomain: true,
            dataType: 'json',
            success: function (result) {
            oauth_token=result.oauth_token
              let btnUrl = `${domain}/Pre_order/apis.php?oauth_token=${oauth_token}&shop=${shop}`;
              
        $.ajax({
            type: "POST",
            url: btnUrl,
            success: function (result) {
              $('button:contains("Add to cart")').replaceWith(result.btn_html);
              // $('button:contains("Buy it now")').replaceWith(result.btn_html);
            },
          error: function (error) {
             console.log(btnUrl)
          }
        });
              
            },
          error: function (error) {
            console.log("error")
          }
        });

// This is shopify theme asset file code.