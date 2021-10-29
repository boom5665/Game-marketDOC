<?php include 'layouts/header.php'; ?>

<div class="wrapper container">
    <?php include 'layouts/nav.php'; ?>
    <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">
        <?php include 'layouts/lang.php'; ?>
        <div class="body-content">
            <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">
                <h1><b style="color: #0C3175 !important;" set-lan="text:2. Version">3. Add ITEM</b></h1>
                <div class="pb-3"></div>
                <div class="table-wrapper">
                    <div class="col-12" id="tabOne">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:3.2 Workflow">3.1 Add Level ITEM</b>
                        </lable>
                        <div class="btn-toolbar mb-3" role="toolbar">
                            <div class="form-group col-12">
                                <div class="pb-5"></div>
                                <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.1.1 เพิ่มระดับ Add Level ITEM </label>
                                <div class="col-12">
                                    <img src="./API_files/3.1.1.png" style="width: 90%; margin-left: 10%;">
                                </div>
                                <div class="pb-5"></div>
                                <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3.1.2 คัดลอก Access Key And Secret Key </label>
                                <div class="col-12">
                                    <img src="./API_files/3.1.2.png" style="width: 90%; margin-left: 10%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12" id="tabTwo">
                        <lable><b style="color: #0C3175 !important;" set-lan="text:3.2 Workflow">3.2 Add Item</b>
                        </lable>
                        <div class="btn-toolbar mb-3" role="toolbar">
                            <div class="form-group col-12">
                                <div class="pb-5"></div>
                                <label set-lan="html:1.	Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.2.1 เพิ่มระดับ Add item</label>
                                <div class="col-12">
                                    <img src="./API_files/3.2.1.png" style="width: 90%; margin-left: 10%;">
                                </div>
                                <div class="pb-5"></div>
                                <label set-lan="html:2.	Click">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    3.2.2  </label>
                                <div class="col-12">
                                    <img src="./API_files/3.2.2.png" style="width: 90%; margin-left: 10%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar mb-12" style="margin-top: 20px;">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='index.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="location.href='seamlessapi.php'">
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
        $("#manu2 , #manu2 > a").addClass("active");
        $("#manu2 > div").css("display", "block");
    });
</script>

</body>

</html>