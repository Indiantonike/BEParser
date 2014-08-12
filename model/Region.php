<?php

public class Region extends Entity{
	
	private String idSport ;

	public Region(){
		idSport = null ;
		super();
	}

	public Region(String the_idSport, String the_sLabel, String the_sId){
		this.idSport = the_idSport ;

		super(the_sLabel, the_sId);
	}

	public void setIdSport(String the_idSport){
		this.idSport = the_idSport ;
	}

	public String getIdSport(){
		return this.idSport ;
	}
}

?>