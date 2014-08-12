<?php

public class League extends Entity{

	private String idRegion ;

	public League(){
		idRegion = null ;
		super();
	}

	public League(String the_idRegion, String the_sLabel, String the_sId){
		this.idRegion = the_idRegion ;

		super(the_sLabel, the_sId);
	}

	public void setIdRegion(String the_idRegion){
		this.idRegion = the_idRegion ;
	}

	public String getIdRegion(){
		return this.idRegion ;
	}
}

?>