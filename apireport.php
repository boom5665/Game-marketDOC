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
                <div class="col-12" id="tabOne">
                    <lable><b style="color: #0C3175 !important;" set-lan="text:5.1 UserPlaceBet">5.1
                            Get Login Token</b></lable>
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
                                https://test-api.gamemarket.shop/api/v1/user/login/admin
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
                        <!-- <div style="font-size:12px; color:red;">* Url มาจาก Withdraw ในหน้า Setting ที่หัวข้อ 3.1</div> -->
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
                                        <td class="bRight">password</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Password</td>
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
        <span class="hljs-attr">"username"</span>: <span class="hljs-string">"partner"</span>,
        <span class="hljs-attr">"password"</span>: <span class="hljs-string">"Password@1"</span>,
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
                                    <tr>
                                        <td class="bRight">token</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight">Token </td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="bRight">unique_id</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">id</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">phone_number</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">email</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">first_name</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">last_name</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">password</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">access_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">secret_key</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">role</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">game_ctrl</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">top_partner</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">bank_name</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">account_number</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>

                                    <tr>
                                        <td class="bRight">created_at</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">updated_at</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">created_at</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">withdraw</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">partner_pt</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">Game</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">GameMemberAcc</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">Transaction</td>
                                        <td class="bRight">String</td>
                                        <td class="bRight"></td>
                                    </tr> -->
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
                                    <tr>
                                        <td class="bRight">1000</td>
                                        <td>invalid data type</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1180</td>
                                        <td>invalid login</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1640</td>
                                        <td>invalid login admin role</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1640</td>
                                        <td>invalid login admin role</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight">1129</td>
                                        <td>can't create token</td>
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
        <span class="hljs-attr">"code"</span>: <span class="hljs-string">"0"</span>,
        <span class="hljs-attr">"msg"</span>: <span class="hljs-string">"success"</span>,
        <span class="hljs-attr">"token"</span>: <span class="hljs-string">"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2MzY5NzMzMTMsImlkIjoyLCJyb2xlIjoicGFydG5lciJ9.PT0M6uIOIiRFdwWNIHz4jR8x8SYJMl26WfTGPYwPzAE"</span>,
        <span class="hljs-attr">"user"</span>:{
            <span class="hljs-attr">"unique_id"</span>: <span class="hljs-string">"2021-09-21@05:32:28"</span>,
            <span class="hljs-attr">"id"</span>: <span class="hljs-string">"92e17ce5dffc720124fdf58db0b820a5"</span>,
            <span class="hljs-attr">"phone_number"</span>: ""</span>,
            <span class="hljs-attr">"email"</span>: <span class="hljs-string">""</span>,
            <span class="hljs-attr">"first_name"</span>: <span class="hljs-string">"partner"</span>,
            <span class="hljs-attr">"last_name"</span>: <span class="hljs-string">"partner"</span>,
            <span class="hljs-attr">"user_name"</span>: <span class="hljs-string">"partner1"</span>,
            <span class="hljs-attr">"password"</span>: <span class="hljs-string">"zPBKlquuzjsheN3MERFYBXcAc8Ko__f0OyQ="</span>,
            <span class="hljs-attr">"access_key"</span>: <span class="hljs-string">"9M8jKHT9g@*.()_+-!$G52"</span>,
            <span class="hljs-attr">"secret_key"</span>: <span class="hljs-string">"cvOzH*g7Dgc5wTwQBertB3ta"</span>,
            <span class="hljs-attr">"role"</span>: <span class="hljs-string">"partner"</span>,
            <span class="hljs-attr">"game_ctrl"</span>: <span class="hljs-string">[]</span>,
            <span class="hljs-attr">"top_partner"</span><span class="hljs-string">: 0</span>,
            <span class="hljs-attr">"bank_name"</span>: <span class="hljs-string">""</span>,
            <span class="hljs-attr">"account_number": <span class="hljs-string">""</span>,
            <span class="hljs-attr">"created_at"</span>: <span class="hljs-string">"2021-11-03T17:16:36.604607+07:00"</span>,
            <span class="hljs-attr">"updated_at"</span>: <span class="hljs-string">"2021-11-12T16:47:27.502529+07:00"</span>,
            <span class="hljs-attr">"withdraw"</span>: <span class="hljs-string">"https://www.google.com/123456789123"</span>,
            <span class="hljs-attr">"partner_pt"</span>: <span class="hljs-string">95</span>,
            <span class="hljs-attr">"Game"</span>: <span class="hljs-string">null</span>,
            <span class="hljs-attr">"GameMemberAcc"</span>: <span class="hljs-string">null</span>,
            <span class="hljs-attr">"Transaction"</span>: <span class="hljs-string">null</span>
        },
}</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pb-5"></div>
                <div style="background: #f2f3f4;  margin-top: 1%; border-radius: .375rem;">
                    <div class="col-12" id="tabTwo">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:3.5.2 UserPlaceBet">5.2
                                Get Winlose Report</b></lable>
                    </div>
                    <div class="pb-3"></div>
                    <div class="btn-toolbar mb-3" role="toolbar">
                        <div class="divBox  col-8">
                            <div class="col-12">
                                <label class="txtHead">Method : </label>
                                <label>Post</label>
                            </div>
                            <div class="col-12">
                                <label class="txtHead">
                                    Url :
                                </label>
                                <label>
                                    https://test-api.gamemarket.shop/api/v1/report/winlosev2
                                </label>

                            </div>


                        </div>

                        <div class="divBox  col-8">
                            <div class="col-12">
                                <label class="txtHead">
                                    headers
                                </label>

                            </div>
                            <div class="col-12">
                                <label class="">
                                    <label>
                                        <span class="txtHead">Authorization:</span> Bearer {token}
                                    </label>
                                </label>
                            </div>
                            <div class="col-12">
                                <label>
                                    content-type: application/json
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
                                            <td class="bRight">keyword</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Keyword</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">date_start</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Date_start <span style=" COLOR:RED;">2021-11-15</span></td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">date_end</td>
                                            <td class="bRight">String</td>
                                            <td class="bRight">Date_end <span style=" COLOR:RED;">2021-11-15</span></td>
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
        <span class="hljs-attr">"keyword"</span>: <span class="hljs-string">"korn"</span>,
        <span class="hljs-attr">"date_start"</span>: <span class="hljs-string">"2021-11-15"</span>,
        <span class="hljs-attr">"date_end"</span>: <span class="hljs-string">"2021-11-15"</span>,
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
                                        <tr>
                                            <td class="bRight">1000</td>
                                            <td>invalid data type</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">1432</td>
                                            <td>user not found</td>
                                        </tr>
                                        <tr>
                                            <td class="bRight">1640</td>
                                            <td>invalid login admin role</td>
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
    <span class="hljs-attr">"result": [
    {
        <span class="hljs-attr">"username"</span>: <span class="hljs-number">"partner1"</span>,
        <span class="hljs-attr">"item_drop_amount"</span>: <span class="hljs-number">49800</span>,
        <span class="hljs-attr">"item_sale_amount"</span>:<span class="hljs-number"> 10000</span>,
        <span class="hljs-attr">"item_store_amount"</span>: <span class="hljs-number">39800</span>,
        <span class="hljs-attr">"withdraw"</span>: <span class="hljs-number">2300</span>,
        <span class="hljs-attr">"outstanding"</span>: <span class="hljs-number">7700</span>,
        <span class="hljs-attr">"charge_point"</span>: <span class="hljs-number">345</span>,
        <span class="hljs-attr">"gamemarket_amount"</span>: <span class="hljs-number">57.5</span>,
        <span class="hljs-attr">"share_amount"</span>: <span class="hljs-number">115</span>,
        <span class="hljs-attr">"wiwallet_amount"</span>: <span class="hljs-number">57.5</span>,
        <span class="hljs-attr">"receive_amount"</span>: <span class="hljs-number">1840</span>
    }
  ]
}</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="pb-5"></div>
                    <div style="background: #f2f3f4;  margin-top: 1%; border-radius: .375rem;">
                        <div class="col-12" id="tabThree">
                            <lable><b style="color: #0C3175 !important;" set-lan="text:5.3 UserPlaceBet">5.3
                                    Get Game Report</b></lable>
                        </div>
                        <div class="pb-3"></div>
                        <div class="btn-toolbar mb-3" role="toolbar">
                            <div class="divBox  col-8">
                                <div class="col-12">
                                    <label class="txtHead">Method : </label>
                                    <label>Post</label>
                                </div>
                                <div class="col-12">
                                    <label class="txtHead">
                                        Url :
                                    </label>
                                    <label>
                                        https://test-api.gamemarket.shop/api/v1/report/games
                                    </label>
                                </div>
                            </div>

                            <div class="divBox  col-8">
                                <div class="col-12">
                                    <label class="txtHead">
                                        headers
                                    </label>

                                </div>
                                <div class="col-12">
                                    <label class="">
                                        <label>
                                            <span class="txtHead">Authorization:</span> Bearer {token}
                                        </label>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <label>
                                        content-type: application/json
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
                                                <td class="bRight">date_start</td>
                                                <td class="bRight">String</td>
                                                <td class="bRight">Date_start <span style=" COLOR:RED;">2021-11-15</span></td>
                                            </tr>
                                            <tr>
                                                <td class="bRight">date_end</td>
                                                <td class="bRight">String</td>
                                                <td class="bRight">Date_end <span style=" COLOR:RED;">2021-11-15</span></td>
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
    
        <span class="hljs-attr">"keyword"</span>: <span class="hljs-string">"korn"</span>,
        <span class="hljs-attr">"date_start"</span>: <span class="hljs-string">"2021-11-15"</span>,
        <span class="hljs-attr">"date_end"</span>: <span class="hljs-string">"2021-11-15"</span>,
    
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
                                            <tr>
                                                <td class="bRight">1432</td>
                                                <td>user not found</td>
                                            </tr>
                                            <tr>
                                                <td class="bRight">1640</td>
                                                <td>invalid login admin role</td>
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
    <span class="hljs-attr">"result": [
    {
      <span class="hljs-attr">"game_id"</span>: <span class="hljs-number">""</span>,
      <span class="hljs-attr">"game_name"</span>: <span class="hljs-number">"dota2"</span>,
      <span class="hljs-attr">"total_item_price"</span>: <span class="hljs-number">49800</span>,
      <span class="hljs-attr">"total_item_sale"</span>: <span class="hljs-number">10000</span>,
      <span class="hljs-attr">"total_pt_system"</span>: <span class="hljs-number">500</span>,
      <span class="hljs-attr">"total_pt": <span class="hljs-number">9500</span>,
      <span class="hljs-attr">"outstanding_game"</span>: <span class="hljs-number">39800</span>
    },
}
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
                                                    Respond Code </b><i class="fa fa-chevron-down" aria-hidden="true" style="margin-left: 2%; font-size: 1rem;"></i></lable>
                                        </div>
                                        <div class="koh-faq-answer col-9">
                                            <pre><code id="351B" style="border-radius: 0.375rem;" class="hljs json">{
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">success</span>
    <span class="hljs-attr">"result": [
    {
      <span class="hljs-attr">"game_id"</span>:  <span class="hljs-number">""</span>,
      <span class="hljs-attr">"game_name"</span>:  <span class="hljs-number">"LEAGUE"</span>,
      <span class="hljs-attr">"total_item_price"</span>: <span class="hljs-number"> 0</span>,
      <span class="hljs-attr">"total_item_sale"</span>:  <span class="hljs-number">0</span>,
      <span class="hljs-attr">"total_pt_system"</span>:  <span class="hljs-number">0</span>,
      <span class="hljs-attr">"total_pt"</span>:  <span class="hljs-number">0</span>,
      <span class="hljs-attr">"outstanding_game"</span>:  <span class="hljs-number">0</span>
    },
}
}</code></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pb-5"></div>
                        <div class="pb-5"></div>
                        <div style="background: #f2f3f4;  margin-top: 1%; border-radius: .375rem;">
                            <div class="col-12" id="tabFour">
                                <lable><b style="color: #0C3175 !important;" set-lan="text:4 UserPlaceBet">5.4
                                        Get Item Report</b></lable>
                            </div>
                            <div class="pb-3"></div>
                            <div class="btn-toolbar mb-3" role="toolbar">
                                <div class="divBox  col-8">
                                    <div class="col-12">
                                        <label class="txtHead">Method : </label>
                                        <label>Post</label>
                                    </div>
                                    <div class="col-12">
                                        <label class="txtHead">
                                            Url :
                                        </label>
                                        <label>
                                            https://test-api.gamemarket.shop/api/v1/report/items
                                        </label>

                                    </div>


                                </div>

                                <div class="divBox  col-8">
                                    <div class="col-12">
                                        <label class="txtHead">
                                            headers
                                        </label>

                                    </div>
                                    <div class="col-12">
                                        <label class="">
                                            <label>
                                                <span class="txtHead">Authorization:</span> Bearer {token}
                                            </label>
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <label>
                                            content-type: application/json
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
                                                    <td class="bRight">date_start</td>
                                                    <td class="bRight">String</td>
                                                    <td class="bRight">Date_start <span style=" COLOR:RED;">2021-11-15</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="bRight">date_end</td>
                                                    <td class="bRight">String</td>
                                                    <td class="bRight">Date_end <span style=" COLOR:RED;">2021-11-15</span></td>
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
    
        <span class="hljs-attr">"keyword"</span>: <span class="hljs-string">"korn"</span>,
        <span class="hljs-attr">"date_start"</span>: <span class="hljs-string">"2021-11-15"</span>,
        <span class="hljs-attr">"date_end"</span>: <span class="hljs-string">"2021-11-15"</span>,
        <span class="hljs-attr">"limit"</span>: <span class="hljs-string">"2021-11-15"</span>,
        <span class="hljs-attr">"page"</span>: <span class="hljs-string">"2021-11-15"</span>,
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
                                                <tr>
                                                    <td class="bRight">1432</td>
                                                    <td>user not found</td>
                                                </tr>
                                                <tr>
                                                    <td class="bRight">1640</td>
                                                    <td>invalid login admin role</td>
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
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">success</span>,
    <span class="hljs-attr">"page_total"</span>: <span class="hljs-number">success</span>,
    <span class="hljs-attr">"sumWinLoseReportItem"</span>: {
        <span class="hljs-attr">"num_row"</span>: <span class="hljs-attr">8</span>,
        <span class="hljs-attr">"sum_sale_amount"</span>: <span class="hljs-attr">10000</span>,
        <span class="hljs-attr">"sum_sale_num"</span>: <span class="hljs-attr">4</span>,
        <span class="hljs-attr">"sum_store_amount"</span>: <span class="hljs-attr">49800</span>,
        <span class="hljs-attr">"sum_store_num"</span>: <span class="hljs-attr">23</span>,
        <span class="hljs-attr">"sum_outstanding_item_amount"</span>: <span class="hljs-attr">39800</span>,
        <span class="hljs-attr">"sum_outstanding_item_num"</span>: <span class="hljs-attr">19</span>
    },
    <span class="hljs-attr">"winLoseReportItem"</span>: [
        {
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-attr">1</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-attr">"Town Portal Scroll"</span>,
            <span class="hljs-attr">"game_id"</span>: <span class="hljs-attr">1</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-attr">"dota2"</span>,
            <span class="hljs-attr">"item_store_num":</span> <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_store_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_partner"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_system"</span>: <span class="hljs-attr">0</span>
        },
        {
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-attr">2</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-attr">"xsticky-webfoot_"</span>,
            <span class="hljs-attr">"game_id"</span>: <span class="hljs-attr">1</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-attr">"dota2"</span>,
            <span class="hljs-attr">"item_store_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_store_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_partner"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_system"</span>: <span class="hljs-attr">0</span>
        },
        {
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-attr">3</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-attr">"Iron Branch"</span>,
            <span class="hljs-attr">"game_id"</span>: <span class="hljs-attr">1</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-attr">"dota2"</span>,
            <span class="hljs-attr">"item_store_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_store_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_amount"</span>:<span class="hljs-attr"> 0</span>,
            <span class="hljs-attr">"outstanding_item_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_partner"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_system"</span>: <span class="hljs-attr">0</span>
        },
        {
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-attr">4</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-attr">"Ring of Basilius"</span>,
            <span class="hljs-attr">"game_id"</span>: <span class="hljs-attr">1</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-attr">"dota2"</span>,
            <span class="hljs-attr">"item_store_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_store_amount"</span>:<span class="hljs-attr"> 0</span>,
            <span class="hljs-attr">"item_sale_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_partner"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_system"</span>: <span class="hljs-attr">0</span>
        },
        {
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-attr">5</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-attr">"Urn of Shadows"</span>,
            <span class="hljs-attr">"game_id"</span>: <span class="hljs-attr">1</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-attr">"dota2"</span>,
            <span class="hljs-attr">"item_store_num"</span>: <span class="hljs-attr">11</span>,
            <span class="hljs-attr">"item_store_amount"</span>: <span class="hljs-attr">19800</span>,
            <span class="hljs-attr">"item_sale_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_amount"</span>:<span class="hljs-attr"> 0</span>,
            <span class="hljs-attr">"outstanding_item_num": <span class="hljs-attr">11</span>,
            <span class="hljs-attr">"outstanding_item_amount"</span>: <span class="hljs-attr">19800</span>,
            <span class="hljs-attr">"pt_partner"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_system"</span>: <span class="hljs-attr">0</span>
        },
        {
            <span class="hljs-attr">"item_id"</span>:<span class="hljs-attr"> 6</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-attr">"Ogre Axe"</span>,
            <span class="hljs-attr">"game_id"</span>:<span class="hljs-attr"> 1</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-attr">"dota2"</span>,
            <span class="hljs-attr">"item_store_num"</span>: <span class="hljs-attr">12</span>,
            <span class="hljs-attr">"item_store_amount"</span>: <span class="hljs-attr">30000</span>,
            <span class="hljs-attr">"item_sale_num"</span>: <span class="hljs-attr">4</span>,
            <span class="hljs-attr">"item_sale_amount"</span>: <span class="hljs-attr">10000</span>,
            <span class="hljs-attr">"outstanding_item_num"</span>: <span class="hljs-attr">8</span>,
            <span class="hljs-attr">"outstanding_item_amount"</span>:<span class="hljs-attr"> 20000</span>,
            <span class="hljs-attr">"pt_partner"</span>: <span class="hljs-attr">9500</span>,
            <span class="hljs-attr">"pt_system"</span>: <span class="hljs-attr">500</span>
        },
        {
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-attr">7</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-attr">"Ring of Regen"</span>,
            <span class="hljs-attr">"game_id"</span>: <span class="hljs-attr">2</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-attr">"LEAGUE"</span>,
            <span class="hljs-attr">"item_store_num"</span>:<span class="hljs-attr"> 0</span>,
            <span class="hljs-attr">"item_store_amount"</span>:<span class="hljs-attr"> 0</span>,
            <span class="hljs-attr">"item_sale_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_partner"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_system"</span>:<span class="hljs-attr"> 0</span>
        },
        {
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-attr">8</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-attr">"Hyperstone"</span>,
            <span class="hljs-attr">"game_id"</span>:<span class="hljs-attr"> 2</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-attr">"LEAGUE"</span>,
            <span class="hljs-attr">"item_store_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_store_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"item_sale_amount"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_num"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"outstanding_item_amount"</span>:<span class="hljs-attr"> 0</span>,
            <span class="hljs-attr">"pt_partner"</span>: <span class="hljs-attr">0</span>,
            <span class="hljs-attr">"pt_system"</span>:<span class="hljs-attr"> 0</span>
        }
    ]
}</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pb-5"></div>

                            <div class="pb-5"></div>
                            <div style="background: #f2f3f4;  margin-top: 1%; border-radius: .375rem;">
                                <div class="col-12" id="tabFive">
                                    <lable><b style="color: #0C3175 !important;" set-lan="text:4 UserPlaceBet">5.5
                                            Transaction</b></lable>
                                </div>
                                <div class="pb-3"></div>
                                <div class="btn-toolbar mb-3" role="toolbar">
                                    <div class="divBox  col-8">
                                        <div class="col-12">
                                            <label class="txtHead">Method : </label>
                                            <label>Post</label>
                                        </div>
                                        <div class="col-12">
                                            <label class="txtHead">
                                                Url :
                                            </label>
                                            <label>
                                                https://test-api.gamemarket.shop/api/v1/transaction/history
                                            </label>

                                        </div>


                                    </div>

                                    <div class="divBox  col-8">
                                        <div class="col-12">
                                            <label class="txtHead">
                                                headers
                                            </label>

                                        </div>
                                        <div class="col-12">
                                            <label class="">
                                                <label>
                                                    <span class="txtHead">Authorization:</span> Bearer {token}
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <label>
                                                content-type: application/json
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
                                                        <td class="bRight">start_date</td>
                                                        <td class="bRight">String</td>
                                                        <td class="bRight">Date_start <span style=" COLOR:RED;">2021-11-15</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bRight">end_date</td>
                                                        <td class="bRight">String</td>
                                                        <td class="bRight">Date_end <span style=" COLOR:RED;">2021-11-15</span></td>
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
    
        <span class="hljs-attr">"start_date"</span>: <span class="hljs-string">"2021-11-01"</span>,
        <span class="hljs-attr">"end_date"</span>: <span class="hljs-string">"2021-11-30"</span>,
        <span class="hljs-attr">"perpage"</span>: <span class="hljs-string">"100"</span>,
        <span class="hljs-attr">"page"</span>: <span class="hljs-string">"1"</span>,
        <span class="hljs-attr">"filter"</span>:{
            <span class="hljs-attr">"search"</span>: <span class="hljs-string">"dota"</span>
        },
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
                                                    <tr>
                                                        <td class="bRight">1432</td>
                                                        <td>user not found</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bRight">1640</td>
                                                        <td>invalid login admin role</td>
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
    <span class="hljs-attr">"data": {
      <span class="hljs-attr">"current_page"</span>: <span class="hljs-number">"1"</span>,
      <span class="hljs-attr">"max_list"</span>: <span class="hljs-number">"4"</span>,
      <span class="hljs-attr">"max_page"</span>: <span class="hljs-number">1</span>,
      <span class="hljs-attr">"hasprevPage"</span>: <span class="hljs-number">false</span>,
      <span class="hljs-attr">"hasnextPage"</span>: <span class="hljs-number">false</span>,
      <span class="hljs-attr">"prevPage": <span class="hljs-number">null</span>,
      <span class="hljs-attr">"nextPage"</span>: <span class="hljs-number">null</span>
      <span class="hljs-attr">"list"</span>: [
            {
                 <span class="hljs-attr">"game_id"</span>: <span class="hljs-number">1,
                 <span class="hljs-attr">"game_name"</span>: {
                 <span class="hljs-attr">"th"</span>: <span class="hljs-number">"dota2"</span>,
                 <span class="hljs-attr">"en"</span>: <span class="hljs-number">"dota2"</span>,
                 <span class="hljs-attr">"jp"</span>: <span class="hljs-number">""</span>,
                 <span class="hljs-attr">"ch"</span>: <span class="hljs-number">""</span>
                },
                 <span class="hljs-attr">"item_name"</span>: {
                 <span class="hljs-attr">"th"</span>: <span class="hljs-number">"ดาบยาว"</span>,
                 <span class="hljs-attr">"en"</span>: <span class="hljs-number">"Longsword"</span>,
                 <span class="hljs-attr">"jp"</span>: <span class="hljs-number">""</span>,
                 <span class="hljs-attr">"ch"</span>: <span class="hljs-number">""</span>
                },
                 <span class="hljs-attr">"username"</span>: <span class="hljs-number">"korn"</span>,
                 <span class="hljs-attr">"partner"</span>: <span class="hljs-number">"partner1"</span>,
                 <span class="hljs-attr">"amount"</span>: <span class="hljs-number">2500</span>,
                 <span class="hljs-attr">"type"</span>: <span class="hljs-number">"sale"</span>,
                 <span class="hljs-attr">"before_amount"</span>: <span class="hljs-number">0</span>,
                 <span class="hljs-attr">"after_amount"</span>: <span class="hljs-number">2500</span>,
                 <span class="hljs-attr">"created_at"</span>: <span class="hljs-number">"2021-11-11T14:06:39+07:00"</span>
            },
            {
                <span class="hljs-attr">"game_id"</span>: <span class="hljs-number">1</span>,
                <span class="hljs-attr">"game_name"</span>: {
                <span class="hljs-attr">"th":<span class="hljs-number"> "dota2"</span>,
                <span class="hljs-attr">"en":<span class="hljs-number"> "dota2"</span>,
                <span class="hljs-attr">"jp":<span class="hljs-number"> ""</span>,
                <span class="hljs-attr">"ch":<span class="hljs-number"> ""</span>
                },
                 <span class="hljs-attr">"item_name"</span>: {
                 <span class="hljs-attr">"th": <span class="hljs-number">"เอจิส"</span>,
                 <span class="hljs-attr">"en": <span class="hljs-number">"agis"</span>,
                 <span class="hljs-attr">"jp": <span class="hljs-number">""</span>,
                 <span class="hljs-attr">"ch": <span class="hljs-number">""</span>
                },
                 <span class="hljs-attr">"username": <span class="hljs-number">"korn"</span>,
                 <span class="hljs-attr">"partner": <span class="hljs-number">"partner1"</span>,
                 <span class="hljs-attr">"amount":<span class="hljs-number"> 2500</span>,
                 <span class="hljs-attr">"type": <span class="hljs-number">"sale"</span>,
                 <span class="hljs-attr">"before_amount": <span class="hljs-number">2500</span>,
                 <span class="hljs-attr">"after_amount":<span class="hljs-number"> 5000</span>,
                 <span class="hljs-attr">"created_at": <span class="hljs-number">"2021-11-11T14:06:39+07:00"</span>
            },
        ]
    },
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">"success"</span>
}</code></pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pb-5"></div>
                                <div style="background: #f2f3f4;  margin-top: 1%; border-radius: .375rem;">
                                    <div class="col-12" id="tabSix">
                                        <lable><b style="color: #0C3175 !important;" set-lan="text:4 UserPlaceBet">5.6
                                                User Item List</b></lable>
                                    </div>
                                    <div class="pb-3"></div>
                                    <div class="btn-toolbar mb-3" role="toolbar">
                                        <div class="divBox  col-8">
                                            <div class="col-12">
                                                <label class="txtHead">Method : </label>
                                                <label>Post</label>
                                            </div>
                                            <div class="col-12">
                                                <label class="txtHead">
                                                    Url :
                                                </label>
                                                <label>
                                                    https://test-api.gamemarket.shop/api/v1/user/item/list
                                                </label>

                                            </div>


                                        </div>

                                        <div class="divBox  col-8">
                                            <div class="col-12">
                                                <label class="txtHead">
                                                    headers
                                                </label>

                                            </div>
                                            <div class="col-12">
                                                <label class="">
                                                    <label>
                                                        <span class="txtHead">Authorization:</span> Bearer {token}
                                                    </label>
                                                </label>
                                            </div>
                                            <div class="col-12">
                                                <label>
                                                    content-type: application/json
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
                                                            <td class="bRight">user_key</td>
                                                            <td class="bRight">String</td>
                                                            <td class="bRight">game key form Gamemarket Document 4.7</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="bRight">keyword</td>
                                                            <td class="bRight">String</td>
                                                            <td class="bRight">Keyword</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bRight">page</td>
                                                            <td class="bRight">Integer</td>
                                                            <td class="bRight">Page</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bRight">status</td>
                                                            <td class="bRight">String</td>
                                                            <td class="bRight">Item
                                                                <div style="color:red;">* status "in": item in stores</div>
                                                                <div style="color:red;">* status "out": item sale </div>
                                                                <div style="color:red;">* status " ": "in" and "out"</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bRight">limit</td>
                                                            <td class="bRight">Integer</td>
                                                            <td class="bRight">Limit</td>
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
    
        <span class="hljs-attr">"user_key"</span>: <span class="hljs-string">"3c0301d7-7695-48c1-8fc9-0983bb2f6b54"</span>,
        <span class="hljs-attr">"keyword"</span>: <span class="hljs-string">""</span>,
        <span class="hljs-attr">"page"</span>: <span class="hljs-string">1</span>,
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"out",("in","out","")"</span>,
        <span class="hljs-attr">"limit"</span>:<span class="hljs-string">"100"</span>,
     
}
</code></pre>
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
                                                        <tr>
                                                            <td class="bRight">1432</td>
                                                            <td>user not found</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bRight">1640</td>
                                                            <td>invalid login admin role</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bRight">1000</td>
                                                            <td>invalid data type</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bRight">1183</td>
                                                            <td>invalid user key</td>
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
    <span class="hljs-attr">"code"</span>: <span class="hljs-number">0</span>{
        <span class="hljs-attr">"itemList"</span>: [
        {
            <span class="hljs-attr">"unique_id"</span>:<span class="hljs-number"> "5c0e2acb-aae3-47ae-83a3-f68689622b7a"</span>,
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">7</span>,
            <span class="hljs-attr">"game_member_acc_id"</span>:<span class="hljs-number"> 4</span>,
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-number">6</span>,
            <span class="hljs-attr">"track_id"</span>: <span class="hljs-number">"111"</span>,
            <span class="hljs-attr">"status"</span>: <span class="hljs-number">"out"</span>,
            <span class="hljs-attr">"created_at"</span>:<span class="hljs-number"> "2021-11-11T13:13:28.05604+07:00"</span>,
            <span class="hljs-attr">"updated_at"</span>: <span class="hljs-number">"2021-11-11T14:06:39.514968+07:00"</span>,
            <span class="hljs-attr">"username"</span>: <span class="hljs-number">"korn"</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-number">"dota2"</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-number">"Sword"</span>
        },
        {
            <span class="hljs-attr">"unique_id"</span>: <span class="hljs-number">"65798b47-b4c0-46f8-8d00-bae09d48582a"</span>,
            <span class="hljs-attr">"id"</span>:<span class="hljs-number"> 8</span>,
            <span class="hljs-attr">"game_member_acc_id"</span>: <span class="hljs-number">4</span>,
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-number">6</span>,
            <span class="hljs-attr">"track_id"</span>: <span class="hljs-number">"11116"</span>
            <span class="hljs-attr">"status"</span>: <span class="hljs-number">"out"</span>,
            <span class="hljs-attr">"created_at"</span>: <span class="hljs-number">"2021-11-11T13:13:45.212803+07:00"</span>,
            <span class="hljs-attr">"updated_at"</span>:<span class="hljs-number"> "2021-11-11T14:06:39.550411+07:00"</span>,
            <span class="hljs-attr">"username"</span>: <span class="hljs-number">"korn"</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-number">"dota2"</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-number">"Sword"</span>
        },
        {
            <span class="hljs-attr">"unique_id"</span>: <span class="hljs-number">"0c00582e-1720-408c-a002-b8e1a505eada"</span>,
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">9</span>,
            <span class="hljs-attr">"game_member_acc_id"</span>: <span class="hljs-number">4</span>,
            <span class="hljs-attr">"item_id"</span>:<span class="hljs-number"> 6</span>,
            <span class="hljs-attr">"track_id"</span>: <span class="hljs-number">"11511"</span>,
            <span class="hljs-attr">"status"</span>: <span class="hljs-number">"out"</span>,
            <span class="hljs-attr">"created_at"</span>: <span class="hljs-number">"2021-11-11T13:13:57.678421+07:00"</span>,
            <span class="hljs-attr">"updated_at"</span>: <span class="hljs-number">"2021-11-11T14:06:39.584791+07:00"</span>,
            <span class="hljs-attr">"username"</span>: <span class="hljs-number">"korn"</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-number">"dota2"</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-number">"Sword"</span>
        },
        {
            <span class="hljs-attr">"unique_id"</span>:<span class="hljs-number"> "bbef94a9-025e-45fd-9b31-9d4e96aebabc"</span>,
            <span class="hljs-attr">"id"</span>:<span class="hljs-number"> 10</span>,
            <span class="hljs-attr">"game_member_acc_id"</span>: <span class="hljs-number">4</span>,
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-number">6</span>,
            <span class="hljs-attr">"track_id"</span>: <span class="hljs-number">"114111"</span>,
            <span class="hljs-attr">"status"</span>: <span class="hljs-number">"out"</span>,
            <span class="hljs-attr">"created_at"</span>: <span class="hljs-number">"2021-11-11T13:14:33.139377+07:00"</span>,
            <span class="hljs-attr">"updated_at"</span>: <span class="hljs-number">"2021-11-11T14:32:49.779241+07:00"</span>,
            <span class="hljs-attr">"username"</span>:<span class="hljs-number"> "korn"</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-number">"dota2"</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-number">"Sword"</span>
        },
        {
            <span class="hljs-attr">"unique_id"</span>: <span class="hljs-number">"57ccbedf-5a10-4cb8-80fd-2f83dcb46311"</span>,
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">11</span>,
            <span class="hljs-attr">"game_member_acc_id"</span>: <span class="hljs-number">4</span>,
            <span class="hljs-attr">"item_id"</span>:<span class="hljs-number"> 6</span>,
            <span class="hljs-attr">"track_id"</span>: <span class="hljs-number">"1111131"</span>,
            <span class="hljs-attr">"status"</span>: <span class="hljs-number">"out"</span>,
            <span class="hljs-attr">"created_at"</span>: <span class="hljs-number">"2021-11-11T13:14:53.366375+07:00"</span>,
            <span class="hljs-attr">"updated_at"</span>: <span class="hljs-number">"2021-11-29T21:52:36.164787+07:00"</span>,
            <span class="hljs-attr">"username"</span>: <span class="hljs-number">"korn"</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-number">"dota2"</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-number">"Sword"</span>
        },
        {
            <span class="hljs-attr">"unique_id"</span>: <span class="hljs-number">"daaa023d-a391-4680-bd4e-88dc2fca8fe7"</span>,
            <span class="hljs-attr">"id"</span>:<span class="hljs-number"> 12</span>,
            <span class="hljs-attr">"game_member_acc_id"</span>:<span class="hljs-number"> 4</span>,
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-number">6</span>,
            <span class="hljs-attr">"track_id"</span>: <span class="hljs-number">"11111111"</span>,
            <span class="hljs-attr">"status"</span>:<span class="hljs-number"> "out"</span>,
            <span class="hljs-attr">"created_at"</span>:<span class="hljs-number"> "2021-11-11T13:15:03.834224+07:00"</span>,
            <span class="hljs-attr">"updated_at"</span>: <span class="hljs-number">"2021-11-29T21:55:07.140995+07:00"</span>,
            <span class="hljs-attr">"username"</span>: <span class="hljs-number">"korn"</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-number">"dota2"</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-number">"Armor"</span>
        },
        {
            <span class="hljs-attr">"unique_id"</span>: <span class="hljs-number">"e7184db0-f9b2-4f05-bdb8-db339342c51d"</span>,
            <span class="hljs-attr">"id"</span>:<span class="hljs-number"> 13</span>,
            <span class="hljs-attr">"game_member_acc_id"</span>:<span class="hljs-number"> 4</span>,
            <span class="hljs-attr">"item_id"</span>: <span class="hljs-number">9</span>,
            <span class="hljs-attr">"track_id"</span>: <span class="hljs-number">"1111122"</span>,
            <span class="hljs-attr">"status"</span>:<span class="hljs-number">"out"</span>,
            <span class="hljs-attr">"created_at"</span>: <span class="hljs-number">"2021-11-11T13:15:16.098345+07:00"</span>,
            <span class="hljs-attr">"updated_at"</span>: <span class="hljs-number">"2021-11-30T15:02:55.995561+07:00"</span>,
            <span class="hljs-attr">"username"</span>:<span class="hljs-number">"korn"</span>,
            <span class="hljs-attr">"game_name"</span>: <span class="hljs-number">"dota2"</span>,
            <span class="hljs-attr">"item_name"</span>: <span class="hljs-number">"Hamer"</span>
        }
    ],
    <span class="hljs-attr">"page_total"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-attr">"memberPoint": {
        <span class="hljs-attr">"username"</span>: <span class="hljs-number">"korn"</span>,
        <span class="hljs-attr">"sale"</span>: <span class="hljs-number">29000</span>,
        <span class="hljs-attr">"withdraw"</span>: <span class="hljs-number">2300</span>,
        <span class="hljs-attr">"remaining"</span>: <span class="hljs-number">26700</span>,
        <span class="hljs-attr">"receive_amount"</span>: <span class="hljs-number">1840</span>
    },
}</code></pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pb-5"></div>

                                    <div class="pb-5"></div>
                                    <div style="background: #f2f3f4;  margin-top: 1%; border-radius: .375rem;">
                                        <div class="col-12" id="tabSeven">
                                            <lable><b style="color: #0C3175 !important;" set-lan="text:4 UserPlaceBet">5.7
                                                    User Member List</b></lable>
                                        </div>
                                        <div class="pb-3"></div>
                                        <div class="btn-toolbar mb-3" role="toolbar">
                                            <div class="divBox  col-8">
                                                <div class="col-12">
                                                    <label class="txtHead">Method : </label>
                                                    <label>Post</label>
                                                </div>
                                                <div class="col-12">
                                                    <label class="txtHead">
                                                        Url :
                                                    </label>
                                                    <label>
                                                        https://test-api.gamemarket.shop/api/v1/user/member/list
                                                    </label>

                                                </div>


                                            </div>

                                            <div class="divBox  col-8">
                                                <div class="col-12">
                                                    <label class="txtHead">
                                                        headers
                                                    </label>

                                                </div>
                                                <div class="col-12">
                                                    <label class="">
                                                        <label>
                                                            <span class="txtHead">Authorization:</span> Bearer {token}
                                                        </label>
                                                    </label>
                                                </div>
                                                <div class="col-12">
                                                    <label>
                                                        content-type: application/json
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
                                                                <td class="bRight">keyword</td>
                                                                <td class="bRight">String</td>
                                                                <td class="bRight">Keyword</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bRight">page</td>
                                                                <td class="bRight">Integer</td>
                                                                <td class="bRight">Page</td>
                                                            </tr>

                                                            <tr>
                                                                <td class="bRight">limit</td>
                                                                <td class="bRight">Integer</td>
                                                                <td class="bRight">Limit</td>
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
    
        <span class="hljs-attr">"keyword"</span>: <span class="hljs-string">"korn"</span>,
        <span class="hljs-attr">"page"</span>: <span class="hljs-string">1</span>,
        <span class="hljs-attr">"limit"</span>:<span class="hljs-string">"100"</span>,
     
}
</code></pre>
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
                                                            <tr>
                                                                <td class="bRight">1432</td>
                                                                <td>user not found</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bRight">1640</td>
                                                                <td>invalid login admin role</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bRight">1000</td>
                                                                <td>invalid data type</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bRight">1183</td>
                                                                <td>invalid user key</td>
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
    <span class="hljs-attr">"msg"</span>: <span class="hljs-number">Success</span>,
    <span class="hljs-attr">"page_total"</span>: <span class="hljs-number">0</span>,{
        <span class="hljs-attr">"result"</span>: [
        {
            <span class="hljs-attr">"unique_id"</span>:<span class="hljs-number"> "3c0301d7-7695-48c1-8fc9-0983bb2f6b54"</span>,
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">3</span>,
            <span class="hljs-attr">"phone_number"</span>:<span class="hljs-number"> ""</span>,
            <span class="hljs-attr">"first_name"</span>: <span class="hljs-number">""</span>,
            <span class="hljs-attr">"last_name"</span>: <span class="hljs-number">""</span>,
            <span class="hljs-attr">"user_name"</span>: <span class="hljs-number">""</span>,
            <span class="hljs-attr">"password"</span>:<span class="hljs-number"> ""</span>,
            <span class="hljs-attr">"access_key"</span>: <span class="hljs-number">""</span>,
            <span class="hljs-attr">"secret_key"</span>: <span class="hljs-number">""</span>,
            <span class="hljs-attr">"role"</span>: <span class="hljs-number">""</span>,
            <span class="hljs-attr">"game_ctrl"</span>: <span class="hljs-number">"null"</span>,
            <span class="hljs-attr">"bank_name"</span>: <span class="hljs-number">""</span>,
            <span class="hljs-attr">"account_number"</span>: <span class="hljs-number">""</span>,
            <span class="hljs-attr">"created_at"</span>: <span class="hljs-number">"2021-11-03T17:36:06.936798+07:00"</span>,
            <span class="hljs-attr">"updated_at"</span>: <span class="hljs-number">"2021-11-03T17:36:06.936798+07:00"</span>,
            <span class="hljs-attr">"withdraw"</span>: <span class="hljs-number">""</span>,
            <span class="hljs-attr">"partner_pt"</span>: <span class="hljs-number">"0"</span>,
            <span class="hljs-attr">"Game"</span>: <span class="hljs-number">"null"</span>,
            <span class="hljs-attr">"GameMemberAcc"</span>: <span class="hljs-number">"null"</span>,
            <span class="hljs-attr">"Transaction"</span>: <span class="hljs-number">"null"</span>,
            <span class="hljs-attr">"point"</span>: <span class="hljs-number">"0"</span>
        },
    ]
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
                                            <div class="col-md-6" style="text-align: right;">
                                                <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='optional.php'">
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
    $(document).ready(function() {
        $("#manu5 , #manu65 > a").addClass("active");
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