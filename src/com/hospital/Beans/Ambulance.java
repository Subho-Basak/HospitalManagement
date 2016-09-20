package com.hospital.Beans;

public class Ambulance {

	private String name,location,time,ambulancetype,cost;
	private double contact;
	public Ambulance(String name, String location, String time,
			String ambulancetype, String cost, double contact) {
		super();
		this.name = name;
		this.location = location;
		this.time = time;
		this.ambulancetype = ambulancetype;
		this.cost = cost;
		this.contact = contact;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getLocation() {
		return location;
	}
	public void setLocation(String location) {
		this.location = location;
	}
	public String getTime() {
		return time;
	}
	public void setTime(String time) {
		this.time = time;
	}
	public String getAmbulancetype() {
		return ambulancetype;
	}
	public void setAmbulancetype(String ambulancetype) {
		this.ambulancetype = ambulancetype;
	}
	public String getCost() {
		return cost;
	}
	public void setCost(String cost) {
		this.cost = cost;
	}
	public double getContact() {
		return contact;
	}
	public void setContact(int contact) {
		this.contact = contact;
	}
}
