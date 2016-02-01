<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


    class Translate{

    	public function gradelevel($name =""){
           
    		switch ($name) {
    			case '1':
    				return "Grade 1 / ថ្នាក់ទី ១";
    				break;
    			case '2':
    				return "Grade 2 / ថ្នាក់ទី ២";
    				break;
    			
    			case '3':
    				return "Grade 3 / ថ្នាក់ទី ៣";
    				break;
    			case '4':
    				return "Grade 4 / ថ្នាក់ទី ៤";
    				break;
    			case '5':
    				return "Grade 5 / ថ្នាក់ទី ៥";
    				break;
    			case '6':
    				return "Grade 6 / ថ្នាក់ទី ៦";
    				break;
    			case '7':
    				return "Grade 7 / ថ្នាក់ទី ៧";
    				break;
    			case '8':
    				return "Grade 8 / ថ្នាក់ទី ៨";
    				break;
    			case '9':
    				return "Grade 9 / ថ្នាក់ទី ៩";
    				break;
    			case '10':
    				return "Grade 10 / ថ្នាក់ទី ១០";
    				break;
    			case '11':
    				return "Grade 11 / ថ្នាក់ទី ១១";
    				break;
    			case '12':
    				return "Grade 12 / ថ្នាក់ទី ១២";
    				break;
    			case '13':
    				return "Year 1 / ឆ្នាំទី ១";
    				break;
    			case '14':
    				return "Year 2 / ឆ្នាំទី ១";
    				break;
    			case '15':
    				return "year 3 / ឆ្នាំទី ២";
    				break;
    			case '16':
    				return "year 4 / ឆ្នាំទី ៣";
    				break;
    			default:
    				return "​";
    				break;
    		}

    		return "";
                                              
    	}




   }