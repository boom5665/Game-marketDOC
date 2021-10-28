<?php include 'layouts/header.php'; ?>
<div class="wrapper container">
    <?php include 'layouts/nav.php'; ?>
    <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">
        <?php include 'layouts/lang.php'; ?>
        <div class="body-content">

            <style>
                .marTop {
                    margin-top: 1rem;
                }
            </style>

            <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                <h1><b style="color: #0C3175 !important;">4. Service Respond Code</b></h1>
                <div class="pb-3"></div>

                <div class="col-12" id="tabOne">
                    <lable><b style="color: #0C3175 !important;">4.1 Member Authen</b></lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper marTop">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">61001</td>
                                        <td>Invalid UserAgent or ApiKey</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61002</td>
                                        <td>IP address is not allowed.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61003</td>
                                        <td>request error Player not found.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61004</td>
                                        <td>request error callback url requst error destination error</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">61005</td>
                                        <td>(Other error)</td>
                                    </tr>
                                 
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

      

                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #0C3175 !important;">4.2 Service Respone</b></lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper marTop">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th set-lan="html:Description" class="txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td>success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41001</td>
                                        <td>Error Request body is not an object.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">41002</td>
                                        <td>invalid input format 'balance', 'page', 'limit',  field.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="btn-toolbar mb-12" style="margin-top: 20px;">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='optionchannel .php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='index.php'">
                            <lan set-lan="html:Next">Next</lan>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'layouts/footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#manu6 , #manu6 > a").addClass("active");
        $("#manu6 > div").css("display", "block");

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);
        
        var page = 6;
        console.log(url_link(page, URL));
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>