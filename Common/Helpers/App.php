<?php

namespace Common\Helpers;

class App
{

	/**
	* Returns the project's root directory.
	*
	* @access 	public
	* @static
	* @return 	String
	*/
	public static function getRootDirectory()
	{
		return ROOT_DIRECTORY;
	}

	/**
	* Returns the project's common directory.
	*
	* @access 	public
	* @static
	* @return 	String
	*/
	public static function getCommonDirectory()
	{
		return COMMON_DIRECTORY;
	}

	/**
	* Returns the project's public directory.
	*
	* @access 	public
	* @static
	* @return 	String
	*/
	public static function getPublicDirectory()
	{
		return PUBLIC_DIRECTORY;
	}

	/**
	* Returns the project's core directory.
	*
	* @access 	public
	* @static
	* @return 	String
	*/
	public static function getCoreDirectory()
	{
		return CORE_DIRECTORY;
	}

}