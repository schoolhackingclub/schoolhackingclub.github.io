<%@ page language="java" contentType="text/html; charset=utf-8"
 pageEncoding="utf-8"%>
<%@ page import="java.io.*"%>
<%@ page import="com.oreilly.servlet.*"%>
<%@ page import="com.oreilly.servlet.multipart.*"%>
<%
request.setCharacterEncoding("UTF-8");
%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>파일 업로드 결과</title>
</head>
<body>
<h3>파일 업로드 결과</h3>
<%
 String dir = application.getRealPath("/upload"); //폴더 얻기
 int max = 5 * 1024 * 1024; //최대 업로드 크기는 5M까지만 허용
 try {
  MultipartRequest m = new MultipartRequest(request, dir, max,
 "UTF-8", new DefaultFileRenamePolicy());
  String file1 = m.getFilesystemName("file1");
  String ofile1 = m.getOriginalFileName("file1");

  String file2 = m.getFilesystemName("file2");
  String ofile2 = m.getOriginalFileName("file2");
%>
<%
if (file1 != null) {
%>
업로드 파일1:
<a href=/upload /<%=file1%>><%=ofile1%></a>
<br>
<%
  }//if

  if (file2 != null) {
%>
업로드 파일2:
<a href=/upload /<%=file2%>><%=ofile2%></a>
<br>
<%
 }//if
 } catch (Exception e) {
  e.printStackTrace(new PrintWriter(out));
 }//catch
%>
</body>
</html>
