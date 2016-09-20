package com.hospital.Servlet;

import java.io.IOException;
import java.util.ArrayList;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.hospital.Beans.Appointment;
import com.hospital.Utils.ViewAppointmentUtils;

/**
 * Servlet implementation class ViewNewAppointments
 */
@WebServlet("/ViewNewAppointments")
public class ViewNewAppointments extends HttpServlet {

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	ViewAppointmentUtils appUtils=new ViewAppointmentUtils();
    ArrayList<Appointment> app=appUtils.viewAllAppointments();
    request.setAttribute("c",app);
    RequestDispatcher rd=request.getRequestDispatcher("ReceptionistHome.jsp");
	rd.forward(request, response);
	}

}
