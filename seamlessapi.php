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
                <h1><b style="color: #0C3175 !important;" set-lan="text:4. Seamless API">4. Seamless API</b></h1>
                <div class="pb-3"></div>
                <div class="col-12" id="tabOne">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:4.1 Introduction Seamless API">4.1
                            Introduction Seamless API</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:4.1 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ในส่วนนี้จะแสดงรายละเอียดของการใช้งานระบบ Seamless </label>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:4.2 Workflow">4.2 Workflow</b>
                    </lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:4.2 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ข้อมูลเบื้องต้นแสดงการทำงานในการเรียกใช้ API ของระบบคู่ธุรกิจ เพื่อให้ระบบสามารถเรียกใช้ API ได้ภายใต้เงื่อนไขได้อย่างถูกต้อง</label>
                    </div>
                    <div class="col-12">
                        <img src="./API_files/SeamlessFlow.png" style="width: 80%; margin-left: 10%;">
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabThree">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:4.3 Setting">4.3 Setting</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:0. *">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            *หากคุณมีบัญชีหลัก โปรดสร้างบัญชีตัวแทน API ภายใต้บัญชีหลักของคุณและเข้าสู่ระบบด้วยบัญชีตัวแทน API ที่สร้างขึ้นก่อน แล้วทำตามขั้นตอนการตั้งค่า ดังนี้
                        </label>
                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.เข้าสู่ระบบ</label>
                        <div class="col-12">
                            <img src="./API_files/Login001.png" style="width: 30%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            2.คลิกที่เมนูเกม</label>
                        <div class="col-12">
                            <img src="./API_files/Account002.png" style="width: 30%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <div class="col-12">
                            <label set-lan="html:4.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                2.1 สร้าง Item Game เตรียมไว้สำหรับ Drop Item ให้ User </label>
                        </div>
                        <div class="col-12">
                            <img src="./API_files/2.1.png" style="width: 80%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <div class="col-12">
                            <label set-lan="html:4.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                2.2 ตัวอย่าง List Item </label>
                        </div>
                        <div class="col-12">
                            <img src="./API_files/2.2.png" style="width: 80%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            3.คลิกที่เมนู Withdraw</label>
                        <div class="col-12">
                            <img src="./API_files/S3.png" style="width: 80%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <div class="col-12">
                            <label set-lan="html:4.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                3.1 ใส่ ENDPOINT API สำหรับให้ USER ถอนเงิน  </label>
                        </div>
                        <div class="col-12">
                            <img src="./API_files/S3.1.png" style="width: 80%; margin-left: 10%;">
                        </div>
                        
                    </div>
                </div>

                <div class="pb-5"></div>

                <div class="col-12" id="tab35">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:4.4 tab35">4.4 Get Access Key and Secret Key</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.4.1 คลิกที่หน้า Partner </label>
                        <div class="col-12">
                            <img src="./API_files/4.4.1.png" style="width: 90%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            4.4.2  ที่หน้า Partner คลิกที่ปุ่ม View เพื่อแสดง APi KEY</label>

                        <div class="col-12">
                            <img src="./API_files/4.4.2.png" style="width: 90%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            4.4.3 คัดลอก Access Key And Secret Key </label>
                        <div class="col-12">
                            <img src="./API_files/4.4.3.png" style="width: 90%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab45">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:4.5 tab45">4.5 Get GAME Key</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">

                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.5.1 คลิกที่หน้า GAME </label>
                        <div class="col-12">
                            <img src="./API_files/4.5.1.png" style="width: 90%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            4.5.2 ที่หน้า GAME คลิกที่ปุ่ม View เพื่อแสดง API KEY </label>
                        <div class="col-12">
                            <img src="./API_files/4.5.2.png" style="width: 90%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            4.5.3 คัดลอก GAME Key เพื่อนำไปใช้ต่อ API </label>
                        <div class="col-12">
                            <img src="./API_files/4.5.3.png" style="width: 90%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>
                <div class="pb-5"></div>
                <div class="col-12" id="tab36">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:4.5 tab36">4.6 Get Item Key</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">

                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.6.1 คลิกที่หน้า Item </label>
                        <div class="col-12">
                            <img src="./API_files/4.6.1.png" style="width: 90%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            4.6.2 ที่หน้า Item คลิกที่ปุ่ม View เพื่อแสดง API KEY </label>
                      
                        <div class="col-12">
                            <img src="./API_files/4.6.2.png" style="width: 90%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            4.6.2 คัดลอก Item Key เพื่อนำไปใช้ต่อ API </label>
                        <div class="col-12">
                            <img src="./API_files/4.6.2.png" style="width: 90%; margin-left: 10%;">
                        </div>
                        
                    </div>
                </div>
           

                    <div class="pb-5"></div>
                    <div class="col-12" id="tabSeven">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:4.5.2 UserPlaceBet">4.7
                                Auto Login URL</b></lable>
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
                                    https://test-api.gamemarket.shop/autologin/token/
                                    <span style="color:red;">022ad66bd6fbc18571dba30310352407</span>/<span style="color:blue;">hk9MjeMDS0iniiZ0h1jzP)te</span>/<span style="color:blue;">MRTZ7CtmJepf3(Vygjqydm)#2</span>
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
            <span class="hljs-attr">"$str"</span>= <span class="hljs-number">"{{GameAccessKey}}:{{GameSecretKey}}:".$user_new;</span>,*ต้องนำ Access Key และ Secret Key จากข้อ 4.4 มารวมเป็นตัวแปล str
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
                    <div class="col-12" id="tabSix" style="margin-left: 10px;">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:4.5.1 GetUserBalance">4.7
                                dropItem</b></lable>
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

                                    https://test-api.gamemarket.shop/api/v1/gamestore/dropItem
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
                        </div>
                        <div class="form-group col-12">
                            <label set-lan="html:When a player">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                เพิ่ม Item ให้ User ใน Gamemarket</label>
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
                                            <td class="bRight">access_key</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Access key form game</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">username</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Name Accout User</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">game_key</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">game key form Gamemarket Document 4.5</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">Item_key</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Item key form Gamemarket Document 4.6</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">track_id</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Unit Id Drop Item Generate Form Partner</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight" style="font-weight: 900;">token</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">genarate token format md5 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <label set-lan="html:When a player places">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                ตัวอย่าง Generate Token</label>
                            <div class="col-12">
                                <img src="./API_files/md2.png" style="width: 90%; margin-left: 10%; border: 1px solid #ced4da;">
                            </div>
                        <div class="koh-tab-content col-12">
                            <div class="koh-tab-content-body">
                                <div class="koh-faq form-group">
                                    <div class="koh-faq-question form-group ex">
                                        <lable class="Point"><b style="color: #0C3175 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                    </div>
                                    <div class="koh-faq-answer col-9">
                                        <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    
        <span class="hljs-attr">"access_key"</span>: <span class="hljs-string">"9M8jKHT9g@ba()5+-!$G52"</span>,
        <span class="hljs-attr">"username"</span>: <span class="hljs-string">"korn"</span>,
        <span class="hljs-attr">"game_key"</span>: <span class="hljs-string">"c381ed72-f21a-4314-9c5a-7eb741db86c1"</span>,
        <span class="hljs-attr">"Item_key"</span>: <span class="hljs-string">"13a394dc-d2ba-4ff2-b96f-93329e25e205"</span>,
        <span class="hljs-attr">"track_id"</span>: <span class="hljs-string">"tdfbvc056"</span>,
        <span class="hljs-attr">"token"</span>: <span class="hljs-string">"cc01a5ea55ffddf724a0e45cba1a1410"</span>,
    
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
                                            <td>Success</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">1000</td>
                                            <td>invalid data type</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">1409</td>
                                            <td>key not match</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">1155</td>
                                            <td>Item not found</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">1602</td>
                                            <td>no game account</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">1604</td>
                                            <td>track_id already exist</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">1620</td>
                                            <td>can not add Item</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">1651</td>
                                            <td>invalid game key</td>
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
                                                Respond Code DropItem Success</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
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
                        <div class="koh-tab-content col-12">
                            <div class="koh-tab-content-body">
                                <div class="koh-faq form-group">
                                    <div class="koh-faq-question form-group ex">
                                        <lable class="Point"><b style="color: #0C3175 !important;">Example Service
                                                Respond Code DropItem Error</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                    </div>
                                    <div class="koh-faq-answer col-9">
                                        <pre><code id="351B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">1604</span>,
    <span class="hljs-attr">"msg"</span>: {
        <span class="hljs-attr">"en"</span>: <span class="hljs-number">track_id already exist</span>,
        <span class="hljs-attr">"th"</span>: <span class="hljs-number">track_id already exist</span>
    }
}</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5"></div>


                    <div class="btn-toolbar mb-12">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='addItem.php'">
                                <lan set-lan="html:Back">Back</lan>
                            </button>
                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='optionchannel.php'">
                                <lan set-lan="html:Next">Next</lan>
                            </button>
                        </div>
                    </div>
                    <!-- </div> -->

                </div>
    </main>
</div>

<?php include 'layouts/footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#manu4 , #manu4 > a").addClass("active");
        $("#manu4 > div").css("display", "block");

        $(this).on("click", ".koh-faq-question", function() {
            $(this).parent().find(".koh-faq-answer").slideToggle();
            $(this).find(".fa").toggleClass('active');
        });

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);

        var page = 4;
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>