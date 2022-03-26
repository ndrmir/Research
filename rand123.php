<?php

function randThree(){
	if(rand(0,1)){
		return 1;
	}
	else{
		if(rand(0,1)){
			return 2;
		}
		else{
			return 0;
		}		
	}
}

echo randThree();

function calc($a){
	echo "\r\n";
	print($a);
}
calc(5);