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
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.5.2 UserPlaceBet">7.1
                        URL Auto Login</b></lable>
                </div>
                <div class="pb-3"></div>

                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox">
                        <!-- <div class="col-12">
                            <label class="txtHead">Method : </label>
                            <label>Post</label>
                        </div> -->
                        <div class="col-12">
                            <label class="txtHead">
                                Url :
                            </label>
                            <label>
                            https://test.gamemarket.shop/login/<span style="color:blue;">9M8jKHT9guac56h235!$G52</span>/<span style="color:#327939;">korn</span>/<span style="color:red;">022ad66bd6fbc18571dba30310352407</span>
                               
                            </label>
                        </div>
                        <!-- <div class="col-12">
                            <label class="txtHead">
                                headers :
                            </label>
                            <label>
                                content-type application/json
                            </label>
                        </div> -->
                    </div>
                    <div class="form-group col-12">
                        <label set-lan="html:When a player places">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ตัวอย่าง Format URL รูปแบบ Auto Login</label>
                            <div class="col-12">
                            <img src="./API_files/md5.png" style="width: 90%; margin-left: 10%; border: 1px solid #ced4da;">
                        </div>
                        <!-- <div class="koh-tab-content col-12">
                            <div class="koh-tab-content-body">
                                <div class="koh-faq form-group">
                                    <div class="koh-faq-question form-group ex">
                                        <lable class="Point"><b style="color: #0C3175 !important;" set-lan="text:Example Request Body">Example Auto login URL</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                    </div>
                                    <div class="koh-faq-answer col-9">

                                        <pre><code id="352A" style="border-radius: 0.375rem;" class="hljs json">{
            <span class="hljs-attr">"$user_new"</span>= <span class="hljs-number">strtolower($user);</span>, *การแสดงผลของ user ต้องเป็นตัวเล็กเท่านั้นจีงต้องใช้ strtolower
            <span class="hljs-attr">"$str"</span>= <span class="hljs-number">"{{GameAccessKey}}:{{GameSecretKey}}:".$user_new;</span>,*ต้องนำ Access Key และ Secret Key จากข้อ 3.4 มารวมเป็นตัวแปล str
            <span class="hljs-attr">"$md5"</span>= <span class="hljs-number">md5($str);</span>, นำตัวแปล str มาใช้ดึงรหัส token 
            <span class="hljs-attr">"echo"</span> <span class="hljs-number">"{{url}}/api/v1/autologin/token/".$md5."/xxdfsdfsfdfsfd/fghfghfghfhg";</span> *และทำการประกาศตัวแปลทั้งหมด 

        *ผลลัพท์ที่ได้
        https://test.com/api/v1/autologin/token/b29fe908cc528df4bffb14bc31f793db/{{GameAccessKey}}/{{GameSecretKey}}

        }</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="form-group col-1"></div>
            
                </div>
            
                <div class="pb-5"></div>


                   
                
                
                <div class="btn-toolbar mb-12">
                <div class="col-md-6">
                    <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='callback.php'">
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
        $("#manu7 , #manu7 > a").addClass("active");
        $("#manu7 > div").css("display", "block");

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