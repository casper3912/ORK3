<?php

class Session
{
    function __construct()
    {
        session_start();
        if ( !isset( $_SESSION[ 'Session_Vars' ] ) ) $_SESSION[ 'Session_Vars' ] = [ ];
    }

    function __set( $name, $value )
    {
        $_SESSION[ 'Session_Vars' ][ $name ] = $value;
    }

    function __get( $name )
    {
        if ( array_key_exists( $name, $_SESSION[ 'Session_Vars' ] ) ) {
            return $_SESSION[ 'Session_Vars' ][ $name ];
        }
    }

    function __unset( $name )
    {
        if ( array_key_exists( $name, $_SESSION[ 'Session_Vars' ] ) ) {
            unset( $_SESSION[ 'Session_Vars' ][ $name ] );
        }
    }

    function __isset( $name )
    {
        if ( array_key_exists( $name, $_SESSION[ 'Session_Vars' ] ) ) return true;
        return false;
    }
}