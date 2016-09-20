package com.hospital.Servlet;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.hospital.Beans.Ambulance;
import com.hospital.Utils.AmbulanceUtil;

/**
 * Servlet implementation class BookAmbulance
 */
@WebServlet("/BookAmbulance")
public class BookAmbulance extends HttpServlet {

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	
		String name = request.getParameter("name");
		double contact = Double.parseDouble(request.getParameter("contact"));
		String location=request.getParameter("location");
		String time=request.getParameter("time");
		String type=request.getParameter("ambtype");
		String cost="N.A";

		AmbulanceUtil utils=new AmbulanceUtil();
		Ambulance ambulance=new Ambulance(name, location, time, type, cost, contact);
		
		utils.bookAmbulance(ambulance);
		request.setAttribute("book", ambulance);
		RequestDispatcher rds=request.getRequestDispatcher("SuccessBooking.jsp");
		rds.forward(request, response);
	}
	

}
