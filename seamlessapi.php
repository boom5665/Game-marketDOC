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
                <h1><b style="color: #0C3175 !important;" set-lan="text:3. Seamless API">3. Seamless API</b></h1>
                <div class="pb-3"></div>
                <div class="col-12" id="tabOne">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.1 Introduction Seamless API">3.1
                            Introduction Seamless API</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:3.1 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ในส่วนนี้จะแสดงรายละเอียดของการใช้งานระบบ Seamless เพื่อไปใช้ในระบบคู่ธุรกิจภายนอก</label>
                    </div>
                </div>
                <div class="pb-3"></div>
                <div class="col-12" id="tabTwo">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.2 Workflow">3.2 Workflow</b>
                    </lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:3.2 Body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ข้อมูลเบื้องต้นแสดงการทำงานในการเรียกใช้ API ของระบบคู่ธุรกิจ เพื่อให้ระบบสามารถเรียกใช้ API ได้ภายใต้เงื่อนไขได้อย่างถูกต้อง</label>
                    </div>
                    <div class="col-12">
                        <img src="./API_files/SeamlessFlow.png" style="width: 80%; margin-left: 10%;">
                    </div>
                </div>
                <div class="pb-5"></div>


                <div class="col-12" id="tabThree">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.3 Setting">3.3 Setting</b></lable>
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
                            <label set-lan="html:3.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                2.1 เพื่อดึงGet ITEM Key </label>
                        </div>
                        <div class="col-12">
                            <img src="./API_files/2.1.png" style="width: 80%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <div class="col-12">
                            <label set-lan="html:3.2 You can">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                2.2 คลิกหน้า ITEM </label>
                        </div>
                        <div class="col-12">
                            <img src="./API_files/2.2.png" style="width: 80%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab35">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.4 tab35">3.4 Get Access Key and Secret Key</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.4.1 คลิกที่ปุ่มView เพื่อแสดง APi KEY</label>
                        <div class="col-12">
                            <img src="./API_files/3.4.1.png" style="width: 90%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            3.4.2 คัดลอก Access Key And Secret Key </label>
                        <div class="col-12">
                            <img src="./API_files/3.4.2.png" style="width: 90%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>

                <div class="col-12" id="tab36">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.5 tab36">3.5 Get ITEM Key</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">

                        <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.5.1 คลิกที่ปุ่ม View เพื่อแสดง API KEY</label>
                        <div class="col-12">
                            <img src="./API_files/3.5.1.png" style="width: 90%; margin-left: 10%;">
                        </div>
                        <div class="pb-5"></div>
                        <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            3.5.2 คัดลอก ITEM Key เพื่อนำไปใช้ต่อ API </label>
                        <div class="col-12">
                            <img src="./API_files/3.5.2.png" style="width: 90%; margin-left: 10%;">
                        </div>
                    </div>
                </div>
                <div class="pb-5"></div>
                <div class="col-12" id="tabFour">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.6 Check Member Verify">3.6 Check Member Verify</b></lable>
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

                                https://test-api.gamemarket.shop/api/v1/gameacc/check
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
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:Request Body">Request Body</b>
                        </lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable1">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th style="width: 20%;" set-lan="html:Parameter" class="txtCenter bRight">
                                            Parameter</th>
                                        <th style="width: 15%;" set-lan="html:Type" class="txtCenter bRight">Type
                                        </th>
                                        <th style="width: 40%;" set-lan="html:Description" class="bRight txtCenter">
                                            Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">secret_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Secret key form game</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">access_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Access key form game</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">track_user</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Name Accout User</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #0C3175 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="3_4A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"secret_key"</span>: <span class="hljs-string">"BhLvhGNKqc#5kD%Ebz5AnwSc"</span>,
    <span class="hljs-attr">"access_key"</span>: <span class="hljs-string">"hk9MjeMDS0iniiZ0h1jzP)te"</span>,
    <span class="hljs-attr">"track_user"</span>: <span class="hljs-string">"maytt"</span>
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
                                        <th style="width: 40%;" set-lan="html:Type" class="bRight txtCenter">Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">has_acc</td>
                                        <td class="bRight">String</td>
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
                        <lable><b style="color: #0C3175 !important;">Response Code</b></lable>
                    </div>
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #0C3175 !important;">Example Response
                                            Code</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="3_4B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"has_acc"</span>: <span class="hljs-string">"yes"</span>,
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"game account already exist"</span>
};
{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"has_acc"</span>: <span class="hljs-string">"no"</span>,
    <span class="hljs-attr">"mgs"</span>: <span class="hljs-string">"no game account"</span>
};
</code></pre>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:** Optional">** Optional for direct/re-direct link.</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label set-lan="html:You can add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            คุณสามารถเพิ่มค่าพารามิเตอร์ต่อท้ายในลิงค์ (&lottotype=) เพื่อเปลี่ยนเส้นทางให้ผู้เล่นไปยังหน้าแทง Game-market ประเภทนั้นๆ</label>
                    </div>
                    <div class="col-8">
                        <a href="https://service-api.prettygaming.asia/img/zip/game_icons.rar" style="float: right;"
                            class="Point" download=""><i class="fa fa-download" aria-hidden="true"></i>
                            <label class="Point">&nbsp;Download Icon</label></a>
                    </div>
                    <div class="form-group col-3"></div>
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Name</th>
                                        <th class="bRight txtCenter" style="width: 210px;">Value of parameter</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">หวยไทย</td>
                                        <td class="bRight txtCenter txtMid">thailotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยลาว(แทงแบบไทย)</td>
                                        <td class="bRight txtCenter txtMid">laoslotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย</td>
                                        <td class="bRight txtCenter txtMid">hanoylotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย(วีไอพี)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottovip</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวย ธกส.</td>
                                        <td class="bRight txtCenter txtMid">baaclotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวย ออมสิน</td>
                                        <td class="bRight txtCenter txtMid">gsblotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยปิงปอง</td>
                                        <td class="bRight txtCenter txtMid">pingponglotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยลาว(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">laoslotto_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยยี่กี</td>
                                        <td class="bRight txtCenter txtMid">yeekeelotto</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยมาเลย์</td>
                                        <td class="bRight txtCenter txtMid">malaylotto</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">hanoylotto_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอยวีไอพี(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottovip_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอยพิเศษ(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottospecial_set</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยมาเลย์(แบบชุด)</td>
                                        <td class="bRight txtCenter txtMid">malaylotto_set</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยฮานอย(พิเศษ)</td>
                                        <td class="bRight txtCenter txtMid">hanoylottospecial</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นเกาหลี</td>
                                        <td class="bRight txtCenter txtMid">stockkorea</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นจีน</td>
                                        <td class="bRight txtCenter txtMid">stockchina</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นดาวโจนส์</td>
                                        <td class="bRight txtCenter txtMid">stockdowjones</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นไต้หวัน</td>
                                        <td class="bRight txtCenter txtMid">stocktaiwan</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นอังกฤษ</td>
                                        <td class="bRight txtCenter txtMid">stockengland</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นอินเดีย</td>
                                        <td class="bRight txtCenter txtMid">stockindia</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นฮั่งเส็ง</td>
                                        <td class="bRight txtCenter txtMid">stockhangseng</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นอียิปต์</td>
                                        <td class="bRight txtCenter txtMid">stockegypt</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นนิเคอิ</td>
                                        <td class="bRight txtCenter txtMid">stocknikkei</td>

                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นสิงค์โปร</td>
                                        <td class="bRight txtCenter txtMid">stocksingapore</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นไทย</td>
                                        <td class="bRight txtCenter txtMid">stockthai</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นเยอรมัน</td>
                                        <td class="bRight txtCenter txtMid">stockgerman</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">หวยหุ้นรัสเซีย</td>
                                        <td class="bRight txtCenter txtMid">stockrussia</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;">Game direct link</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.8rem;word-break:break-all">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">thailotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=thailotto</label></label>
                                </div>
                            </div>
                            <label class="txtHead">thailotto
                                    :&nbsp;</label><label>https://test-front.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&amp;</label><label
                                    class="txtHead">header=off&amp;lottotype=thailotto</label>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=laoslotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylottovip</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">baaclotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=baaclotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">gsblotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=gsblotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">pingponglotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=pingponglotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=laoslotto_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">yeekeelotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=yeekeelotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=malaylotto</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylotto_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylottovip_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylottospecial_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=malaylotto_set</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=hanoylottospecial</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockkorea
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockkorea</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockchina
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockchina</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockdowjones
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockdowjones</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocktaiwan
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stocktaiwan</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockengland
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockengland</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockindia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockindia</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockhangseng
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockhangseng</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockegypt
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockegypt</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocknikkei
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stocknikkei</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocksingapore
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stocksingapore</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockthai
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockthai</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockgerman
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockgerman</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockrussia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&amp;header=off&amp;<label class="txtHead" style="margin-bottom:0px">lotto=stockrussia</label></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;">Language</b></lable>
                    </div>
                    <div class="form-group col-12">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            หมายเหตุ : กรุณาใช้รหัสตรงตามตัวอย่าง</label>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-2"></div>
                    <div class="form-group col-6">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th class="bRight txtCenter" style="width: 200px;">Language</th>
                                        <th class="txtCenter" style="width: 210px;">Value of parameter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtMid">English</td>
                                        <td class="txtCenter txtMid">EN</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtMid">Thai</td>
                                        <td class="txtCenter txtMid">TH</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.87rem;word-break:break-all;">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">English
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&amp;lotto=thailotto&<label class="txtHead" style="margin-bottom:0px">lang=en</label></label>
                                </div>
                            </div>
                            <label class="txtHead">English
                                    :&nbsp;</label><label>English : https://test-front.pirate168.com/token?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImN0eSI6IiJ9.eyJhZ2VudGlkIjoxODksImV4cCI6MTYyNzE3ODYzMCwiaWF0IjoxNjI2MzE0NjMwLCJyb2xlIjoibWVtYmVyMUBjb21wc2VhbWxlc3MiLCJzdWIiOmZhbHNlfQ.eLfAFfTnSD80OajqxH6yWmojd_m8MB7C0xxvahoWtPg&header=off&amp;</label><label
                                    class="txtHead">lottotype=thailotto&lang=EN</label>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">Thai
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&amp;lotto=laoslotto&<label class="txtHead" style="margin-bottom:0px">lang=th</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                                <label class="txtHead">Chinese Mandarin
                                    :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                    class="txtHead">lang=CNM</label>
                            </div>
                            <div class="col-12">
                                <label class="txtHead">Chinese Cantonese
                                    :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                    class="txtHead">lang=CNC</label>
                            </div>
                            <div class="col-12">
                                <label class="txtHead">Korean
                                    :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                    class="txtHead">lang=KOR</label>
                            </div>
                            <div class="col-12">
                                <label class="txtHead">Vietnam
                                    :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;</label><label
                                    class="txtHead">lang=VT</label>
                            </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;">Signout re-direct optional link:</b></lable>
                    </div>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="divBox" style="font-size: 0.681rem;word-break:break-all;margin-left:0">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">thailotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=thailotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                            <label class="txtHead">Baccarat
                                    :&nbsp;</label><label>http://m.hippo168.com/?tkuuid=5ebd1f57dc7cdc7900125a65&amp;game=BAC&amp;url=</label><label
                                    class="txtHead">input your link here(full link with https://)</label>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=laoslotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylottovip&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">baaclotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=baaclotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">gsblotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=gsblotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">pingponglotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=pingponglotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">laoslotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=laoslotto_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">yeekeelotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=yeekeelotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=malaylotto&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylotto_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottovip_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylottovip_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylottospecial_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">malaylotto_set
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=malaylotto_set&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">hanoylottospecial
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=hanoylottospecial&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockkorea
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockkorea&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockchina
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockchina&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockdowjones
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockdowjones&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocktaiwan
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stocktaiwan&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockengland
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockengland&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockindia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockindia&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockhangseng
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockhangseng&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockegypt
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockegypt&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocknikkei
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stocknikkei&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stocksingapore
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stocksingapore&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockthai
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockthai&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockgerman
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockgerman&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12" style="padding-right:0px;padding-left: 2px;"><label class="txtHead">stockrussia
                                        :&nbsp;</label><label style="margin-bottom:0px">https://test-front.pirate168.com/token?token=jd_m8MB7C0xxvahoWtPg&header=off&lotto=stockrussia&url=<label class="txtHead" style="margin-bottom:0px">input your link here(full link with https://)</label></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="pb-5"></div>


                <div class="col-12" id="tabFive">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.7 Send Otp Virify">3.7 Send Otp Virify</b></lable>
                </div>
                <div class="pb-3"></div>
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

                            https://test-api.gamemarket.shop/api/v1/otp/send-request
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
                <!-- <div class="col-12">
                    <label set-lan="html:*Please keep">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        *โปรดเก็บข้อมูล ”Send Otp Virify” <b style="color: red;">ทั้งหมดไว้เป็นความลับ</b>.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
                </div> -->
                <lable><b style="color: #0C3175 !important;"></b></lable>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-12">
                        <label set-lan="html:When a player">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ส่ง massage otp</label>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">secret_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Secret key form game</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">access_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Access key form game</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">phone</td>
                                        <td class="bRight">Number</td>
                                        <td class="bRight">Number Phone</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #0C3175 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"access_key"</span>: <span class="hljs-string">"hk9MjeMDS0iniiZ0h1jzP)te"</span>,
    <span class="hljs-attr">"secret_key"</span>: <span class="hljs-string">"MRTZ7CtmJepf3(Vygjqydm)#"</span>,
    <span class="hljs-attr">"track_user"</span>: <span class="hljs-string">"may"</span>,
    <span class="hljs-attr">"phone"</span>: <span class="hljs-string">"0926565905"</span>
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:Request Body">Response Body</b>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="bRight">data</td>
                                        <td class="bRight">Object</td>
                                        <td>Object response.</td>
                                    </tr> -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group col-12 ex">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:Request Code">Response Code</b>
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
                                        <th set-lan="html:Type" class="bRight txtCenter">Description
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight">0</td>
                                        <td class="bRight">Success</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1000</td>
                                        <td class="bRight">invalid data type</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1408</td>
                                        <td class="bRight">data not complete</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1409</td>
                                        <td class="bRight">key not match</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1601</td>
                                        <td class="bRight">game account already existed</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1410</td>
                                        <td class="bRight">invalid set request</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1411</td>
                                        <td class="bRight">invalid send otp</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #0C3175 !important;" set-lan="text:Example Request Body">Example Request Body OTP Success</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
        <span class="hljs-attr">"code"</span>: <span class="hljs-string">0</span>,
        <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"send OTP success"</span>,
        <span class="hljs-attr">"verify_link"</span>: <span class="hljs-string">"https://dev-api-gmk.pirate168.com/d4620902-49dc-441b-86f6-a1958dfbc3ec"</span>
            * Link สำหรับ ให้ User Modify Otp
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #0C3175 !important;" set-lan="text:Example Request Body">Example Request Body OTP error</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
        <span class="hljs-attr">"code"</span>: <span class="hljs-string">1409</span>,
        <span class="hljs-attr">"msg"</span>:{
            <span class="hljs-attr">"en"</span>: <span class="hljs-string">"key not match"</span>,
            <span class="hljs-attr">"th"</span>: <span class="hljs-string">"คีย์ไม่ถูกต้อง"</span>
        }
      
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-3"></div>
               

                <div class="col-12" id="tabSeven">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.5.2 UserPlaceBet">3.8
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
                <div class="col-12" id="tabSix" style="margin-left: 10px;">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:3.5.1 GetUserBalance">3.9
                            dropitem</b></lable>
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

                                https://test-api.gamemarket.shop/api/v1/gamestore/dropitem
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
                                        <td class="bRight">code</td>
                                        <td class="bRight">Number</td>
                                        <td>Result Code Reference.</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">secret_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Secret key form game</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">access_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Access key form game</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">track_user</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Name Accout User</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">item_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Table Item key form Gamemarket </td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">track_id</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Unit Id Drop Item Generate Form Partner</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="koh-tab-content col-12">
                        <div class="koh-tab-content-body">
                            <div class="koh-faq form-group">
                                <div class="koh-faq-question form-group ex">
                                    <lable class="Point"><b style="color: #0C3175 !important;" set-lan="text:Example Request Body">Example Request Body</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                </div>
                                <div class="koh-faq-answer col-9">
                                    <pre><code id="351A" style="border-radius: 0.375rem;" class="hljs json">{
    
        <span class="hljs-attr">"secret_key"</span>: <span class="hljs-string">"hk9MjeMDS0iniiZ0h1jzP)te"</span>,
        <span class="hljs-attr">"access_key"</span>: <span class="hljs-string">"MRTZ7CtmJepf3(Vygjqydm)#"</span>,
        <span class="hljs-attr">"track_user"</span>: <span class="hljs-string">"may"</span>,
        <span class="hljs-attr">"item_key"</span>: <span class="hljs-string">""</span>,
        <span class="hljs-attr">"track_id"</span>: <span class="hljs-string">""</span>,
    
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
                                        <td>item not found</td>
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
                                        <td>can not add item</td>
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
                                            Respond Code Dropitem Success</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
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
                                            Respond Code Dropitem Error</b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
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
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='version.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='responsecode.php'">
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