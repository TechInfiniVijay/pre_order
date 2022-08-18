<?php
$page = "dashboard";
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pre Order</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<!-- <?php
        $sql = "SELECT * FROM `pre_order`";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        ?>
<style>
    .demoBtn {
        background-color: <?php echo $data['btn_bg_color']; ?>;
        width: <?php echo $data['btn_width'] . "px"; ?>;
        height: <?php echo $data['btn_height'] . "px"; ?>;
        border-radius: <?php echo $data['border_radius'] . "px"; ?>;
        border-color: <?php echo $data['border_color']; ?>;
        border-width: <?php echo $data['border_width'] . "px"; ?>;
        color: <?php echo $data['font_color']; ?>;
        font-size: <?php echo $data['font_size'] . "px"; ?>;
        font-family: <?php echo $data['font_family']; ?>;
        font-weight: <?php echo $data['font_bold']; ?>;
        font-style: <?php echo $data['font_italic']; ?>;
        text-decoration: <?php echo $data['font_underline']; ?>;
    }
</style> -->

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Pre Order</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php?oauth_token=<?php echo $oauth_token; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="display.php?oauth_token=<?php echo $oauth_token; ?>">Display</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container mt-5 w-75 mb-5">
        <form action="">
            <div class="card">
                <div class="card">
                    <div class="card-header">Pre - Order</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 bg-muted">
                                <div class="card">
                                    <div class="card-header">Button Style</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Button Value</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                    <input type="text" name="btn_value" id="btn_value" maxlength="20" class="form-control" placeholder="" value="Pre Order" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Color</label>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-lg-4">
                                                    <input type="color" name="color" id="color" class="form-control" value="#ffc106" />
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <input type="text" name="" id="colortxt" class="form-control" value="#FFC106" readonly />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Width</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                    <input type="range" name="width" id="width" class="form-control" placeholder="" value="100" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Height</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                    <input type="range" name="height" id="height" class="form-control" placeholder="" value="50" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Border Radius</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                    <input type="range" name="radius" id="borderRadius" class="form-control" placeholder="" value="0" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Border Color</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <input type="color" name="bordercolor" id="bordercolor" class="form-control" value="#ffc106" />
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <input type="text" name="" id="bordercolortxt" class="form-control" placeholder="" value="#FFC106" readonly />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Border Width</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                    <input type="range" name="borderWidth" id="borderWidth" class="form-control" placeholder="" value="1" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Font Color</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <input type="color" name="fontColor" id="fontColor" class="form-control" value="#000000" />
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <input type="text" name="" id="fontColortxt" class="form-control" placeholder="" value="#000000" readonly />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Font Size</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                    <input type="range" name="fontSize" id="fontSize" class="form-control" placeholder="" value="16" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Font Family</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                    <select name="fontFamily" id="fontFamily" class="form-control">
                                                        <option value="" aria-readonly="readonly">
                                                            Theme Default
                                                        </option>
                                                        <option value="serif" style="font-family: serif">
                                                            Serif
                                                        </option>
                                                        <option value="Sans-Serif" style="font-family: Sans-Serif">
                                                            Sans-Serif
                                                        </option>
                                                        <option value="monospace" style="font-family: monospace">
                                                            Monospace
                                                        </option>
                                                        <option value="cursive" style="font-family: cursive">
                                                            Cursive
                                                        </option>
                                                        <option value="fantasy" style="font-family: fantasy">
                                                            Fantasy
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-lg-4">
                                                    <label for="">Font Style</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-lg-8">
                                                    <div class="btn-group">
                                                        <button type="button" data="900" data-click="false" id="bold" class="btn btn-outline-secondary">
                                                            <b>B</b>
                                                        </button>
                                                        <button type="button" data="italic" data-click="false" id="italic" class="btn btn-outline-secondary">
                                                            <i>I</i>
                                                        </button>
                                                        <button type="button" data="underline" data-click="false" id="underline" class="btn btn-outline-secondary">
                                                            <u>U</u>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="button" class="btn btn-light btn-outline-secondary">
                                            Cancel
                                        </button>
                                        <button type="button" class="btn btn-primary" onclick="submitData()" id="submitBtn">Save</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="text-left">Preview</h6>
                                        <div class="text-center mt-5 mb-5">
                                            <div id="btnHtml"><button type="button" id="demoBtn" class="btn btn-warning">Pre Order</button></div>
                                            <br />
                                            <small>We will fullfill the order ASAP</small>
                                        </div>
                                        <div class="text-center">
                                            <button type="reset" id="resetAll" class="btn btn-outline-primary">
                                                Restore to Default
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">&copy; TechInfini Pvt Ltd</div>
                </div>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            let demoBtn = document.querySelector("#demoBtn");

            var btn_value = document.querySelector('#btn_value');
            btn_value.addEventListener('keyup', function() {
                demoBtn.innerHTML = this.value
            })

            var color = document.querySelector("#color");
            var colortxt = document.querySelector("#colortxt");
            color.addEventListener("change", function() {
                colortxt.value = this.value;
                demoBtn.style.backgroundColor = this.value;
            });
            var width = document.querySelector("#width");
            width.addEventListener("mousemove", function() {
                demoBtn.style.width = this.value + "px";
            });

            var height = document.querySelector("#height");
            height.addEventListener("mousemove", function() {
                demoBtn.style.height = this.value + "px";
            });

            var borderRadius = document.querySelector("#borderRadius");
            borderRadius.addEventListener("mousemove", function() {
                demoBtn.style.borderRadius = this.value + "px";
            });

            var bordercolor = document.querySelector("#bordercolor");
            var bordercolortxt = document.querySelector("#bordercolortxt");
            bordercolor.addEventListener("change", function() {
                bordercolortxt.value = this.value;
                demoBtn.style.borderColor = this.value;
            });

            var borderWidth = document.querySelector("#borderWidth");
            borderWidth.addEventListener("mousemove", function() {
                demoBtn.style.borderWidth = this.value + "px";
            });

            var fontColor = document.querySelector("#fontColor");
            var fontColortxt = document.querySelector("#fontColortxt");
            fontColor.addEventListener("change", function() {
                fontColortxt.value = this.value;
                demoBtn.style.color = this.value;
            });

            var fontSize = document.querySelector("#fontSize");
            fontSize.addEventListener("mousemove", function() {
                demoBtn.style.fontSize = this.value + "px";
            });

            var fontFamily = document.querySelector("#fontFamily");
            fontFamily.addEventListener("change", function() {
                demoBtn.style.fontFamily = this.value;
            });

            var count1 = 0;
            var bold = document.querySelector("#bold");
            bold.addEventListener("click", function() {
                if (count1 == 0) {
                    demoBtn.style.fontWeight = this.getAttribute("data");
                    this.setAttribute("data-click", true);
                    bold.style.backgroundColor = "#5960FC";
                    bold.style.color = "#ffffff"
                    count1 = 1;
                } else {
                    count1 = 0;
                    demoBtn.style.fontWeight = "";
                    bold.style.backgroundColor = "#FFFFFF";
                    bold.style.color = "#000000"
                    this.setAttribute("data-click", false);
                }
            });

            var count2 = 0;
            var italic = document.querySelector("#italic");
            italic.addEventListener("click", function() {
                if (count2 == 0) {
                    demoBtn.style.fontStyle = this.getAttribute("data");
                    italic.style.backgroundColor = "#5960FC";
                    this.setAttribute("data-click", true);
                    italic.style.color = "#ffffff"
                    count2 = 1;
                } else {
                    count2 = 0;
                    demoBtn.style.fontStyle = "";
                    italic.style.backgroundColor = "#FFFFFF";
                    italic.style.color = "#000000"
                    this.setAttribute("data-click", false);
                }
            });

            count3 = 0;
            var underline = document.querySelector("#underline");
            underline.addEventListener("click", function() {
                if (count3 == 0) {
                    demoBtn.style.textDecoration = this.getAttribute("data");
                    underline.style.backgroundColor = "#5960FC";
                    this.setAttribute("data-click", true);
                    underline.style.color = "#ffffff"
                    count3 = 1;
                } else {
                    count3 = 0;
                    demoBtn.style.textDecoration = "";
                    underline.style.backgroundColor = "#FFFFFF";
                    this.setAttribute("data-click", false);
                    underline.style.color = "#000000"
                }
            });

            let resetAll = document.querySelector("#resetAll");
            resetAll.addEventListener("click", function() {
                demoBtn.innerHTML = "Pre Order";
                demoBtn.removeAttribute("style");
                bold.style.backgroundColor = "#FFFFFF";
                italic.style.backgroundColor = "#FFFFFF";
                underline.style.backgroundColor = "#FFFFFF";
                count1, count2, count3 = 0;
                bold.setAttribute("data-click", false);
                italic.setAttribute("data-click", false);
                underline.setAttribute("data-click", false);
            });

            // Document Ready Function Close
        });

        // Ajax Call Data Save Database
        function submitData() {
            var fontBold = '';
            var fontItalic = '';
            var fontUnderline = '';
            boldAttr = bold.getAttribute('data-click');
            italicAttr = italic.getAttribute('data-click');
            underlineAttr = underline.getAttribute('data-click');
            if (boldAttr === "true") {
                fontBold = bold.getAttribute('data');
            }
            if (italicAttr === "true") {
                fontItalic = italic.getAttribute('data');
            }
            if (underlineAttr === "true") {
                fontUnderline = underline.getAttribute('data');
            }

            let formData = {
                'btn_value': btn_value.value,
                'btn_bg_color': color.value,
                'btn_width': width.value,
                'btn_height': height.value,
                'borderRadius': borderRadius.value,
                'bordercolor': bordercolor.value,
                'borderWidth': borderWidth.value,
                'fontColor': fontColor.value,
                'fontSize': fontSize.value,
                'fontFamily': fontFamily.value,
                'fontBold': fontBold,
                'fontItalic': fontItalic,
                'fontUnderline': fontUnderline,
                'btn_html': document.querySelector("#btnHtml").innerHTML
            }
            let token = `<?php echo $oauth_token; ?>`;

            $.ajax({
                type: "POST",
                url: `main.php?oauth_token=${token}`,
                data: formData,
                beforeSend: function() {
                    $('#submitBtn').removeClass('btn-primary')
                    $('#submitBtn').addClass('btn-warning')
                    $('#submitBtn').attr('disabled', true).html("Processing...");
                },
                success: function(result) {
                    $('#submitBtn').removeClass('btn-warning')
                    $('#submitBtn').addClass('btn-primary')
                    $('#submitBtn').attr('disabled', false).html("Save");
                    // alert('Button Successfully Saved.')
                    // console.log(formData)
                    console.log(result)
                },
                error: function(errorThrown) {
                    console.log(errorThrown);
                    alert("There is an error with AJAX!");
                    // setTimeout(function() {
                    //     location.reload(true);
                    // }, 1000);
                }
            });

        }
        // Ajax Call End
    </script>
</body>

</html>