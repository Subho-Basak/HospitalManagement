package com.hospital.Utils;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import com.hospital.Beans.Medicine;
import com.hospital.DB.DBUtils;

public class AddMedicineUtil {

	Connection con = null;
	PreparedStatement pst = null;
	PreparedStatement pst1 = null;

	public void addMedicine(Medicine med) {
		String sql = "insert into medicalStore values(?,?,?,?,?,?)";
		con = DBUtils.getConnection();
		pst = DBUtils.getPreparedStatement(sql);
		int i = 0;
		
		try{
			pst.setString(1, med.getVms());
			pst.setString(2, med.getName());
			pst.setString(3,med.getType());
			pst.setString(4, med.getStrength());
			pst.setInt(5,med.getCost());
			pst.setInt(6, med.getQuantity());
			
			i=pst.executeUpdate();
			
			DBUtils.releaseResources();
		}catch(SQLException s){
			s.printStackTrace();
		}
		
		if (i > 0)
			System.out.println("booked");
		else
			System.out.println("not added");
	}
}
