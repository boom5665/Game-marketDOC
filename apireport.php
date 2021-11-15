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
                                https://dev-api.gamemarket.shop/api/v1/user/login/admin
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
                <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
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
                                    https://dev-api.gamemarket.shop/api/v1/report/winlose
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
                                            <td class="bRight">Track Withdraw</td>
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
        <span class="hljs-attr">"outstanding"</span>: <span class="hljs-number">7700</span>
    }
  ]
}</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="pb-5"></div>
                    <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
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
                                     https://dev-api.gamemarket.shop/api/v1/report/games
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