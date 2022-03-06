<!DOCTYPE html>
<html lang="en">

<sty

<head>
	<title>GFG- Store Data</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
			
			
 <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <!-- Begin thead -->
                    <thead>
                        <tr>
                            <th rowspan="2">STT</th>
                            <th rowspan="2">Tiêu chí đánh giá</th>
                            <th colspan="6">Mức độ đánh giá</th>

                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>Không ý kiến</th>
                        </tr>
                    </thead>
                    <!-- End thead -->

                    <!-- Begin body table -->
                    <tbody>

                        <!-- Begin I-->
                        <tr>
                            <th colspan="2"> I. Thông tin về học phần</th>
                            <th colspan=" 5"> Từ 1 đến 5</th>
                            <th></th>
                        </tr>
                        <!-- End I-->

                        <tr>
                            <td>1</td>
                            <td>Giảng viên cung cấp đầy đủ và giải thích rõ ràng về:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <!-- begin: 1.Chuẩn đầu ra học phần -->
                        <tr>
                            <td></td>
                            <td> &emsp; - &emsp; Chuẩn đầu ra học phần</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>

                        </tr>
                        <!-- end: 1.Chuẩn đầu ra học phần -->



                        <!-- begin: 1.Phương pháp dạy học -->
                        <tr>
                            <td></td>
                            <td> &emsp; - &emsp; Phương pháp dạy học</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>

                        </tr>
                        <!-- end: 1.Phương pháp dạy học -->


                        <!-- begin: 1.Phương pháp kiểm tra -->
                        <tr>
                            <td></td>
                            <td> &emsp; - &emsp; Phương pháp kiểm tra</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>

                        </tr>
                        <!-- end: 1.Phương pháp kiểm tra -->


                        <!-- begin: 1.Rubric, thang điểm kiểm tra đánh giá -->
                        <tr>
                            <td></td>
                            <td> &emsp; - &emsp; Rubric, thang điểm kiểm tra đánh giá</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>

                        </tr>
                        <!-- end: 1.Rubric, thang điểm kiểm tra đánh giá -->


                        <!-- begin: 1.Tài liệu/giáo trình -->
                        <tr>
                            <td></td>
                            <td> &emsp; - &emsp; Tài liệu/giáo trình</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 1.Tài liệu/giáo trình -->

                        <!-- begin 2.Nội dung bài giảng lý thuyết bám sát đề cương học phần -->
                        <tr>
                            <td>2</td>
                            <td> Nội dung bài giảng lý thuyết bám sát đề cương học phần</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>

                        </tr>
                        <!-- end: 2.Nội dung bài giảng lý thuyết bám sát đề cương học phần -->



                        <!-- begin 3.Học phần đáp ứng với chuẩn đầu ra của chương trình đào tạo -->
                        <tr>
                            <td>3</td>
                            <td> Học phần đáp ứng với chuẩn đầu ra của chương trình đào tạo</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 3.Học phần đáp ứng với chuẩn đầu ra của chương trình đào tạo -->


                        <!-- Begin II-->
                        <tr>
                            <th colspan="2"> II. Hoạt động giảng dạy</th>
                            <th colspan=" 5"> Từ 1 đến 5</th>
                            <th></th>
                        </tr>
                        <!-- End II-->

                        <!-- begin 3.Giảng viên giảng dạy học phần lý thuyết: -->
                        <tr>
                            <td></td>
                            <td> Giảng viên giảng dạy học phần lý thuyết:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- end: 3.Giảng viên giảng dạy học phần lý thuyết: -->

                        <!-- begin 4.Lấy người học làm trung tâm -->
                        <tr>
                            <td>4</td>
                            <td> Lấy người học làm trung tâm</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 4.Lấy người học làm trung tâm -->


                        <!-- begin 5.Yêu cầu sinh viên áp dụng kiến thức đã học để giải quyết những vấn đề thực tiễn-->
                        <tr>
                            <td>5</td>
                            <td> Yêu cầu sinh viên áp dụng kiến thức đã học để giải quyết những vấn đề thực tiễn</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 5.Yêu cầu sinh viên áp dụng kiến thức đã học để giải quyết những vấn đề thực tiễn -->

                        <!-- begin 6.Khuyến khích sinh viên chuẩn bị bài ở nhà để hỗ trợ các hoạt động học tập diễn ra tại lớp (lớp học đảo ngược, PBL, E-Learning)-->
                        <tr>
                            <td>6</td>
                            <td> Khuyến khích sinh viên chuẩn bị bài ở nhà để hỗ trợ các hoạt động học tập diễn ra tại lớp (lớp học đảo ngược, PBL, E-Learning)</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 6.Khuyến khích sinh viên chuẩn bị bài ở nhà để hỗ trợ các hoạt động học tập diễn ra tại lớp (lớp học đảo ngược, PBL, E-Learning) -->


                        <!-- begin 7.Khuyến khích sinh viên tính tích cực, tự giác, chủ động, sáng tạo, đặt vấn đề, làm việc nhóm, thảo luận,…-->
                        <tr>
                            <td>7</td>
                            <td> Khuyến khích sinh viên tính tích cực, tự giác, chủ động, sáng tạo, đặt vấn đề, làm việc nhóm, thảo luận,…</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 7.Khuyến khích sinh viên tính tích cực, tự giác, chủ động, sáng tạo, đặt vấn đề, làm việc nhóm, thảo luận,… -->


                        <!-- 8.Khuyến khích sinh viên thuyết trình, triển khai các hoạt động phản biện giữa các nhóm …-->
                        <tr>
                            <td>8</td>
                            <td> Khuyến khích sinh viên thuyết trình, triển khai các hoạt động phản biện giữa các nhóm </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 8.Khuyến khích sinh viên thuyết trình, triển khai các hoạt động phản biện giữa các nhóm -->


                        <!-- 9.Sử dụng nhiều phương pháp giảng dạy tích cực, khuyến khích sự chủ động tích cực của sinh viên-->
                        <tr>
                            <td>9</td>
                            <td> Sử dụng nhiều phương pháp giảng dạy tích cực, khuyến khích sự chủ động tích cực của sinh viên </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 9.Sử dụng nhiều phương pháp giảng dạy tích cực, khuyến khích sự chủ động tích cực của sinh viên-->





                        <!-- III -->




                        <!-- Begin III-->
                        <tr>
                            <th colspan="2"> III. Hoạt động kiểm tra đánh giá</th>
                            <th colspan=" 5"> Từ 1 đến 5</th>
                            <th></th>
                        </tr>
                        <!-- End III-->


                        <!-- begin 10.Nội dung kiểm tra đánh giá tương thích với nội dung bài giảng -->
                        <tr>
                            <td>10</td>
                            <td> Nội dung kiểm tra đánh giá tương thích với nội dung bài giảng</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 10.Nội dung kiểm tra đánh giá tương thích với nội dung bài giảng -->


                        <!-- begin 11.Quá trình kiểm tra đánh giá được thực hiện công bằng, công khai-->
                        <tr>
                            <td>11</td>
                            <td> Quá trình kiểm tra đánh giá được thực hiện công bằng, công khai</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 11.Quá trình kiểm tra đánh giá được thực hiện công bằng, công khai -->

                        <!-- begin 12.Kết quả kiểm tra, đánh giá được phản hồi kịp thời, giúp sinh viên cải thiện kết quả học tập-->
                        <tr>
                            <td>12</td>
                            <td> Kết quả kiểm tra, đánh giá được phản hồi kịp thời, giúp sinh viên cải thiện kết quả học tập</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 12.Kết quả kiểm tra, đánh giá được phản hồi kịp thời, giúp sinh viên cải thiện kết quả học tập -->


                        <!-- begin 13.Các phương pháp đánh giá mang tính đa dạng (trắc nghiệm, tự luận, thuyết trình, vấn đáp, báo cáo, quan sát, ….)-->
                        <tr>
                            <td>13</td>
                            <td> Các phương pháp đánh giá mang tính đa dạng (trắc nghiệm, tự luận, thuyết trình, vấn đáp, báo cáo, quan sát, ….)</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 13.Các phương pháp đánh giá mang tính đa dạng (trắc nghiệm, tự luận, thuyết trình, vấn đáp, báo cáo, quan sát, ….)-->


                        <!-- 14.Quy trình phúc khảo được công khai và có hướng dẫn cụ thể-->
                        <tr>
                            <td>14</td>
                            <td> Quy trình phúc khảo được công khai và có hướng dẫn cụ thể</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 14.Quy trình phúc khảo được công khai và có hướng dẫn cụ thể -->


                        <!-- begin: 15.Kết quả phúc khảo được trả lời công khai và kịp thời-->
                        <tr>
                            <td>15</td>
                            <td> Kết quả phúc khảo được trả lời công khai và kịp thời</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: : 15.Kết quả phúc khảo được trả lời công khai và kịp thời-->


                        <!-- IV -->

                        <!-- Begin IV-->
                        <tr>
                            <th colspan="2"> IV. Hoạt động hỗ trợ</th>
                            <th colspan=" 5"> Từ 1 đến 5</th>
                            <th></th>
                        </tr>
                        <!-- End IV-->

                        <!-- begin 16.Thiết bị phòng lý thuyết đáp ứng nhu cầu học tập-->
                        <tr>
                            <td>16</td>
                            <td> Thiết bị phòng lý thuyết đáp ứng nhu cầu học tập</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 16.Thiết bị phòng lý thuyết đáp ứng nhu cầu học tập -->


                        <!-- begin 17.Giảng viên hòa đồng, thân thiện, luôn hỗ trợ sinh viên-->
                        <tr>
                            <td>17</td>
                            <td> Giảng viên hòa đồng, thân thiện, luôn hỗ trợ sinh viên</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 17.Giảng viên hòa đồng, thân thiện, luôn hỗ trợ sinh viên-->


                        <!-- 18.Giảng viên đảm bảo giờ lên lớp, kịp tiến bộ-->
                        <tr>
                            <td>18</td>
                            <td> Giảng viên đảm bảo giờ lên lớp, kịp tiến bộ</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: 18.Giảng viên đảm bảo giờ lên lớp, kịp tiến bộ -->


                        <!-- begin: 19.Bạn hài lòng với kiến thức và kỹ năng mà giảng viên cung cấp trong học phần này-->
                        <tr>
                            <td>19</td>
                            <td> Bạn hài lòng với kiến thức và kỹ năng mà giảng viên cung cấp trong học phần này</td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="check1" id="check1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="check2" id="check2">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="check3" id="check3">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="check4" id="check4">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="check5" id="check5">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <!-- end: : 19.Bạn hài lòng với kiến thức và kỹ năng mà giảng viên cung cấp trong học phần này-->

                    </tbody>
                    <!-- End body table -->
                </table>

            </div>
        </div>


			
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
