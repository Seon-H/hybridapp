<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>HTML5 개인 포트폴리오 jQuery Mobile</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="mportpolio.css"/>
<!-- ========================================================================================== -->

<style>
	 li { list-style:none; }
	 img {width: 20%;}
	.picture { list-style:none; padding:0; margin:0; }
	.picture li { float:left; width:50%;}
	.picture li a {display:block; margin:5px; border: 1px }
	.picture li img { display:block; width:50%;  height:auto;}
	.picture li img:hover { display:block; width:100%;  height:auto;}
	table {
			width: 100%;
			border-collapse: collapse;
		}
		th, td {
			padding: 10px;
			border:1px solid #000000;
		}
</style>
</head>
<!-- ======================================================================== -->
<body>
	<div data-theme="b">
		<div data-role="page" id="home">
			<div data-role="header" data-theme="b">
				<h1>개인 포트폴리오 앱</h1>
			</div>
			<div data-role="content" style="text-align:center">
					<img src="myimg.jpg">
				<ul data-role="listview" data-inset="true">
					<li><a href="#intro">소개</a></li>
					<li><a href="#info" >학력</a></li>
					<li><a href="#project">프로젝트</a></li>
					<li><a href="#job">희망진로</a></li>
				</ul>
			</div>
			<div data-role="footer" data-position="fixed" data-theme="b">
				<h3>동의과학대학교_컴퓨터정보과_유선희</h3>
				<h6>made by 2020 Yu Seon Hee</h6>
			</div>
		</div>
<!-- ============================================================================= -->
<div data-role="page" id="intro" data-theme="b">
		<div data-role="header" data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>자기 소개</h1>
		</div>
		<div data-role="content">
				<div  style="text-align:center">
					<img src="myimg.jpg" width="30%">
				</div>
			<div data-role="collapsible-set" data-theme="b" data-content-theme="e">
				<div data-role="collapsible" data-collapsed="false">
					<h3>기본 정보</h3>
					<table>
					      <tbody>
					    <?php
					      $jb_conn = mysqli_connect( 'localhost', 'root', '', 'portfolio' );
					      $jb_sql = "SELECT * FROM info;";
					      $jb_result = mysqli_query( $jb_conn, $jb_sql );
					      while( $jb_col = mysqli_fetch_array( $jb_result ) ) {
					       echo '<tr> <th>이름</th><td>' . $jb_col[ 'name' ] . '</td></tr>
								       <tr> <th>연락처</th><td>'. $jb_col[ 'phone' ] . '</td></tr>
											 <tr> <th>이메일</th><td>' . $jb_col[ 'email' ] . '</td></tr>
											 <tr> <th>나이</th><td>' . $jb_col[ 'age' ] . '</td></tr>
														</tr>';
					      }
					    ?>
					 </tbody>
					    </table>
				</div>
				<div data-role="collapsible">
					<h3>보유 기술 및 능력 </h3>
					<p>Java, JavaScript, C, HTML, CSSm Python, Database, JSP, PHP</p>
				</div>

			</div>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h3>동의과학대학교_컴퓨터정보과_유선희</h3>
			<h6>made by 2020 Yu Seon Hee</h6>
		</div>
	</div>
<!-- ============================================================================= -->
<div data-role="page" id="info" data-theme="b">
		<div data-role="header" data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>학력</h1>
		</div>
		<div data-role="content">
				<div  style="text-align:center">
					<img src="myimg.jpg" width="30%">
				</div>
			<div data-role="collapsible-set" data-theme="b" data-content-theme="e">
				<div data-role="collapsible" data-collapsed="false">
					<h3>학력</h3>
					<table>
						<thead>
							<tr>
          		<th>재학기간</th>
          		<th>구분</th>
          		<th>학교명</th>
							<th>전공</th>
							<th>학점</th>
        		</tr>
						</thead>
						<tbody>
							<?php
								$jb_conn = mysqli_connect( 'localhost', 'root', '', 'portfolio' );
								$jb_sql = "SELECT * FROM achi;";
								$jb_result = mysqli_query( $jb_conn, $jb_sql );
								while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
								 echo '<tr> <td>' . $jb_row[ 'period' ] . '</td>
											      <td>'. $jb_row[ 'division' ] . '</td>
											      <td>' . $jb_row[ 'schoolName' ] . '</td>
											      <td>' . $jb_row[ 'specialty' ] . '</td>
														<td>' . $jb_row[ 'credit' ] . '</td>
														</tr>';
								}
							?>
					 </tbody>
							</table>
				</div>
				<div data-role="collapsible">
					<h3>자격증</h3>
					<table>
						<thead>
							<tr>
          		<th>취득일</th>
          		<th>자격증</th>
          		<th>발행처</th>
							<th>합격구분</th>
        		</tr>
						</thead>
						<tbody>
							<?php
								$jb_conn = mysqli_connect( 'localhost', 'root', '', 'portfolio' );
								$jb_sql = "SELECT * FROM cert;";
								$jb_result = mysqli_query( $jb_conn, $jb_sql );
								while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
								 echo '<tr> <td>' . $jb_row[ 'date' ] . '</td>
											      <td>'. $jb_row[ 'certName' ] . '</td>
											      <td>' . $jb_row[ 'org' ] . '</td>
											      <td>' . $jb_row[ 'divi' ] . '</td>
														</tr>';
								}
							?>
					 </tbody>
							</table>
				</div>
			</div>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h3>동의과학대학교_컴퓨터정보과_유선희</h3>
			<h6>made by 2020 Yu Seon Hee</h6>
		</div>
	</div>
<!-- ============================================================================= -->
<div data-role="page" id="project" data-theme="b">
		<div data-role="header" data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>프로젝트</h1>
		</div>
		<div data-role="content">
			<div data-role="collapsible-set" data-theme="b" data-content-theme="e">
				<div data-role="collapsible" data-collapsed="false">
					<h3>프로젝트</h3>
					<table>
						<thead>
							<tr>
							<th>언어</th>
							<th>주제</th>
							<th>내용</th>
						</tr>
						</thead>
						<tbody>
							<!-- ================================================================ -->
							<?php
								$jb_conn = mysqli_connect( 'localhost', 'root', '', 'portfolio' );
								$jb_sql = "select * from project;";
								$jb_result = mysqli_query( $jb_conn, $jb_sql );
								while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
								 echo '<tr> <td>' . $jb_row[ 'lagName' ] . '</td>
														<td>'. $jb_row[ 'title' ] . '</td>
														<td>' . $jb_row[ 'content' ] . '</td>
														</tr>';
								}
							?>
							<!-- ================================================================ -->
					 </tbody>
							</table>
							<button onclick="location.href='#insert'">입력</button>
							<button onclick="location.href='#update'">수정</button>
							<button onclick="location.href='#delete'">삭제</button>
				</div>
			</div>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h3>동의과학대학교_컴퓨터정보과_유선희</h3>
			<h6>made by 2020 Yu Seon Hee</h6>
		</div>
	</div>
	<!-- ============================================================================= -->
	<div data-role="page" id="insert"  data-theme="b">
		<div data-role="header" data-position="fixed"  data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>프로젝트 등록</h1>
		</div>
		<div data-role="content">
			<form action = "insert.php" method = "POST">
	         				언어: <input type = "text" name = "lagName" />
	         				주제: <input type = "text" name = "title" />
	         				내용 : <input type = "text" name = "content" />
	         					<!-- <input type = "submit" value="입력" onClick="window.location.reload();"/> -->
										<input type = "submit" value="입력" onClick="window.open('#project')"/>
	      				</form>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h3>동의과학대학교_컴퓨터정보과_유선희</h3>
			<h6>made by 2020 Yu Seon Hee</h6>
		</div>
	</div>
<!-- ============================================================================= -->
<div data-role="page" id="update"  data-theme="b">
	<div data-role="header" data-position="fixed"  data-theme="b">
		<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
		<h1>프로젝트 수정</h1>
	</div>
	<div data-role="content">
		<form action = "update.php" method = "POST">
								언어: <input type = "text" name = "lagName" />
								주제: <input type = "text" name = "title" />
								내용 : <input type = "text" name = "content" />
									<!-- <input type = "submit" value="입력" onClick="window.location.reload();"/> -->
									<input type = "submit" value="수정" onClick="window.open('#project')"/>
							</form>
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
		<h3>동의과학대학교_컴퓨터정보과_유선희</h3>
		<h6>made by 2020 Yu Seon Hee</h6>
	</div>
</div>
<!-- ============================================================================= -->
<div data-role="page" id="delete"  data-theme="b">
	<div data-role="header" data-position="fixed"  data-theme="b">
		<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
		<h1>프로젝트 삭제</h1>
	</div>
	<div data-role="content">
		<form action = "delete.php" method = "POST">
								언어: <input type = "text" name = "lagName" />
									<!-- <input type = "submit" value="입력" onClick="window.location.reload();"/> -->
									<input type = "submit" value="삭제" onClick="window.open('#project')"/>
							</form>
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
		<h3>동의과학대학교_컴퓨터정보과_유선희</h3>
		<h6>made by 2020 Yu Seon Hee</h6>
	</div>
</div>
<!-- ============================================================================= -->
<div data-role="page" id="job" data-theme="b">
		<div data-role="header" data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>희망진로</h1>
		</div>
		<div data-role="content">
				<div  style="text-align:center">
					<img src="coding.jpg" width="30%">
				</div>
			<div data-role="collapsible-set" data-theme="b" data-content-theme="e">
				<div data-role="collapsible" data-collapsed="false">
					<h3>희망진로</h3>
					<p>Java/Android 개발자, 하드웨어 수리기사</p>
				</div>

		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h3>동의과학대학교_컴퓨터정보과_유선희</h3>
			<h6>made by 2020 Yu Seon Hee</h6>
		</div>
	</div>
<!-- ============================================================================= -->
</body>
</html>
