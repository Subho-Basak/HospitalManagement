package com.hospital.Utils;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import com.hospital.Beans.Ambulance;
import com.hospital.DB.DBUtils;

public class AmbulanceUtil {

	Connection con = null;
	PreparedStatement pst = null;
	PreparedStatement pst1 = null;
	
	public void bookAmbulance(Ambulance ambu){
		String sql="insert into bookAmbulance values(?,?,?,?,?,?,?)";
		con = DBUtils.getConnection();
		pst = DBUtils.getPreparedStatement(sql);
		int i = 0;
		
		try{
			pst.setString(1, ambu.getName());
			pst.setDouble(2, ambu.getContact());
			pst.setString(3, ambu.getLocation());
			pst.setString(4, ambu.getTime());
			pst.setString(5, ambu.getAmbulancetype());
			pst.setString(6, ambu.getCost());
			pst.setString(7, "Dispatched");
			i = pst.executeUpdate();

			DBUtils.releaseResources();
			
		}catch(SQLException e){
			e.getMessage();
		}
		if (i > 0)
			System.out.println("booked");
		else
			System.out.println("not added");

	}
}
