<?php include 'layouts/header.php'; ?>
<div class="wrapper container">
    <?php include 'layouts/nav.php'; ?>
    <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">
        <?php include 'layouts/lang.php'; ?>
        <div class="body-content">

            <style>
                .txtHead {
                    color: #7F0055;
                }
            </style>
            <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                <div class="col-12" id="tabSeven">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.5.2 UserPlaceBet">5.1
                            Call Back Withdraw</b></lable>
                </div>



                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>

                                https://example.com


                            </label>

                        </div>
                        <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div>
                        <div style="font-size:12px; color:red;">* Url มาจาก Withdraw ในหน้า Setting ที่หัวข้อ 3.1</div>
                    </div>
                    <div class="form-group col-12">
                        <label set-lan="html:When a player">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            เพิ่ม Item ให้ User ใน Gmaemarket</label>
                    </div>

                    <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable351">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="bRight">username</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Name Accout User</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">amount</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">amount withdraw</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">access_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Access key form game</td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">withdraw_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Track Withdraw</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">datetime</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Withdraw Datetime <span style=" COLOR:RED;">*(2021-09-21@05:32:28)</span></td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">token</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">genarate token format md5 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <label set-lan="html:When a player places">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        ตัวอย่าง Generate Token</label>
                    <div class="koh-tab-content col-12">
                        <div class="col-12">
                            <img src="./API_files/md3.png" style="width: 90%; margin-left: 8%;; border: 1px solid #ced4da;">
                        </div>
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #0C3175 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    
        <span class="hljs-attr">"username"</span>: <span class="hljs-string">"korn"</span>,
        <span class="hljs-attr">"amount"</span>: <span class="hljs-string">"1.00"</span>,
        <span class="hljs-attr">"access_key"</span>: <span class="hljs-string">"9M8jKHT9g@*.()_+-!$G52"</span>,
        <span class="hljs-attr">"withdraw_key"</span>: <span class="hljs-string">"90f1c85b-ddfe-42fa-a114-ddcb5d01ee61"</span>,
        <span class="hljs-attr">"datetime"</span>: <span class="hljs-string">"2021-09-21@05:32:28"</span>,
        <span class="hljs-attr">"token"</span>: <span class="hljs-string">"92e17ce5dffc720124fdf58db0b820a5"</span>,
    
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;">Response Body</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="bRight txtCenter">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="bRight txtCenter">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">msg</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Information message.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;">Service Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable2">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #0C3175 !important;">Example Service
                                            Respond Code </b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">success</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pb-5"></div>

                <div class="btn-toolbar mb-12">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='seamlessapi.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>

                </div>

            </div>

        </div>
    </main>
</div>

<?php include 'layouts/footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#manu5 , #manu5 > a").addClass("active");
        $("#manu5 > div").css("display", "block");

        $(this).on("click", ".koh-faq-question", function() {
            $(this).parent().find(".koh-faq-answer").slideToggle();
            $(this).find(".fa").toggleClass('active');
        });

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);

        var page = 5;
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>