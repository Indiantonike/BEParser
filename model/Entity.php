<?php

public class Entity{
	private String sLabel ;
	private String sId ;

	public Entity(){
		this.sLabel = '' ;
		this.sId = '';
	}

	public Entity(String the_sLabel, String the_sId){
		this.sLabel = the_sLabel ;
		this.sId = the_sId;
	}

	public String getLabel(){
		return this.sLabel ;
	}

	public String getId(){
		return this.sId ;
	}
}

?>