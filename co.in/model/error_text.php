<?php
/**
@file Name error_text
    * @brief     output Debug text to console by javascript
    * @author    gavin (106524018)
    * @date      2017/11/11 
	
	
	* import lib
        * @lib name      : None
        * @brief         : None
        * @using         : None

    * func
        * @func name     : debug_console
        * @brief         : Print a debug text or waring text in console windows
        * @func func_in  : String
        * @funcreturn    : None

    * main var
        * @var name      : None
        * @type          : None
        * @brief         : None
        * @Defined by    : None


*/

function debug_console( $Debug_String ){    

    echo " <script>console.log( 'Debug Objects: " . $Debug_String . "' );</script>" ;
}

?>
