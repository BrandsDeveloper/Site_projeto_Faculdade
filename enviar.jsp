<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<%@page language="java" import="java.sql.*" %>
	<%
		String vemail = request.getParameter("txtemail");
		String vnome = request.getParameter("txtnome");
		int vfone = Integer.parseInt(request.getParameter("txtfone"));
		String vmsg = request.getParameter("txtmensagem");

	
		String usuario = "root" ;
		String senha = "" ;
		String banco = "lucas" ;

		String url = "jdbc:mysql://localhost:3306/" + banco ;
		String driver = "com.mysql.jdbc.Driver" ; 

		//carraga driver na memoria
		Class.forName( driver );

		//criar objeto para conexão com BD

	Connection conexao ;

	//abrir conexao
	conexao = DriverManager.getConnection( url , usuario , senha ) ;

	String sql ="INSERT INTO lider(email, nome, telefone, Mensagem)  values('" + vemail +"', '" + vnome + "','" + vfone + "','" + vmsg + "')";
	Statement stm = conexao.createStatement() ;
	stm.executeUpdate( sql );
	stm.close() ;
	conexao.close() ;

	out.print("<br><br>") ;
	out.print("Dados gravados com sucesso!!!") ;
	%>
	<p><a href="contatolider.php"> Voltar <a></p>
</body>
</html>