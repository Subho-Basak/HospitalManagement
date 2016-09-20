package com.hospital.Servlet;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.Random;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.hospital.Beans.Appointment;
import com.hospital.Utils.PatientAppointmentUtils;

/**
 * Servlet implementation class PatientAppServ
 */
@WebServlet("/makeAppointment")
public class PatientAppServ extends HttpServlet {

	protected void doPost(HttpServletRequest request,
			HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		int r1, r2, r3, r4, r5, r6, r7, r8, r9, r10;
		PatientAppointmentUtils utils = new PatientAppointmentUtils();

		String fname = request.getParameter("fname");
		String mname = request.getParameter("mname");
		String lname = request.getParameter("lname");
		String sex = request.getParameter("sex");
		String m_status = request.getParameter("marital-status");
		String spouce = request.getParameter("spouce");
		String dOB = request.getParameter("dob");
		String year = request.getParameter("y");
		String month = request.getParameter("m");
		String day = request.getParameter("d");
		String guardian_name = request.getParameter("grd_name");
		String relation = request.getParameter("relation");
		String religion = request.getParameter("religion");
		String nationality = request.getParameter("nationality");
		String c_add1 = request.getParameter("cadd1");
		String c_add2 = request.getParameter("cadd2");
		String c_city = request.getParameter("c_city");
		String c_PO = request.getParameter("c_po");
		String c_PS = request.getParameter("c_ps");
		String c_municipality = request.getParameter("c_municipality");
		String c_zipcode = request.getParameter("c_zip");
		String c_country = request.getParameter("country");
		String c_state = request.getParameter("state");
		String c_district = request.getParameter("district");
		String c_email1 = request.getParameter("email1");
		String c_email2 = request.getParameter("email2");
		String c_tel = request.getParameter("tel");
		String c_mob = request.getParameter("mob");
		String c_guardian_cont = request.getParameter("grd_cont");
		String p_add1 = request.getParameter("padd1");
		String p_add2 = request.getParameter("padd2");
		String p_city = request.getParameter("p_city");
		String p_PO = request.getParameter("p_po");
		String p_PS = request.getParameter("p_ps");
		String p_municipality = request.getParameter("p_municipality");
		String p_zipcode = request.getParameter("p_zip");
		String p_country = request.getParameter("pcountry");
		String p_state = request.getParameter("pstate");
		String p_district = request.getParameter("pdistrict");
		String p_tel = request.getParameter("ptel");
		String p_mob = request.getParameter("pmob");
		String p_guardian_cont = request.getParameter("pgrd_cont");
		String date_of_app = request.getParameter("appdate");
		String specialist = request.getParameter("specialist");
		String ambulance_facility = request.getParameter("sp");
		String disease_desc = request.getParameter("desc");
		String status = "Unread";

		String age = year + "Y" + month + "M" + day + "D";

		String marital_status;
		String gender;

		if (sex.equals("off"))
			gender = "Female";
		else
			gender = "Male";

		if (m_status.equals("off"))
			marital_status = "Unmarried";
		else
			marital_status = "Married";
		
		// Generate id
		Random rd = new Random();
		r1 = rd.nextInt(9);
		r2 = rd.nextInt(9);
		r3 = rd.nextInt(9);
		r4 = rd.nextInt(9);
		r5 = rd.nextInt(9);
		r6 = rd.nextInt(9);
		r7 = rd.nextInt(9);
		r8 = rd.nextInt(9);
		r9 = rd.nextInt(9);
		r10 = rd.nextInt(9);

		String pt_id = "M1209P" + r1 + "" + r2 + "" + r3 + "" + r4 + "" + r5
				+ "" + r6 + "" + r7 + "" + r8 + "" + r9 + "" + r10;
		String reg_date = null;
		Appointment appmt = new Appointment(pt_id, reg_date, fname, mname,
				lname, gender, marital_status, spouce, dOB, age, guardian_name,
				relation, religion, nationality, c_add1, c_add2, c_city, c_PO,
				c_PS, c_municipality, c_zipcode, c_country, c_state,
				c_district, c_email1, c_email2, c_tel, c_mob, c_guardian_cont,
				p_add1, p_add2, p_city, p_PO, p_PS, p_municipality, p_zipcode,
				p_country, p_state, p_district, p_tel, p_mob, p_guardian_cont,
				date_of_app, specialist, ambulance_facility, disease_desc,
				status);

		utils.createAppointment(appmt);
		request.setAttribute("appointment", pt_id);
		RequestDispatcher rds=request.getRequestDispatcher("SuccessAppointment.jsp");
		rds.forward(request, response);
		
	
	}
}
