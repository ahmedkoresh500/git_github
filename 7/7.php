<?php

/*
    * [git -l]                              =>> 3 are the same  =>> to display some configurations
    * [git --l]                             =>> 3 are the same  =>> to display some configurations
    * [git --list]                          =>> 3 are the same  =>> to display some configurations
    
    * [git config -l]                       =>> two are the same  =>> to display all configurations
    * [git config --list]                   =>> two are the same  =>> to display all configurations
    
    * [git config --l]                      =>> to display other all configurations
    * [git config -list]                    =>> command not found

    ==================

    * [git help config]                   =>> to open [help page] in the browser
    * [git config -l --show-origin]       =>> to display from where my configurations come

    * [git config --global user.email               =>> to display [github email]
    * [git config --global user.name]               =>> to display [github userName]
    
    * [git config --global --unset user.email]      =>> [1] to unset email
    * [git config --global --unset user.name]       =>> [1] to unset userName.

    * [git config --global user.email ""]           =>> [2] to unset email
    * [git config --global user.name ""]            =>> [2] to unset userName
    
    * [git config -l]                   =>> to display all configurations
    * [git config --list]               =>> to display all configurations.
    
    * [git config --global user.email "ahmedkoresh500@gmail.com"]   =>> [3] to reset email
    * [git config --global user.name "ahmedkoresh500"]              =>> [3] to reset userName.
    
    * [git config --global user.email]                              =>> to display email
    * [git config --global user.name]                               =>> to display userName.
    
    * [git config --global --edit]          =>> to open [unix window]
                                            =>> to display [user details], [alias details]

    * to exit unix window:
    [1][ESC]    [2][:wq]or[:wq!]   [3][enter]
*/

?>