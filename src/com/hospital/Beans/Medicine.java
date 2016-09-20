package com.hospital.Beans;

public class Medicine {

	String vms,name,type,strength;
	int cost,quantity;
	public Medicine(String vms, String name, String type, String strength,
			int cost, int quantity) {
		super();
		this.vms = vms;
		this.name = name;
		this.type = type;
		this.strength = strength;
		this.cost = cost;
		this.quantity = quantity;
	}
	public String getVms() {
		return vms;
	}
	public void setVms(String vms) {
		this.vms = vms;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getType() {
		return type;
	}
	public void setType(String type) {
		this.type = type;
	}
	public String getStrength() {
		return strength;
	}
	public void setStrength(String strength) {
		this.strength = strength;
	}
	public int getCost() {
		return cost;
	}
	public void setCost(int cost) {
		this.cost = cost;
	}
	public int getQuantity() {
		return quantity;
	}
	public void setQuantity(int quantity) {
		this.quantity = quantity;
	}
}
