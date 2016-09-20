package com.hospital.Utils;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

import com.hospital.Beans.Appointment;
import com.hospital.DB.DBUtils;

public class ViewAppointmentUtils {
	Connection con = null;
	Statement st = null;
	PreparedStatement pst = null;
	ResultSet rs = null;
	
	public ArrayList<Appointment> viewAllAppointments() {
		Appointment appointment = null;
		ArrayList<Appointment> allNewAppointment = new ArrayList<Appointment>();

		con = DBUtils.getConnection();
		st = DBUtils.getSimpleStatement();
		String sql = "select * from appointment where status='Unread'";

		try {
			rs = st.executeQuery(sql);
			if (rs != null) {
				while (rs.next()) {
					appointment = new Appointment();
					
					appointment.setPt_id(rs.getString(1));
					appointment.setReg_date(rs.getString(2));
					appointment.setFname(rs.getString(3));
					appointment.setLname(rs.getString(5));
					
							
					allNewAppointment.add(appointment);
					
				}

			}
			DBUtils.releaseResources();
		} catch (SQLException e) {
			e.printStackTrace();
		}
		// TODO Auto-generated method stub
		return allNewAppointment;
	}
}
