<?php
/*
    * [ git reset head ] = [ git reset head . ] = [ git reset head * ]   =>> to unstage all files one time.
    
    * git reset head hello.html                         =>> to unstage this file.
    
    
    * git add . = git add *                             =>>  adding all files to stage area.
    
    * git add                                           =>> syntax error.
    
    
    * git restore --staged                              =>> syntax error.
    
    * git restore --staged . = git restore --staged *   =>> to unstage all files one time.
    
    * git restore --staged hello.html                   =>> to unstage this file.
    
    
    * code hello.html                                   =>> to open this untracked file on vs code editor.
    
    
    * then right click on the file in vs code then choose:
                                                        =>> stage changes   = adding this file to stage area.
                                                        =>> unstage changes = to unstage this file.
                                                            
    * git clean -n                                      =>> to delete unstaged files with test msg.
    
    * git clean -f                                      =>> to delete unstaged files.
                                                        
                                                        =>> [ --force ] = [ -f ].
    
    
    * stashing files before deleting it =>> i can get it out of stash box.
*/
?>