package com.hospital.Utils;

import java.sql.*;

import com.hospital.Beans.Appointment;
import com.hospital.DB.DBUtils;

public class PatientAppointmentUtils {

	Connection con = null;
	PreparedStatement pst = null;
	PreparedStatement pst1 = null;

	public void createAppointment(Appointment app) {
		String sql = "insert into appointment values(?,sysdate,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		con = DBUtils.getConnection();
		pst = DBUtils.getPreparedStatement(sql);
		int i = 0;
		try {
			pst.setString(1, app.getPt_id());
			pst.setString(2, app.getFname());
			pst.setString(3, app.getMname());
			pst.setString(4, app.getLname());
			pst.setString(5, app.getGender());
			pst.setString(6, app.getMarital_status());
			pst.setString(7, app.getSpouce());
			pst.setString(8, app.getDOB());
			pst.setString(9, app.getAge());
			pst.setString(10, app.getGuardian_name());
			pst.setString(11, app.getRelation());
			pst.setString(12, app.getReligion());
			pst.setString(13, app.getNationality());
			pst.setString(14, app.getC_add1());
			pst.setString(15, app.getC_add2());
			pst.setString(16, app.getC_city());
			pst.setString(17, app.getC_PO());
			pst.setString(18, app.getC_PS());
			pst.setString(19, app.getC_municipality());
			pst.setString(20, app.getC_zipcode());
			pst.setString(21, app.getC_country());
			pst.setString(22, app.getC_state());
			pst.setString(23, app.getC_district());
			pst.setString(24, app.getC_email1());
			pst.setString(25, app.getC_email2());
			pst.setString(26, app.getC_tel());
			pst.setString(27, app.getC_mob());
			pst.setString(28, app.getC_guardian_cont());
			pst.setString(29, app.getP_add1());
			pst.setString(30, app.getP_add2());
			pst.setString(31, app.getP_city());
			pst.setString(32, app.getP_PO());
			pst.setString(33, app.getP_PS());
			pst.setString(34, app.getP_municipality());
			pst.setString(35, app.getP_zipcode());
			pst.setString(36, app.getP_country());
			pst.setString(37, app.getP_state());
			pst.setString(38, app.getP_district());
			pst.setString(39, app.getP_tel());
			pst.setString(40, app.getP_mob());
			pst.setString(41, app.getP_guardian_cont());
			pst.setString(42, app.getDate_of_app());
			pst.setString(43, app.getSpecialist());
			pst.setString(44, app.getAmbulance_facility());
			pst.setString(45, app.getDisease_desc());
			pst.setString(46, app.getStatus());

			i = pst.executeUpdate();

			DBUtils.releaseResources();

		} catch (SQLException e) {
			e.getMessage();
		}

		if (i > 0)
			System.out.println("registered");
		else
			System.out.println("not added");

	}
}
