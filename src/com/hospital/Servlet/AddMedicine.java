package com.hospital.Servlet;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/AddMedicine")
public class AddMedicine extends HttpServlet {

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		String vms=request.getParameter("vms");
		String name = request.getParameter("name");
	
		String type=request.getParameter("type");
		String strength=request.getParameter("strength");
		int qty=Integer.parseInt(request.getParameter("qty"));
		int cost=Integer.parseInt(request.getParameter("cost"));
	
	
	}

}
